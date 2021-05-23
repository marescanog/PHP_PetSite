<?php 

    require_once('../private/db_config.php');
    require_once('./php/enum.php');

    $city = isset($_GET['city']) ? $_GET['city'] : 'All Cebu';
    $animal = isset($_GET['animal']) ? $_GET['animal'] : 'Dog';
    $gender = isset($_GET['gender']) ? $_GET['gender'] : 'Any';
    $age = isset($_GET['age']) ? $_GET['age'] : 'Any';
    $size= isset($_GET['size']) ? $_GET['size'] : 'Any';
    $page= isset($_GET['page']) ? $_GET['page'] : '1';
    $query = 'SELECT pet_ID, petName, gender, age, breed, size FROM pets WHERE status = 1 AND ';


    /* 
    COMPLETED:
        Added security protocol for:
            City custom select (HTML injection)
            Animal custom select (HTML injection)
            Animal custom select - icon (HTML injection)
            Javascript protection - City Custom select options (Defaults to All Cebu)
            javascript protection - Animal customer selection options (Defaults to Dog)
    TODO finish search logic 
            SQL Injection ?
            Add javascript protection for other filter logic (Must default to Any if link is modified)
            Add html injection protection for other filters
    TODO Add new records to database
    */

    /* Species Filter */
    if(ENUM_SPECIES::isValidName($animal) && $animal != 'DOG'){
        $val = ENUM_SPECIES::parse($animal);
        $query .= 'species = '. $val;
    } else {
        $query .= 'species = '. ENUM_SPECIES::Dog;
    }

    /* City Filter */
    if(ENUM_CITY::isValidName($city)){
        $query .= ' AND city = '.ENUM_CITY::parse($city);
    } 



    $results = $db_connection->query($query); 

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
<body>
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
                                        <span>
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
                                                /* Protects against javascript error. Defaults to All Cebu*/
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
                                                if($city == 'All Cebu'){echo ' selected ';}
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
                                            <span>A 
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
                                                /* Protects against javascript error. Defaults to Dog*/
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
                            <button class="bar__button">GET STARTED</button>
                        </div>
                        <div class="bar_--mobile-hide-text">
                            <input class="bar__text_form" type="text" name="city" id="hom_city" value="All Cebu" readonly="readonly"><br>
                            <input class="bar__text_form" type="text" name="animal" id="hom_animal" value="Dog" readonly="readonly"><br>
                            <input class="bar__text_form" type="hidden" name="page" id="hom_count" value="1" readonly="readonly"><br>     
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
        <?php require_once('./php-html-blocks/test.php'); ?>                                       
        
        <div class="res__general-wrapper">
            <div class="res_-advanced-filters">
                <button onclick="resToggleFilter(event)" class="res__search-filter-toggle">MORE FILTERS <span id="res__filter-span">+</span></button>
                <div id="res__all_filters" class="res_--all-adv-filters res__hidden">

                    <div>
                        <p class="filtype">GENDER</p>
                    <select name="gender" id="gender">
                        <option value="Any" <?php if($gender == 'Any'){echo 'selected';}?>>Any</option>
                        <option value=<?php echo ENUM_GENDER::Male; if($gender == ENUM_GENDER::Male){echo ' selected';}?>>Male</option>
                        <option value=<?php echo ENUM_GENDER::Female; if($gender == ENUM_GENDER::Female){echo ' selected';}?>>Female</option>
                    </select>
                    </div>
                    <div>
                        <p class="filtype">AGE</p>
                    <select name="age" id="age">
                        <option value="Any" <?php if($age == 'Any'){echo ' selected';}?>>Any</option>
                        <option value=<?php echo ENUM_AGE::Puppy; if($age == ENUM_AGE::Puppy){echo ' selected';}?>>Puppy</option>
                        <option value=<?php echo ENUM_AGE::Young; if($age == ENUM_AGE::Young){echo ' selected';}?>>Young</option>
                        <option value=<?php echo ENUM_AGE::Adult; if($age == ENUM_AGE::Adult){echo ' selected';}?>>Adult</option>
                        <option value=<?php echo ENUM_AGE::Senior; if($age == ENUM_AGE::Senior){echo ' selected';}?>>Senior</option>
                    </select>
                    </div>
                    <div>
                        <p class="filtype">SIZE</p>
                    <select name="size" id="size">
                        <option value="Any" <?php   if($size == 'Any'){echo ' selected';}?>>Any</option>
                        <option value=<?php echo ENUM_SIZE::Small; if($size == ENUM_SIZE::Small){echo ' selected';}?>>Small</option>
                        <option value=<?php echo ENUM_SIZE::Medium; if($size == ENUM_SIZE::Medium){echo ' selected';}?>>Medium</option>
                        <option value=<?php echo ENUM_SIZE::Large; if($size == ENUM_SIZE::Large){echo ' selected';}?>>Large</option>
                    </select>
                    </div>

                </div>
            </div>
        </div>
    </form>

    
    <main class="res__general-wrapper">
        <div class="res_search-results">
            <div class="res_-search-results-header">
                <h3><span>17</span> Pets Available in your City</h3>
                <p>Showing results <span>1</span>-<span>12</span></p>
                <div class="res__hr-padding">
                    <hr>
                </div>
            </div>
            <ul class="res_-search-results-list">
                <!-- TEMPLATE FOR BLOCK START -->
                <li class="res_--search-pet">
                    <div class="res_---search-pet-container">
                        <button class="res__search-target" data-pet-id="32" data-pet-name="peanut"></button>
                        <div class="res__image-adjustment">
                            <img src="./images/PETS/cover/32-cover.jpg" alt="peanut">
                        </div>
                        <div class="res_----search-pet-details">
                            <span class="res__search-pet-name">Peanut</span>
                            <span class="res__search-pet-meta">Female | Puppy</span>
                            <span class="res__search-pet-breed">Bolonka Lapdog</span>
                            <span class="res__search-view-more">View More Details +</span>
                        </div>
                    </div>
                </li>
                <!-- TEMPLATE FOR BLOCK END-->

                <!--Delete later, This is for testing if CSS works-->
                <!-- TEMPLATE FOR BLOCK START -->
                <li class="res_--search-pet">
                    <div class="res_---search-pet-container">
                        <button class="res__search-target" data-pet-id="33" data-pet-name="blondie"></button>
                        <div class="res__image-adjustment">
                            <img src="./images/PETS/cover/33-cover.jpg" alt="Blondie">
                        </div>
                        <div class="res_----search-pet-details">
                            <span class="res__search-pet-name">Blondie</span>
                            <span class="res__search-pet-meta">Male | Adult</span>
                            <span class="res__search-pet-breed">Golden Retriever</span>
                            <span class="res__search-view-more">View More Details +</span>
                        </div>
                    </div>
                </li>
                <!-- TEMPLATE FOR BLOCK END-->
                <!-- TEMPLATE FOR BLOCK START -->
                <li class="res_--search-pet">
                    <div class="res_---search-pet-container">
                        <button class="res__search-target" data-pet-id="34" data-pet-name="Spike"></button>
                        <div class="res__image-adjustment">
                            <img src="./images/PETS/cover/34-cover.jpg" alt="Spike">
                        </div>
                        <div class="res_----search-pet-details">
                            <span class="res__search-pet-name">Spike</span>
                            <span class="res__search-pet-meta">Male | Old</span>
                            <span class="res__search-pet-breed">Brown Labrador</span>
                            <span class="res__search-view-more">View More Details +</span>
                        </div>
                    </div>
                </li>
                <!-- TEMPLATE FOR BLOCK END-->
                <!-- TEMPLATE FOR BLOCK START -->
                <li class="res_--search-pet">
                    <div class="res_---search-pet-container">
                        <button class="res__search-target" data-pet-id="35" data-pet-name="Bead"></button>
                        <div class="res__image-adjustment">
                            <img src="./images/PETS/cover/35-cover.jpg" alt="Bead">
                        </div>
                        <div class="res_----search-pet-details">
                            <span class="res__search-pet-name">Bead</span>
                            <span class="res__search-pet-meta">Male | Puppy</span>
                            <span class="res__search-pet-breed">Mixed</span>
                            <span class="res__search-view-more">View More Details +</span>
                        </div>
                    </div>
                </li>
                <!-- TEMPLATE FOR BLOCK END-->
                <!-- TEMPLATE FOR BLOCK START -->
                <li class="res_--search-pet">
                    <div class="res_---search-pet-container">
                        <button class="res__search-target" data-pet-id="37" data-pet-name="Ranger"></button>
                        <div class="res__image-adjustment">
                            <img src="./images/PETS/cover/37-cover.jpg" alt="Ranger">
                        </div>
                        <div class="res_----search-pet-details">
                            <span class="res__search-pet-name">Ranger</span>
                            <span class="res__search-pet-meta">Female | Old</span>
                            <span class="res__search-pet-breed">Collie</span>
                            <span class="res__search-view-more">View More Details +</span>
                        </div>
                    </div>
                </li>
                <!-- TEMPLATE FOR BLOCK END-->
                <!-- TEMPLATE FOR BLOCK START -->
                <li class="res_--search-pet">
                    <div class="res_---search-pet-container">
                        <button class="res__search-target" data-pet-id="38" data-pet-name="Freckles"></button>
                        <div class="res__image-adjustment">
                            <img src="./images/PETS/cover/38-cover.jpg" alt="Freckles">
                        </div>
                        <div class="res_----search-pet-details">
                            <span class="res__search-pet-name">Freckles</span>
                            <span class="res__search-pet-meta">Male | Young</span>
                            <span class="res__search-pet-breed">Mixed</span>
                            <span class="res__search-view-more">View More Details +</span>
                        </div>
                    </div>
                </li>
                <!-- TEMPLATE FOR BLOCK END-->
                <!-- TEMPLATE FOR BLOCK START -->
                <li class="res_--search-pet">
                    <div class="res_---search-pet-container">
                        <button class="res__search-target" data-pet-id="39" data-pet-name="Mars"></button>
                        <div class="res__image-adjustment">
                            <img src="./images/PETS/cover/39-cover.jpg" alt="Mars">
                        </div>
                        <div class="res_----search-pet-details">
                            <span class="res__search-pet-name">Mars</span>
                            <span class="res__search-pet-meta">Female | Puppy</span>
                            <span class="res__search-pet-breed">Mixed</span>
                            <span class="res__search-view-more">View More Details +</span>
                        </div>
                    </div>
                </li>
                <!-- TEMPLATE FOR BLOCK END-->
                <!-- TEMPLATE FOR BLOCK START -->
                <li class="res_--search-pet">
                    <div class="res_---search-pet-container">
                        <button class="res__search-target" data-pet-id="40" data-pet-name="Max"></button>
                        <div class="res__image-adjustment">
                            <img src="./images/PETS/cover/40-cover.jpg" alt="Max">
                        </div>
                        <div class="res_----search-pet-details">
                            <span class="res__search-pet-name">Max</span>
                            <span class="res__search-pet-meta">Female | Adult</span>
                            <span class="res__search-pet-breed">Shih tzu</span>
                            <span class="res__search-view-more">View More Details +</span>
                        </div>
                    </div>
                </li>
                <!-- TEMPLATE FOR BLOCK END-->
                <!-- TEMPLATE FOR BLOCK START -->
                <li class="res_--search-pet">
                    <div class="res_---search-pet-container">
                        <button class="res__search-target" data-pet-id="41" data-pet-name="Nina"></button>
                        <div class="res__image-adjustment">
                            <img src="./images/PETS/cover/41-cover.jpg" alt="Nina">
                        </div>
                        <div class="res_----search-pet-details">
                            <span class="res__search-pet-name">Nina</span>
                            <span class="res__search-pet-meta">Female | Adult</span>
                            <span class="res__search-pet-breed">Lab mix</span>
                            <span class="res__search-view-more">View More Details +</span>
                        </div>
                    </div>
                </li>
                <!-- TEMPLATE FOR BLOCK END-->
                <!-- TEMPLATE FOR BLOCK START -->
                <li class="res_--search-pet">
                    <div class="res_---search-pet-container">
                        <button class="res__search-target" data-pet-id="42" data-pet-name="Dotty"></button>
                        <div class="res__image-adjustment">
                            <img src="./images/PETS/cover/42-cover.jpg" alt="Dotty">
                        </div>
                        <div class="res_----search-pet-details">
                            <span class="res__search-pet-name">Dotty</span>
                            <span class="res__search-pet-meta">Male | Puppy</span>
                            <span class="res__search-pet-breed">Dalmatian</span>
                            <span class="res__search-view-more">View More Details +</span>
                        </div>
                    </div>
                </li>
                <!-- TEMPLATE FOR BLOCK END-->
                <!-- TEMPLATE FOR BLOCK START -->
                <li class="res_--search-pet">
                    <div class="res_---search-pet-container">
                        <button class="res__search-target" data-pet-id="43" data-pet-name="Butter"></button>
                        <div class="res__image-adjustment">
                            <img src="./images/PETS/cover/43-cover.jpg" alt="Butter">
                        </div>
                        <div class="res_----search-pet-details">
                            <span class="res__search-pet-name">Butter</span>
                            <span class="res__search-pet-meta">Male | Puppy</span>
                            <span class="res__search-pet-breed">Labrador</span>
                            <span class="res__search-view-more">View More Details +</span>
                        </div>
                    </div>
                </li>
                <!-- TEMPLATE FOR BLOCK END-->
                <!-- TEMPLATE FOR BLOCK START -->
                <li class="res_--search-pet">
                    <div class="res_---search-pet-container">
                        <button class="res__search-target" data-pet-id="44" data-pet-name="Spot"></button>
                        <div class="res__image-adjustment">
                            <img src="./images/PETS/cover/44-cover.jpg" alt="Spot">
                        </div>
                        <div class="res_----search-pet-details">
                            <span class="res__search-pet-name">Spot</span>
                            <span class="res__search-pet-meta">Female | Old</span>
                            <span class="res__search-pet-breed">Mixed</span>
                            <span class="res__search-view-more">View More Details +</span>
                        </div>
                    </div>
                </li>
                <!-- TEMPLATE FOR BLOCK END-->
                <!--Delete later, This is for testing if CSS works-->
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