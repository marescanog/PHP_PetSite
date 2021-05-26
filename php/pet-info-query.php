<?php
    require_once('./php/enum.php');
    /* =========================================================================== */
    /* BUILD PREVIOUS LINK                                                         */
    /* =========================================================================== */
    /* Set Variables used in preparing filter query*/
    $city = isset($_GET['city']) ? $_GET['city'] : 'All Cebu';
    $animal = isset($_GET['animal']) ? $_GET['animal'] : 'Dog';
    $gender = isset($_GET['gender']) ? $_GET['gender'] : 'Any';
    $age = isset($_GET['age']) ? $_GET['age'] : 'Any';
    $size= isset($_GET['size']) ? $_GET['size'] : 'Any';

    /* Get Current Page if a number or set the default at page 1 */
    /* Page number validation happens on the search page, no need to validate twice */
    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
        $page = (int) $_GET['page'];
    } else {
        $page = 1;
    } 

    /* BUILD THE LNK To PREVIOUS PAGE */
    $pagelink='search.php?city=';
    /* Validation for the links to avoid html injection */
    (ENUM_CITY::isValidName($city)) ? $pagelink.=$city : $pagelink.='All+Cebu';
    (ENUM_SPECIES::isValidName($animal)) ? $pagelink.='&animal='.$animal : $pagelink.='&animal=Dog';
    (ENUM_GENDER::isValidName($gender)) ? $pagelink.='&gender='.$gender : $pagelink.='&gender=Any';
    (ENUM_AGE::isValidName($age)) ? $pagelink.='&age='.$age : $pagelink.='&age=Any';
    (ENUM_SIZE::isValidName($size)) ? $pagelink.='&size='.$size : $pagelink.='&size=Any'; 
    $pagelink.='&page='.$page;

    /* =========================================================================== */
    /* GET INFORMATION FROM THE DATABASE BASED ON PET ID                           */
    /* =========================================================================== */
    /* find the last pet ID in the database */
    $lastRecordQuery = 'SELECT pet_ID FROM pets ORDER BY pets.pet_ID DESC LIMIT 1';
    $petInfoQuery = '';
    $results = $db_connection->query($lastRecordQuery); 
    $results = $results->fetch();
    $lastID = $results[0];
    $lastID += 0;
    
    /* First validation - Get Current pet_ID or set the default at 'NOT FOUND' */
    /* pet_ID should be numeric */
    if (isset($_GET['pet_ID']) && is_numeric($_GET['pet_ID'])) {
        $petID = (int) $_GET['pet_ID'];
    } else {
        $petID = 'NOTFOUND';
    }   /* end if */

    /* Second validation - pet_ID should be less than or equal to lastID */
    if ($petID > $lastID) {
        $petID = 'NOTFOUND';
    } /* end if */

    /* Third validation - pet_ID should be greater than or equal to 1 */
    if ($petID < 1) {
        $petID = 'NOTFOUND';
    } /* end if */

    /* IF PET ID IS NOT FOUND DO NOT RUN QUERY, Diplay 404 pet's page with ID blah not found */
    if($petID != 'NOTFOUND'){
        $petInfoQuery = 'SELECT * FROM pets WHERE pet_ID = '.$petID;
        $petInfo = $db_connection->query($petInfoQuery); 
        $petInfo = $petInfo->fetchAll(PDO::FETCH_ASSOC);
    }

    $totalPhotos = (int) $petInfo[0]['total_photos'];
    $petName = $petInfo[0]['petName'];
    /* Close the Database connection */
    $db_connection = NULL;
?>