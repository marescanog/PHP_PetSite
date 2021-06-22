<?php 
    /* Database Connection read and write*/
    require_once('../../private/db_connect_upload.php');
    require_once('./enum.php');

    $retVal_cntct = "";
    $isValid = true;
    $status_cntct = 400;
    $data_cntct = []; 

    $fname_cntct = isset($_REQUEST['fname']) ? trim($_REQUEST['fname']) : null;
    $lname_cntct = isset($_REQUEST['lname']) ? trim($_REQUEST['lname']) : null;
    $email_cntct = isset($_REQUEST['email']) ? trim($_REQUEST['email']) : null;
    $number_cntct = isset($_REQUEST['mobile']) ? $_REQUEST['mobile'] : 'none';
        if(empty($mobile)){
            $mobile = 'none';
        }
    $pet_ID = isset($_REQUEST['petID']) ? trim($_REQUEST['petID']) : null;

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