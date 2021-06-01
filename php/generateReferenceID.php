<?php 

    /* ====================================== */
    /*     Reference ID Number Generation     */
    /* ====================================== */
    // Declare Variables ($isValid should be declared before this section)
    $lastID = '';
    $referenceNum = '';
    $formSubID = '';

    // BUILD SQL QUERY to get last ID number from form_submissions table
    $sql_getLastID = 'SELECT `formSub_ID` FROM `form_submission` ORDER BY `form_submission`.`formSub_ID` DESC;';

    // GET LAST ID NUMBER from form_submissions table
    try{
        $stmt = $db_conn_upload->prepare($sql_getLastID);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $lastID = ( $result == false ) ? 0 : (int) $result['formSub_ID'];
        $retval = $lastID;
        $stmt = null;
    } catch(Exception $e){
        //$retVal = $e->getMessage();
        $retVal = 'There was an error accessing the database. Reference ID number cannot be generated';
        $isValid = false;
    }

    // Only generate reference when DB Query was sucessful
    if($isValid){
        // GENERATE REFERENCE NUMBER based on last ID number
        if(empty($lastID)){
            $referenceNum = str_pad('1', 7, 0, STR_PAD_LEFT);
            $formSubID = 1;
        }
        else{
            // GENERATE HEX NUMBER based on last ID number
            $formSubID = $lastID + 1;
            $hex = dechex($formSubID);
            $referenceNum = str_pad(strtoupper ($hex), 7, 0, STR_PAD_LEFT);
        }
    }

?>