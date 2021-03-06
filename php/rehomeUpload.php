<?php 

include_once("../../private/db_connect_upload.php");
require_once('../../private/email_info.php');
require_once('./enum.php');

$retVal = "";
$isValid = true;
$status = 400;

$fname = isset($_REQUEST['fname']) ? trim($_REQUEST['fname']) : null;
$lname = isset($_REQUEST['lname']) ? trim($_REQUEST['lname']) : null;
$email = isset($_REQUEST['email']) ? trim($_REQUEST['email']) : null;
$mobile = isset($_REQUEST['mobile']) ? $_REQUEST['mobile'] : 'none';
    if(empty($mobile)){
        $mobile = 'none';
    }
$petName = isset($_REQUEST['petname']) ? trim($_REQUEST['petname']) : null;
$specie = isset($_REQUEST['specie']) ? (int)trim($_REQUEST['specie']) : null;
$breed = isset($_REQUEST['breed']) ? trim($_REQUEST['breed']) : 'N/A';
    if(empty($breed)){
        $breed = 'N/A';
    }
$age = isset($_REQUEST['age']) ? $_REQUEST['age'] : null;
$bday = isset($_REQUEST['bday']) ? $_REQUEST['bday'] : 'unknown';
    if(empty($bday)){
        $bday = 'unknown';
    }
$gender = isset($_POST['gender']) ? (int)$_POST['gender'] : null;
$city = isset($_REQUEST['city']) ? (int)$_REQUEST['city'] : null;
$spay = isset($_REQUEST['spay']) ? $_REQUEST['spay'] : null;
$vaccinated = isset($_REQUEST['vacc']) ? $_REQUEST['vacc'] : null;
$petDescription = isset($_REQUEST['petDesc']) ? trim($_REQUEST['petDesc']) : null;
$reason = isset($_REQUEST['reason']) ? trim($_REQUEST['reason']) : null;

$imageCount = (int) trim($_REQUEST['totalImages']);


// Store All files in an array
$files = array();
for($indx = 0; $indx < $imageCount; $indx++){
    array_push($files, $_FILES['file'.$indx]);
}



/* ========================================================= */
//              Validation for string input
/* ========================================================= */

// Check required fields are empty or not
if($fname == '' || $email == '' || $petName == '' || $specie == '' || $age == '' || $gender == '' || $city == '' || $petDescription == '' || $reason == '' || $spay == '' || $vaccinated == ''){
    $isValid = false;
    $retVal = "Please fill all fields.";
}

// Concat first name and lastname when lastname is not blank
if($lname != ''){
    $fname .= ' '.$lname;
}

// Check if email is valid or not
if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $isValid = false;
    $retVal = "Invalid email.";
}

// LIMIT VARCHAR Inputs based on database restrictions
if ($isValid && strlen($fname) > 100){
    $isValid = false;
    $retVal = "Combined First name and last name is too long and exceeds 100 characters. Try using initials for First Name.";
}

if ($isValid && strlen($email) > 100){
    $isValid = false;
    $retVal = "Email is too long and exceeds 100 characters.";
}

if ($isValid && strlen($mobile) > 13){
    $isValid = false;
    $retVal = "Mobile Number exceeds limit. Enter 11 digits";
}

if ($isValid && strlen($petName) > 50){
    $isValid = false;
    $retVal = "Pet name is too long and exceeds 50 character limit.";
}

if ($isValid && strlen($breed) > 50){
    $isValid = false;
    $retVal = "Breed Description is too long and exceeds 50 character limit.";
}

if ($isValid && strlen($petDescription) > 2500){
    $isValid = false;
    $retVal = "Description exceeds 2500 character limit.";
}

if ($isValid && strlen($reason) > 2500){
    $isValid = false;
    $retVal = "Reason exceeds 2500 character limit.";
}


/* ========================================================= */
// Extra Validation for gender, city, spay and vaccinations
/* ========================================================= */

if($isValid && $gender != '' && (ENUM_GENDER::isValidValue($gender) == false)){
    $isValid = false;
    $retVal = "Invalid gender selection.";
}

if($isValid && $city != '' && (ENUM_CITY::isValidValue($city) == false)){
    $isValid = false;
    $retVal = "Invalid city selection.";
}

$acceptedSRadio = array('yes', 'no');

if($isValid && $spay != '' && (in_array ( $spay , $acceptedSRadio ,  true )  === false)){
    $isValid = false;
    $retVal = "Invalid spay type selection. Please choose only yes or no";
}

if($isValid &&  $vaccinated != '' && (in_array ( $vaccinated , $acceptedSRadio ,  true )  === false)){
    $isValid = false;
    $retVal = "Invalid vaccination status selection. Please choose only yes or no";
}



/* ====================================== */
/* Error Handlers for File Being Uploaded */
/* ====================================== */

// Check if there files array is not empty (There are files being uploaded)
if($isValid && $files == null){
    $isValid = false;
    $retVal = "Please upload at least one image of your pet";
}

// Check if filecount is less than maximum 4 files upload
if($isValid && $imageCount > 4){
    $isValid = false;
    $retVal = "Maximum number of images exceeded. Please upload between 1-4 images of your pet.";
}

// Check each file in the array on the criteria
if($isValid && $files != null){

    for($indx = 0; $isValid && $indx < $imageCount; $indx++){
        $imageName = $files[$indx]['name'];
        $imageSize = $files[$indx]['size'];
        $imageError = $files[$indx]['error'];

        $imgExt = explode('.', $imageName);
        $imgActualExt = strtolower(end($imgExt));

        $allowed = array('jpg', 'jpeg', 'png');

        // Limit extensions to jpg, jpeg and png
        if(in_array($imgActualExt, $allowed) == false){
            $isValid = false;
            $retVal = $imageName." has an invalid image type. Please upload jpg or png only.";
        } 

        // Check upload error
        if($imageError !== 0){
            $isValid = false;
            $retVal = "There was an error uploading file: ".$imageName.". Try reselecting the image";
        }

        // Limit size below 100MB
        if($imageSize > 100000){
            $isValid = false;
            $retVal = $imageName." is too large. Please upload images below 100MB";
        }

        // If all is good for this file, change the current name of file to a unique ID
        if($isValid){
            $fileNameNew = uniqid('', true).".".$imgActualExt;
            $files[$indx]['name'] = $fileNameNew;
        }
    }

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
    $insertImgSQL = "INSERT INTO form_submission (formSub_ID, form_type, refID) VALUES (?, ?, ?)";
    try{
        $stmt = $db_conn_upload->prepare($insertImgSQL);
        $stmt->execute([null, ENUM_FORM_TYPE::REH, $referenceNum]);
        $stmt = null;
    } catch (Exception $e) {
        $isValid = false;
        $retVal = $e->getMessage();
    }


    // INSERT THE FORM DATA INTO THE REHOMING FORM SUBMISSION TABLE (SQL injection avoidance using prepared statments in PDO)
    $insertRehomingFormData = "INSERT INTO rehoming_form_submission (rehSub_ID, formSub_ID, ref_ID, name, email, mobile, petname, specie, breed, age, bday, gender, city, spayed, vaccinated, description, reason, total_image_upload, approval_status_ID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    try{
        $stmt = $db_conn_upload->prepare($insertRehomingFormData    );
        $stmt->execute([
            null, $formSubID, $referenceNum, $fname, $email, $mobile,
            $petName, $specie, $breed, $age, $bday, $gender,
            $city, $spay, $vaccinated, $petDescription, $reason, $imageCount, ENUM_APPROV_STATUS::Pending,
            ]);
        $stmt = null;
    } catch (Exception $e) {
        $isValid = false;
        $retVal = $e->getMessage();
    }


    // INSERT EACH IMAGE INTO IMAGE TABLE (SQL injection avoidance using prepared statments in PDO)
    $insertImgSQL = "INSERT INTO image (imageID, formSub_ID, title) VALUES (?, ?, ?)";
    
    for($indx = 0; $isValid && $indx < $imageCount; $indx++){
        $imgName = $files[$indx]['name'];        
        try{
            $stmt = $db_conn_upload->prepare($insertImgSQL);
            $stmt->execute([null, $formSubID, $imgName]);
            $stmt = null;
        } catch (Exception $e) {
            $isValid = false;
            $retVal = $e->getMessage();
        }
        
    }
    
    // TRANSFER IMAGES FROM TEMP LOCATION TO UPLOAD FOLDER
    for($indx = 0; $isValid && $indx < $imageCount; $indx++){
        $imageTmpName = $files[$indx]['tmp_name'];
        $imgDestination = '../uploads/'.$files[$indx]['name'];
        move_uploaded_file($imageTmpName, $imgDestination);
    }
    
    if($isValid){
        $retVal = "Rehome form submission sucess. Email sent to ".$email." With reference ID REH-".$referenceNum;
        $status = 200;

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
                    <p style=\"font-size:1.55em;\"> Greetings <strong>".$fname."</strong>!</p>
                    <p style=\"font-size:1.2em;\"> The reference number for your rehoming inquiry is <span style=\"color:#BF3D96;\"><strong>REH-".$referenceNum."</strong></span>.</p> 
        
                    <div style=\"width:85%; margin-left:auto; margin-right:auto;\">
                        <p style=\"font-size:0.9rem; margin:0;\">Your Form Submission:</p>
                        <div style=\"background-color:#F6F6F6; padding:10px; min-height:70px; \">
                            <p><strong>Pet Name:</strong> ".$petName."</p>
                            <p><strong>Specie:</strong> ".ENUM_SPECIES::getKey($specie)."</p>
                            <p><strong>Breed:</strong> ".$breed."</p>
                            <p><strong>Age:</strong> ".$age."</p>
                            <p><strong>Birthday:</strong> ".$bday."</p>
                            <p><strong>Gender:</strong> ".ENUM_GENDER::getKey($gender)."</p>
                            <p><strong>City:</strong> ".ENUM_CITY::getKey($city)."</p>
                            <p><strong>Spayed?</strong> ".$spay."</p>
                            <p><strong>Vaccinated?</strong> ".$vaccinated."</p>
                            <p><strong>Pet Description:</strong> ".$petDescription."</p>
                            <p><strong>Reason for rehoming:</strong> ".$reason."</p>
                            <p><strong>Number of Images Submitted:</strong> ".$imageCount."</p>
                            <p><strong>Mobile Number Provided:</strong> ".$mobile."</p>
                        </div>
                    </div>
                    
                    <p> Please Allow 24-48 hours for a representative to contact you. Thank you for your interest and have a great day!</p>
                    <p> -The Cebu Pet Match Team</p>
                    <br>
                    <hr>
                    <p style=\"font-size:0.85rem;\"> This email was sent to ".$email." because you've submitted an inquiry on the cebupetmatch.xyz website. If you did not submit an inquiry, please disregard this message.  </p>
                </div>
            ";
    
        $subject = "Cebu Pet Match Rehoming Inquiry Submission";
    
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
                            "name" => $fname
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

//var_dump($retVal);

$myObj = array(
    "status" => $status,
    "message" => $retVal,
);

$myJSON = json_encode($myObj, JSON_FORCE_OBJECT);

$db_conn_upload = null;

echo $myJSON;



?>