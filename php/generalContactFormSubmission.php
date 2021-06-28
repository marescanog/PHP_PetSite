<?php 
    /* Database Connection read and write*/
        require_once('../../private/db_connect_upload.php');
        require_once('../../private/email_info.php');
        require_once('./enum.php');

    $retVal_cntct = "";
    $isValid = true;
    $status_cntct = 400;
    $data_cntct = []; 

    $name = isset($_REQUEST['name']) ? trim($_REQUEST['name']) : null;
    $email = isset($_REQUEST['email']) ? trim($_REQUEST['email']) : null;
    $mobile = isset($_REQUEST['mobile']) ? $_REQUEST['mobile'] : 'none';
        if(empty($mobile)){
            $mobile = 'none';
        }
    $message = isset($_REQUEST['message']) ? trim($_REQUEST['message']) : null;

    // /* ========================================================= */
    // //              Validation for string input
    // /* ========================================================= */

    // Check required fields are empty or not
    if($name == '' || $email == '' || $mobile == '' || $message == ''){
        $isValid = false;
        $retVal_cntct = "Please fill all fields.";
    }

    // Check if email is valid or not
    if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        $retVal_cntct = "Invalid email.";
    }

    // LIMIT VARCHAR Inputs based on database restrictions
    if ($isValid && strlen($name ) > 50){
        $isValid = false;
        $retVal_cntct = "Name exceeds 50 character limit. Please input less than 50 characters by contracting your first name";
    }

    if ($isValid && strlen($email ) > 45){
        $isValid = false;
        $retVal_cntct = "Email exceeds 45 character limit.";
    }

    if ($isValid && strlen($mobile ) > 15){
        $isValid = false;
        $retVal_cntct = "Phone number 15 character limit.";
    }

    if ($isValid && strlen($message ) > 10000){
        $isValid = false;
        $retVal_cntct = "Message exceeds 10,000 character limit";
    }

    // /* ====================================== */
    // /*     Reference ID Number Generation     */
    // /* ====================================== */
    if($isValid){
        require_once('./generateReferenceID.php');
    }

    // /* ====================================== */
    // /*       Inserting Records into DB        */
    // /* ====================================== */
    if($isValid){

        /* $referenceNum and $formSubID comes from generateReferenceID.php */ 
        // INSERT THE GENERATED ID INTO THE FORM SUBMISSION TABLE (SQL injection avoidance using prepared statments in PDO)
        $insertIDSQL = "INSERT INTO form_submission (formSub_ID, form_type, refID) VALUES (?, ?, ?)";
        try{
            $stmt = $db_conn_upload->prepare($insertIDSQL);
            $stmt->execute([null, ENUM_FORM_TYPE::GEN, $referenceNum]);
            $stmt = null;
        } catch (Exception $e) {
            $isValid = false;
            $retVal_cntct = $e->getMessage();
        }


        // INSERT THE FORM DATA INTO THE ADOPTION FORM SUBMISSION TABLE (SQL injection avoidance using prepared statments in PDO)
        $insertContactFormData = "INSERT INTO contact_inquiry (conForm_ID, formSub_ID, namePerson, email, phone_number, TicketStat_ID, Message, ref_ID) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        try{
            $stmt = $db_conn_upload->prepare($insertContactFormData    );
            $stmt->execute([
                null, $formSubID, $name, $email, $mobile, ENUM_TICKET_STAT_TYPE::NEW_TKT, $message, $referenceNum
                ]);
            $stmt = null;
        } catch (Exception $e) {
            $isValid = false;
            $retVal_cntct = $e->getMessage();
        }

        $referenceNum = "GEN-".$referenceNum;

        if($isValid){
            $retVal_cntct = "Adoption form submission sucess. Email sent to ".$email." With reference ID ".$referenceNum;
            $status_cntct = 200;

            // Send Grid API

            $email_sender = "noreplycebupetmatch@gmail.com";
            $body =             
                "
                    <div style=\"background-color:#211753; padding:10px; display:flex; flex-direction:row;\">
                        <img src=\"https://i.imgur.com/qymvU60.png\" alt=\"Cebu Pet Match Logo\" style=\"width:50px;height:50px; display: inline-block;\">
                        <h1 style=\"color:#FFF; font-family: 'Montserrat', sans-serif; font-size:2rem; display: inline-block; margin-top:auto; margin-bottom:auto; padding-left:10px;\"> 
                            Cebu Pet Match
                        </h1>
                    </div>
                    <div style=\"font-family:'Calibri Light'; padding:10px\">
                        <br>
                        <p style=\"font-size:1.55em;\"> Greetings <strong>".$name."</strong>!</p>
                        <p style=\"font-size:1.2em;\"> The reference number for your inquiry is <span style=\"color:#BF3D96;\"><strong>".$referenceNum."</strong></span>.</p> 
            
                        <div style=\"width:85%; margin-left:auto; margin-right:auto;\">
                            <p style=\"font-size:0.9rem; margin:0;\">Your Inquiry Message:</p>
                            <div style=\"background-color:#F6F6F6; padding:10px; min-height:70px; display:flex; \">
                                <p>".$message."</p>
                            </div>
                        </div>
                        
                        <p> Please Allow 24-48 hours for a representative to contact you. Thank you for your interest and have a great day!</p>
                        <p> -The Cebu Pet Match Team</p>
                        <br>
                        <hr>
                        <p style=\"font-size:0.85rem;\"> This email was sent to ".$email." because you've submitted an inquiry on the cebupetmatch.xyz website. If you did not submit an inquiry, please disregard this message.  </p>
                    </div>
                ";
        
            $subject = "Cebu Pet Match Contact Inquiry Submission";
        
            $headers = array(
                "Authorization: Bearer ".$SENDGRID_API_KEY,
                'Content-Type: application/json',
            );
            $data_email = array(
                "personalizations" => array(
                    array(
                        "to" => array(
                            array(
                                "email" => $email,
                                "name" => $name
                            )
                        )
                    )
                ),
                "from" => array(
                    "email" => $noreplyEmail
                ),
                "subject" => $subject,
                "content" => array(
                    array(
                        "type" => "text/html",
                        "value" => $body
                    )
                )
            );
        
        
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data_email));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($ch);
            curl_close($ch);
 
        }
    }

    $myObj = array(
        "status" => $status_cntct,
        "message" => $retVal_cntct,
        "refNo" => $referenceNum,

        // "name" => $name,
        // "email" => $email,
        // "mobile" => $mobile,
        // "messageContent" =>  $message,
        // "reference" => $referenceNum
        // "emailStat" => $emailStatus
    );
    
    $myJSON = json_encode($myObj, JSON_FORCE_OBJECT);
    
    echo $myJSON;

    // close the connection
    $db_conn_upload = null;
?>