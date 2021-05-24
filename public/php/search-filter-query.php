<?php
    $query = 'SELECT pet_ID, petName, gender, age, breed, size FROM pets WHERE status ='.ENUM_STATUS::Open.' AND ';

    /* Species Filter - defaults to 'DOG'*/
    if(ENUM_SPECIES::isValidName($animal) && $animal != 'DOG'){
        $val = ENUM_SPECIES::parse($animal);
        $query .= 'species = '. $val;
    } else {
        $query .= 'species = '. ENUM_SPECIES::Dog;
    }

    /* City Filter - defaults to 'All Cebu'*/
    if(ENUM_CITY::isValidName($city)){
        $query .= ' AND city = '.ENUM_CITY::parse($city);
    } 

    /* Gender Filter - defaults to 'Any'*/
    if(ENUM_GENDER::isValidName($gender)){
        $query .= ' AND gender = '.ENUM_GENDER::parse($gender);   
    }

    /* Age Filter - defaults to 'Any'*/
    if(ENUM_AGE::isValidName($age)){
        $query .= ' AND age = '.ENUM_AGE::parse($age);   
    }

    /* Size Filter - defaults to 'Any'*/
    if(ENUM_SIZE::isValidName($size)){
        $query .= ' AND size = '.ENUM_SIZE::parse($size);   
    }

    $results = $db_connection->query($query); 
    $results = $results->fetchAll(PDO::FETCH_ASSOC);
    $resCount = count($results);
    $pages = ceil($resCount/12);
?>