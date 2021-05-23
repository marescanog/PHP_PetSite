<?php
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
?>