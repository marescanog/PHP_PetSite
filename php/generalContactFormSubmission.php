<?php 
    /* Database Connection read and write*/
    require_once('../../private/db_connect_upload.php');
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
    );
    
    $myJSON = json_encode($myObj, JSON_FORCE_OBJECT);
    
    echo $myJSON;

    // close the connection
    $db_conn_upload = null;
?>