<?php
    require_once('./php/enum.php');
    /* =========================================================================== */
    /* Filter Logic (filter display based on City, Specie, Age, Sender, Size) */
    /* =========================================================================== */
    /* Set Variables used in preparing filter query*/
    $city = isset($_GET['city']) ? $_GET['city'] : 'All Cebu';
    $animal = isset($_GET['animal']) ? $_GET['animal'] : 'Dog';
    $gender = isset($_GET['gender']) ? $_GET['gender'] : 'Any';
    $age = isset($_GET['age']) ? $_GET['age'] : 'Any';
    $size= isset($_GET['size']) ? $_GET['size'] : 'Any';

    $filterQuery = 'SELECT pet_ID, petName, gender, age, breed, size ';
    $query = 'FROM pets WHERE status ='.ENUM_STATUS::Open.' AND ';

    /* Add Species Filter - defaults to 'DOG'*/
    if(ENUM_SPECIES::isValidName($animal) && $animal != 'DOG'){
        $val = ENUM_SPECIES::parse($animal);
        $query .= 'species = '. $val;
    } else {
        $query .= 'species = '. ENUM_SPECIES::Dog;
    }

    /* Add City Filter - defaults to 'All Cebu'*/
    if(ENUM_CITY::isValidName($city)){
        $query .= ' AND city = '.ENUM_CITY::parse($city);
    } 

    /* Add Gender Filter - defaults to 'Any'*/
    if(ENUM_GENDER::isValidName($gender)){
        $query .= ' AND gender = '.ENUM_GENDER::parse($gender);   
    }

    /* Add Age Filter - defaults to 'Any'*/
    if(ENUM_AGE::isValidName($age)){
        $query .= ' AND age = '.ENUM_AGE::parse($age);   
    }

    /* Add Size Filter - defaults to 'Any'*/
    if(ENUM_SIZE::isValidName($size)){
        $query .= ' AND size = '.ENUM_SIZE::parse($size);   
    }



    /* =========================================================================== */
    /* Pagination Logic (Display 12 results per page, Max 10 pages per page set)   */
    /* =========================================================================== */
    /* Set Variables used for pagination logic*/
    $countResQuery = 'SELECT COUNT(*) ';
    $resultsPerPage = 12;
    $totalResults = 0;
    $db_err_messages = (array) null;

    /* Get total number of results from query based on filters */
    $countResQuery .= $query;
    try{
        $countResQResults = $db_connection->query($countResQuery);
        $countResQResults = $countResQResults->fetch();
        $totalResults = $countResQResults[0];
    } catch (Exception $e){
        array_push($db_err_messages,'Db Error search-filter-query Line 62 - get total results');
    }
    
    /* Get Total Number of Pages (12 results per page)*/
    $totalPages = ceil($totalResults/$resultsPerPage);


    /* First validation - Get Current Page or set the default at page 1 */
    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
        $currentpage = (int) $_GET['page'];
    } else {
        $currentpage = 1;
    }   /* end if */

    /* Second validation - Current page should be less than or equal to total pages */
    if ($currentpage > $totalPages) {
        $currentpage = $totalPages;
    } /* end if */

    /* Third validation - Current page should be greater than or equal to 1 */
    if ($currentpage < 1) {
       $currentpage = 1;
    } /* end if */

    /* the offset of the list of values to grab, based on current page */
    $offset = ($currentpage - 1) * $resultsPerPage;


    /* =========================================================================== */
    /* GET INFORMATION FROM THE DATABASE BASED ON PAGE NUMBER                      */
    /* =========================================================================== */
    $filterQuery .= $query;
    $filterQuery .= ' LIMIT '.$offset.', '.$resultsPerPage;
    $results = null;
    
    try{
        $results = $db_connection->query( $filterQuery); 
        $results = $results->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        array_push($db_err_messages,'Db Error search-filter-query Line 100 - get data from database');
    }

    
    /* Close the Database connection */
    $db_connection = NULL;
?>