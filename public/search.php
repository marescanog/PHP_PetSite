<?php 

    require_once('../private/db_config.php');
    require_once('./php/enum.php');

    $city = isset($_GET['city']) ? $_GET['city'] : 'All Cebu';
    $animal = isset($_GET['animal']) ? $_GET['animal'] : 'Dog';
    $gender = isset($_GET['gender']) ? $_GET['gender'] : 'Any';
    $age = isset($_GET['age']) ? $_GET['age'] : 'Any';
    $size= isset($_GET['size']) ? $_GET['size'] : 'Any';
    $page= isset($_GET['page']) ? $_GET['page'] : '1';
    


    /* 
    COMPLETED:
        Added security protocol for:
            SQL Injection ?
            City custom select (HTML injection)
            Animal custom select (HTML injection)
            Animal custom select - icon (HTML injection)
            Javascript protection - City Custom select options (Defaults to All Cebu)
            javascript protection - Animal customer selection options (Defaults to Dog)
            Add javascript protection for other filter logic (Must default to Any if link is modified)
            Add html injection protection for other filters
        Completed:
            search logic 
            Add javascript protection for other filter logic (Must default to Any if link is modified)
            Add html injection protection for other filters
    TODO Add new records to database and figure out page filters
    */
    require_once('./php/search-filter-query.php');




    

    $db_connection = NULL;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="./css/reset-styles.css">
    <link rel="stylesheet" href="./css/header-styles.css">
    <link rel="stylesheet" href="./css/footer-styles.css">
    <link rel="stylesheet" href="./css/search-bar-styles.css">
    <link rel="stylesheet" href="./css/results-styles.css">
    <script type="text/javascript" src="./javascript/jquery-3.6.0.min.js"></script>
    <?php require './php-html-blocks/favicon.php'?>
    
</head>
<body onload="loadValues()">
<script type="text/javascript">

</script>
<?php require './php-html-blocks/header.php'?>
    
    <div class="header-padding2" style="background-color: #766F9B; transform: translateY(5px);"></div>
    <form method="get" id="hom_res_search_filter" action="search.php">
        <div class="res_search-bar-container">
            <div class="res__general-wrapper">
                <h1>SEARCH RESULTS FOR</h1>
                <div class="res_-search-bar-select-container">
                    <!-- SEARCH BAR HTML START -->
                    <div class="bar_---search-bar">
                        <!-- custom select dropdow for city-->
                        <div class="bar__box bar_----select-bar-city">  
                            <div class="bar__-select">                                  <!-- custom-select-wrapper -->
                                <div name="city" id="city" class="bar__-custom-select"> <!-- custom-select -->
                                    <div class="bar__-select-trigger bar__city">        <!-- custom-select__trigger -->
                                        <span id="citySpan">
                                            <?php 
                                                /* Security protocol against HTML injection */
                                                if(ENUM_CITY::isValidName($city)){
                                                    echo htmlentities($city);
                                                } else {
                                                    echo 'All Cebu';
                                                }
                                            ?>
                                        </span>
                                        <div class="arrow" style="margin-left: 10px;"></div>
                                    </div>
                                    <div class="bar__-select-options" data-select-bar-type="0">    <!-- custom-options -->
                                        <span class="bar__-option 
                                            <?php 
                                                /* Defaults to 'All' Cebu when none of the choices selected*/
                                                switch($city){
                                                    case 'Cebu';
                                                    case 'Mandaue';
                                                    case 'Lapulapu';
                                                    case 'Toledo';
                                                    case 'Danao';
                                                    case 'Talisay';
                                                        echo '';
                                                    break;
                                                    default:
                                                        echo ' selected ';
                                                }
                                            ?>" data-value="All Cebu">All Cebu</span>
                                        <span class="bar__-option <?php if($city == 'Cebu'){echo ' selected ';}?>" data-value="Cebu">Cebu</span>
                                        <span class="bar__-option <?php if($city == 'Mandaue'){echo ' selected ';}?>" data-value="Mandaue">Mandaue</span>
                                        <span class="bar__-option <?php if($city == 'Lapulapu'){echo ' selected ';}?>" data-value="Lapulapu">Lapulapu</span>
                                        <span class="bar__-option <?php if($city == 'Toledo'){echo ' selected ';}?>" data-value="Toledo">Toledo</span>
                                        <span class="bar__-option <?php if($city == 'Danao'){echo ' selected ';}?>" data-value="Danao">Danao</span>
                                        <span class="bar__-option <?php if($city == 'Talisay'){echo ' selected ';}?>" data-value="Talisay">Talisay</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bar__box bar_----search-bar-caption">
                            <div class="bar__box-----caption-sizing">
                                <p>I'm looking to adopt</p>
                            </div>
                        </div>
                        <!-- custom select dropdown for animal-->
                        <div class="bar__box bar_----select-bar-animal">  
                            <div class="bar__-select">                                  <!-- custom-select-wrapper -->
                                <div name="animal" id="animal" class="bar__-custom-select"> <!-- custom-select -->
                                    <div class="bar__-select-trigger bar__animal">        <!-- custom-select__trigger -->
                                        <img id="selectImage" src="
                                            <?php 
                                                /* Security protocol against HTML injection */
                                                if(ENUM_SPECIES::isValidName($animal)){
                                                    echo './images/ICONS/searchbar/'.htmlentities($animal).'.svg';
                                                } else {
                                                    echo './images/ICONS/searchbar/Dog.svg';
                                                }
                                            ?>
                                            " alt="animal icon" class="bar__animal-icon">
                                        <div class="bar__--anim-desc">
                                            <span  id="animalSpan" >A 
                                                <?php 
                                                /* Security protocol against HTML injection */
                                                if(ENUM_SPECIES::isValidName($animal)){
                                                    echo htmlentities($animal);
                                                } else {
                                                    echo 'Dog';
                                                }
                                                ?></span>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                    <div class="pink bar__-select-options" data-select-bar-type="1">       <!-- custom-options -->
                                        <span class="pink bar__-option 
                                            <?php 
                                                /* Defaults to 'Dog' when none of the choices selected*/
                                                switch($animal){
                                                    case 'Cat';
                                                    case 'Bird';
                                                    case 'Reptile';
                                                    case 'Rabbit';
                                                        echo '';
                                                    break;
                                                    default:
                                                        echo ' selected ';
                                                }
                                            ?>" 
                                            data-value="Dog">A Dog</span>
                                        <span class="pink bar__-option <?php if($animal == 'Cat'){echo ' selected ';}?>" data-value="Cat">A Cat</span>
                                        <span class="pink bar__-option <?php if($animal == 'Bird'){echo ' selected ';}?>" data-value="Bird">A Bird</span>
                                        <span class="pink bar__-option <?php if($animal == 'Reptile'){echo ' selected ';}?>" data-value="Reptile">A Reptile</span>
                                        <span class="pink bar__-option <?php if($animal == 'Rabbit'){echo ' selected ';}?>" data-value="Rabbit">A Rabbit</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bar_---search-button">
                            <button class="bar__button" >SEARCH</button>
                        </div> 
                        <div class="bar_--mobile-hide-text">
                            <input class="bar__text_form" type="text" name="city" id="hom_city" readonly="readonly"><br>
                            <input class="bar__text_form" type="text" name="animal" id="hom_animal" readonly="readonly"><br>    
                        </div>
                    </div>
                </div>
                <script src="./javascript/customSelectBox.js"></script>
                <!-- SEARCH BAR HTML END -->
                <div class="res_design_dogcat-icon">
                    <img src="./images/ICONS/DOGCAT.svg" alt="animals icon">
                </div>
                </div>
            </div>
        </div>
        
        <!-- CODE DEBUGGING AREA-->
        <?php /* require_once('./php-html-blocks/test.php'); */ ?>                                       
        
        <div class="res__general-wrapper">
            <div class="res_-advanced-filters">
                <button onclick="resToggleFilter(event)" class="res__search-filter-toggle">MORE FILTERS <span id="res__filter-span">+</span></button>
                <div id="res__all_filters" class="res_--all-adv-filters res__hidden">

                    <div>
                        <p class="filtype">GENDER</p>
                    <select name="gender" id="gender">
                        <option value="Any" 
                            <?php 
                                /* Defaults to 'Any' when none of the choices selected*/
                                switch($gender){
                                    case 'male':
                                    case 'female':
                                        echo '';
                                    break;
                                    default:
                                        echo ' selected';
                                }
                            ?>>Any</option>
                        <option value="male" <?php if($gender == 'male'){echo ' selected';}?>>Male</option>
                        <option value="female" <?php if($gender == 'female'){echo ' selected';}?>>Female</option>
                    </select>
                    </div>
                    <div>
                        <p class="filtype">AGE</p>
                    <select name="age" id="age">
                        <option value="Any" 
                            <?php 
                                /* Defaults to 'Any' when none of the choices selected*/
                                switch($age){
                                    case 'puppy':
                                    case 'young':
                                    case 'adult':
                                    case 'senior':
                                        echo '';
                                    break;
                                    default:
                                        echo ' selected';                                    
                                }
                            ?>>Any</option>
                        <option value="puppy" <?php if($age == 'puppy'){echo ' selected';}?>>Puppy</option>
                        <option value="young" <?php if($age == 'young'){echo ' selected';}?>>Young</option>
                        <option value="adult" <?php if($age == 'adult'){echo ' selected';}?>>Adult</option>
                        <option value="senior" <?php if($age == 'senior'){echo ' selected';}?>>Senior</option>
                    </select>
                    </div>
                    <div>
                        <p class="filtype">SIZE</p>
                    <select name="size" id="size">
                        <option value="Any" 
                            <?php   
                                /* Defaults to 'Any' when none of the choices selected*/
                                switch($size){
                                    case 'small':
                                    case 'medium':
                                    case 'large':
                                        echo '';
                                        break;
                                    default:
                                        echo ' selected';
                                }
                            ?>>Any</option>
                        <option value='small'<?php if($size == 'small'){echo ' selected';}?>>Small</option>
                        <option value='medium'<?php if($size == 'medium'){echo ' selected';}?>>Medium</option>
                        <option value='large'<?php if($size == 'large'){echo ' selected';}?>>Large</option>
                    </select>
                    </div>

                </div>
            </div>
        </div>
    </form>

    
    <main class="res__general-wrapper">
        <div class="res_search-results">
            <div class="res_-search-results-header">
                <!-- ADD PHP TO MAKE RESULTS APPEAR DYNAMIC - BRANDON -->
                <h3><span>17</span> Pets Available in your City</h3>
                <p>Showing results <span>1</span>-<span>12</span></p>
                <div class="res__hr-padding">
                    <hr>
                    <input type="hidden" name="page" id="hom_count" value="1" readonly="readonly"><br> 
                </div>
            </div>

            <ul class="res_-search-results-list">
                <!-- TEMPLATE FOR BLOCK START -->
                <?php
                    $results = $results->fetchAll(PDO::FETCH_ASSOC);
                    //echo var_dump(count($results));
                    //echo '</br>';
                    foreach($results as $result){

                        $petGender = $result['gender'];
                        $petGender += 0;
                        $petAge = $result['age'];
                        $petAge += 0;
                        echo '<br>';
                          echo '<li class="res_--search-pet">';
                          echo      '<div class="res_---search-pet-container">';
                          echo          '<button class="res__search-target" data-pet-id='.$result['pet_ID'].' data-pet-name="'.$result['petName'].'"></button>';
                          echo          '<div class="res__image-adjustment">';
                          echo              '<img src="./images/PETS/cover/'.$result['pet_ID'].'.jpg" alt="peanut">';
                          echo          '</div>';
                          echo          '<div class="res_----search-pet-details">';
                          echo              '<span class="res__search-pet-name">'.$result['petName'].'</span>';
                          echo              '<span class="res__search-pet-meta">'.ucfirst(ENUM_GENDER::getKey($petGender)).' | '.ucfirst(ENUM_AGE::getKey($petAge)).'</span>';
                          echo              '<span class="res__search-pet-breed">'.$result['breed'].'</span>';
                          echo              '<span class="res__search-view-more">View More Details +</span>';
                          echo          '</div>';
                          echo      '</div>';
                          echo '</li>';
                    }
                ?>               
            </ul>
        </div>
    </main>
        <div class="res__bottom_foot">
            <p class="res__bottom_Page">Showing results <span>1</span>-<span>12</span></p>
            <p class="res__bottom_Page">Page <a href=""><b><u>1</u></b> </a><a href="">2</a></p>
        </div>
    </div>

    <?php require './php-html-blocks/footer.php'?>


    <script type="text/javascript" src="./javascript/searchResults.js"></script>
    <script type="text/javascript">

    </script>


</body>
</html>