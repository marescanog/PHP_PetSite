<?php 
    /* Database Connection read and write*/
    require_once('../../private/db_connect_upload.php');
    require_once('../../private/email_info.php');
    require_once('./enum.php');

    $retVal_cntct = "";
    $isValid = true;
    $status_cntct = 400;
    $data_cntct = []; 

    $fname_cntct = isset($_REQUEST['fname']) ? trim($_REQUEST['fname']) : null;
    $lname_cntct = isset($_REQUEST['lname']) ? trim($_REQUEST['lname']) : null;
    $email_cntct = isset($_REQUEST['email']) ? trim($_REQUEST['email']) : null;
    $number_cntct = isset($_REQUEST['mobile']) ? $_REQUEST['mobile'] : 'none';
        if(empty($number_cntct)){
            $number_cntct = 'none';
        }
    $pet_ID = isset($_REQUEST['petID']) ? trim($_REQUEST['petID']) : null;
    $pet_name = isset($_REQUEST['petName']) ? trim($_REQUEST['petName']) : null;
    $pet_specie = isset($_REQUEST['petSpecie']) ? trim($_REQUEST['petSpecie']) : null;
    $pet_breed = isset($_REQUEST['petBreed']) ? trim($_REQUEST['petBreed']) : null;
    $pet_Gender = isset($_REQUEST['petGender']) ? trim($_REQUEST['petGender']) : null;

    /* ========================================================= */
    //              Validation for string input
    /* ========================================================= */

    // Check required fields are empty or not
    if($fname_cntct == '' || $lname_cntct == '' || $email_cntct == '' || $number_cntct == ''){
        $isValid = false;
        $retVal_cntct = "Please fill all fields.";
    }

    // Check if email is valid or not
    if ($isValid && !filter_var($email_cntct, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        $retVal_cntct = "Invalid email.";
    }

    // LIMIT VARCHAR Inputs based on database restrictions
    if ($isValid && strlen($fname_cntct ) > 25){
        $isValid = false;
        $retVal_cntct = "First Name exceeds 25 character limit. Please input less than 25 characters by contracting your first name";
    }

    if ($isValid && strlen($lname_cntct ) > 25){
        $isValid = false;
        $retVal_cntct = "Last Name exceeds 25 character limit. Please input less than 25 characters by contracting your Last name";
    }

    if ($isValid && strlen($email_cntct ) > 45){
        $isValid = false;
        $retVal_cntct = "Email exceeds 45 character limit.";
    }

    if ($isValid && strlen($number_cntct ) > 15){
        $isValid = false;
        $retVal_cntct = "Phone number 15 character limit.";
    }

    /* ====================================== */
    /*     Reference ID Number Generation     */
    /* ====================================== */
    if($isValid){
        require_once('./generateReferenceID.php');
    }

    /* ====================================== */
    /*       Inserting Records into DB        */
    /* ====================================== */
    if($isValid){

        /* $referenceNum and $formSubID comes from generateReferenceID.php */ 
        // INSERT THE GENERATED ID INTO THE FORM SUBMISSION TABLE (SQL injection avoidance using prepared statments in PDO)
        $insertIDSQL = "INSERT INTO form_submission (formSub_ID, form_type, refID) VALUES (?, ?, ?)";
        try{
            $stmt = $db_conn_upload->prepare($insertIDSQL);
            $stmt->execute([null, ENUM_FORM_TYPE::ADP, $referenceNum]);
            $stmt = null;
        } catch (Exception $e) {
            $isValid = false;
            $retVal_cntct = $e->getMessage();
        }


        // INSERT THE FORM DATA INTO THE ADOPTION FORM SUBMISSION TABLE (SQL injection avoidance using prepared statments in PDO)
        $insertAdoptionFormData = "INSERT INTO adoption_inquiry (adoptSub_Id, formSub_ID, first_Name, last_Name, email, phone_number, TicketStat_ID, Description, pet_ID, ref_ID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        try{
            $stmt = $db_conn_upload->prepare($insertAdoptionFormData    );
            $stmt->execute([
                null, $formSubID, $fname_cntct, $lname_cntct, $email_cntct, $number_cntct, ENUM_TICKET_STAT_TYPE::NEW_TKT, 
                'Sent contact details to foster carer', $pet_ID, $referenceNum
                ]);
            $stmt = null;
        } catch (Exception $e) {
            $isValid = false;
            $retVal_cntct = $e->getMessage();
        }


        if($isValid){
            $retVal_cntct = "Adoption form submission sucess. Email sent to ".$email_cntct." With reference ID ADP-".$referenceNum;
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
                        <p style=\"font-size:1.55em;\"> Greetings <strong>".$fname_cntct."</strong>!</p>
                        <p style=\"font-size:1.2em;\"> The reference number for your adoption inquiry is <span style=\"color:#BF3D96;\"><strong>ADP-".$referenceNum."</strong></span>.</p> 
            
                        <div style=\"text-align:center;border: 3px solid #E3E3E3; padding:10px; background-color:#F8F8F8; max-width:500px; margin-left:auto; margin-right:auto\">
                        <p style=\"font-size:1rem; margin:0;\"><strong>Adoption Inquiry for</strong></p>
                        <br>
                        <img src=\"https://cebupetmatch.xyz/images/PETS/cover/".$pet_ID.".jpg\" alt=\"PetName\" style=\"width:150px;height:150px;border-radius:50%\">
                        <p><strong>Name: </strong>".$pet_name."</p>
                        <p><strong>Specie: </strong>".$pet_specie."</p>
                        <p><strong>Breed: </strong>".$pet_breed."</p>
                        <p><strong>Gender: </strong>".$pet_Gender."</p>
                        </div>
                        <br>
                        <p style=\"font-size:0.9rem; margin:0;\">The foster carer will be in touch with you ASAP. For more details about this pet visit <a href=\"http://cebupetmatch.xyz/info.php?pet_ID=".$pet_ID."\">this link<a/></p>
                        <p> Please Allow 24-48 hours for a representative to contact you. Thank you for your interest and have a great day!</p>
                        <p> -The Cebu Pet Match Team</p>
                        <br>
                        <hr>
                        <p style=\"font-size:0.85rem;\"> This email was sent to ".$email_cntct." because you've submitted an inquiry on the cebupetmatch.xyz website. If you did not submit an inquiry, please disregard this message.  </p>
                    </div>
                ";
        
            $subject = "Cebu Pet Match Adoption Inquiry Submission";
        
            $headers = array(
                "Authorization: Bearer ".$SENDGRID_API_KEY,
                'Content-Type: application/json',
            );
            $data_email = array(
                "personalizations" => array(
                    array(
                        "to" => array(
                            array(
                                "email" => $email_cntct,
                                "name" => $fname_cntct
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
        "refNo" => "ADP-".$referenceNum
    );
    
    $myJSON = json_encode($myObj, JSON_FORCE_OBJECT);
    
    echo $myJSON;

    // close the connection
    $db_conn_upload = null;
?>