<?php 

    /* Database Connection read and write*/
    // require_once('../private/db_connect_upload.php');
   
    $retVal_cntct = "";
    $isValid_cntct = true;
    $status_cntct = 400;
    $data_cntct = []; 

    $fname_cntct = trim($_REQUEST['fname']);
    $lname_cntct = trim($_REQUEST['lname']);
    $email_cntct = trim($_REQUEST['email']);
    $number_cntct = trim($_REQUEST['number']);

    
    /*
        WHAT YOU JUST FINISHED:
            you just finished checking the connection between the different pages. They now pass data to each other
            Now you just have to verify the data and set up the database
            Also the setup for the order confirmation number

        TO DO:
            Then make a table for database with the information
            Maybe PHP mailer later ? (Make a database with all contact information of foster carers)

        FINISHED
         -Ajax setup
         -styling of the Modal form/mobile friendly
    */

    $myObj = array(
        'fname' => $fname_cntct,
        'lname' => $lname_cntct,
        'email' => $email_cntct,  
        'number' => $number_cntct
    );
    
    $myJSON = json_encode($myObj, JSON_FORCE_OBJECT);
    
    echo $myJSON;

    // $con->close();

?>