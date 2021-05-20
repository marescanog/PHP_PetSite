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
    <!-- BROSWER ICON for FF, Chrome, Opera -->
    <link rel="icon" type="image/png" href="./images/ICONS/browser-tab/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="./images/ICONS/browser-tab/favicon-32x32.png" sizes="32x32">
    <!-- BROWSER ICON for IE -->
    <link rel="icon" type="image/x-icon" href="./images/ICONS/browser-tab/favicon.ico" >
    <link rel="shortcut icon" type="image/x-icon" href="./images/ICONS/browser-tab/favicon.ico"/>
    <meta name="currentPage" content="ADOPT">
</head>
<body>

    <header class="header-container">
        <div class="header-wrapper">
            <div class="header-max-width">
                <div class="icons-and-menu-container">
                    <div class="header-logo-container">
                        <img src="./images/LOGO/LOGO.svg" alt="Cebu Pet Match logo" class="logo-image-style">
                        <img src="./images/LOGO/LOGOTEXT2.svg" alt="Cebu Pet Match" class="logo-image-style">
                    </div>
                    <div class="hamburger-menu-wrap">
                        <input type="checkbox" id="myCheck" onclick="displayMenuMobile()" class="toggler">
                        <div class="hamburger"><div></div></div>
                    </div>
                </div>
                <nav id="navMenu" class="nav-container">
                    <ul>
                        <div class="dropdown">
                            <li><a href="index.html" class="sel">HOME</a></li>
                        </div>
                        <div class="dropdown">
                            <li>
                                <a class="sel dropDown-title" onclick="expandMobileMenuContent(0)">ADOPT</a>
                                <svg class="dropDown-arrow" viewBox="0 0 24 24">
                                    <path d="M 12 14.070312 L 8.179688 10.25 C 7.765625 9.835938 7.09375 9.835938 6.679688 10.25 C 6.265625 10.664062 6.265625 11.335938 6.679688 11.75 L 11.292969 16.363281 C 11.683594 16.753906 12.316406 16.753906 12.707031 16.363281 L 17.320312 11.75 C 17.734375 11.335938 17.734375 10.664062 17.320312 10.25 C 16.90625 9.835938 16.234375 9.835938 15.820312 10.25 Z M 12 14.070312"></path>
                                </svg>
                            </li>
                                <ul class="dropdown-content">
                                        <li><a href="#">Dog</a> </li>
                                        <li><a href="#">Cat</a></li>
                                        <li><a href="#">Bird</a></li>
                                        <li><a href="#">Rodent / Rabbit</a></li>
                                        <li> <a href="#">Reptile / Turtle</a></li>
                                </ul>
                        </div>
                        <div class="dropdown">
                            <li>
                                <a class="sel dropDown-title" onclick="expandMobileMenuContent(1)">PLACEMENTS</a>
                                <svg class="dropDown-arrow" viewBox="0 0 24 24">
                                    <path d="M 12 14.070312 L 8.179688 10.25 C 7.765625 9.835938 7.09375 9.835938 6.679688 10.25 C 6.265625 10.664062 6.265625 11.335938 6.679688 11.75 L 11.292969 16.363281 C 11.683594 16.753906 12.316406 16.753906 12.707031 16.363281 L 17.320312 11.75 C 17.734375 11.335938 17.734375 10.664062 17.320312 10.25 C 16.90625 9.835938 16.234375 9.835938 15.820312 10.25 Z M 12 14.070312"></path>
                                </svg>
                            </li>
                            <ul class="dropdown-content">
                                <li><a href="">Request to post pet up for adoption</a></li>
                                <li><a href="">Nearby Shelters</a></li>                               
                            </ul>
                        </div>
                        <div class="dropdown">
                            <li>
                                <a class="sel dropDown-title" onclick="expandMobileMenuContent(2)">TESTIMONIALS</a>
                                <svg class="dropDown-arrow" viewBox="0 0 24 24">
                                    <path d="M 12 14.070312 L 8.179688 10.25 C 7.765625 9.835938 7.09375 9.835938 6.679688 10.25 C 6.265625 10.664062 6.265625 11.335938 6.679688 11.75 L 11.292969 16.363281 C 11.683594 16.753906 12.316406 16.753906 12.707031 16.363281 L 17.320312 11.75 C 17.734375 11.335938 17.734375 10.664062 17.320312 10.25 C 16.90625 9.835938 16.234375 9.835938 15.820312 10.25 Z M 12 14.070312"></path>
                                </svg>
                            </li>
                            <ul class="dropdown-content">
                                <li><a href="">Sarah and Connor</a></li>
                                <li><a href="">Nathan</a></li>
                                <li><a href="">Melinda</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <li>
                                <a class="sel dropDown-title" onclick="expandMobileMenuContent(3)">ABOUT</a>
                                <svg class="dropDown-arrow" viewBox="0 0 24 24">
                                    <path d="M 12 14.070312 L 8.179688 10.25 C 7.765625 9.835938 7.09375 9.835938 6.679688 10.25 C 6.265625 10.664062 6.265625 11.335938 6.679688 11.75 L 11.292969 16.363281 C 11.683594 16.753906 12.316406 16.753906 12.707031 16.363281 L 17.320312 11.75 C 17.734375 11.335938 17.734375 10.664062 17.320312 10.25 C 16.90625 9.835938 16.234375 9.835938 15.820312 10.25 Z M 12 14.070312"></path>
                                </svg>
                            </li>
                            <ul class="dropdown-content">
                                <li><a href="">GENERAL</a></li>
                                <li><a href="">F.A.Q.S</a></li>     
                                <li><a href="">CONTACT US</a></li>                           
                            </ul>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
        <script src="./javascript/header.js" type="text/javascript"></script>
    </header>
    
    <div class="header-padding2" style="background-color: #766F9B; transform: translateY(5px);"></div>
    <form method="post" id="hom_res_search_filter" action="search.php">
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
                                        <span>Enter City</span>
                                        <div class="arrow" style="margin-left: 10px;"></div>
                                    </div>
                                    <div class="bar__-select-options" data-select-bar-type="0">                  <!-- custom-options -->
                                        <span class="bar__-option selected" data-value="All Cebu">All Cebu</span>
                                        <span class="bar__-option" data-value="Cebu">Cebu</span>
                                        <span class="bar__-option" data-value="Mandaue">Mandaue</span>
                                        <span class="bar__-option" data-value="Lapulapu">Lapulapu</span>
                                        <span class="bar__-option" data-value="Toledo">Toledo</span>
                                        <span class="bar__-option" data-value="Danao">Danao</span>
                                        <span class="bar__-option" data-value="Talisay">Talisay</span>
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
                                        <img id="selectImage" src="./images/ICONS/searchbar/Dog.svg" alt="animal icon" class="bar__animal-icon">
                                        <div class="bar__--anim-desc">
                                            <span>A Dog</span>
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                    <div class="pink bar__-select-options" data-select-bar-type="1">       <!-- custom-options -->
                                        <span class="pink bar__-option selected" data-value="Dog">A Dog</span>
                                        <span class="pink bar__-option" data-value="Cat">A Cat</span>
                                        <span class="pink bar__-option" data-value="Bird">A Bird</span>
                                        <span class="pink bar__-option" data-value="Reptile">A Reptile</span>
                                        <span class="pink bar__-option" data-value="Rabbit">A Rabbit</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bar_---search-button">
                            <button class="bar__button">GET STARTED</button>
                        </div>
                        <div class="bar_--mobile-hide-text">
                            <input class="bar__text_form" type="text" name="city" id="hom_city" value="All Cebu" disabled><br>
                            <input class="bar__text_form" type="text" name="animal" id="hom_animal" value="Dog" disabled><br>
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
        
        
        <div class="res__general-wrapper">
            <div class="res_-advanced-filters">
                <button onclick="resToggleFilter(event)" class="res__search-filter-toggle">MORE FILTERS <span id="res__filter-span">+</span></button>
                <div id="res__all_filters" class="res_--all-adv-filters res__hidden">

                    <div>
                        <p class="filtype">GENDER</p>
                    <select name="gender" id="gender">
                        <option value="Any">Any</option>
                        <option value="MALE">Male</option>
                        <option value="FEMALE">Female</option>
                    </select>
                    </div>

                    <div>
                        <p class="filtype">AGE</p>
                    <select name="age" id="age">
                        <option value="Any">Any</option>
                        <option value="1">Young</option>
                        <option value="2">Puppy</option>
                        <option value="3">Adult</option>
                        <option value="4">Old</option>
                    </select>
                    </div>

                    <div>
                        <p class="filtype">SIZE</p>
                    <select name="size" id="size">
                        <option value="Any">Any</option>
                        <option value="S">Small</option>
                        <option value="M">Medium</option>
                        <option value="L">Large</option>
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

    <footer class="footer-block">  
        <div class="footer-max-width">
            <div class="footer-block-wrapper">
                <div class="logo-block-wrapper">
                    <img src="./images/LOGO/LOGO BLOCK.svg" alt="Cebu Pet Match Logo" class="footer-logo-style">
                </div>
                <div class="footer-sitemap-contact-block">
                    <div class="footer-sitemap">
                        <h5 class="padding-mobile">SITE NAVIGATION</h5>
                        <ul class="footer-sitemap-categories">
                            <div class="footer-sitemap-categories-block" onclick="expandFooterMenuContent(0)">
                                <li class="footer-sitemap-header">
                                    <h6 >ADOPT OR POST         
                                        <svg class="dropDown-arrow-footer" viewBox="0 0 24 24">
                                        <path d="M 12 14.070312 L 8.179688 10.25 C 7.765625 9.835938 7.09375 9.835938 6.679688 10.25 C 6.265625 10.664062 6.265625 11.335938 6.679688 11.75 L 11.292969 16.363281 C 11.683594 16.753906 12.316406 16.753906 12.707031 16.363281 L 17.320312 11.75 C 17.734375 11.335938 17.734375 10.664062 17.320312 10.25 C 16.90625 9.835938 16.234375 9.835938 15.820312 10.25 Z M 12 14.070312"></path>
                                        </svg>
                                    </h6>
                                </li>
                                <ul class="footer-sitemap-links">
                                    <li><a href="">SEARCH SITE FOR PET</a></li>
                                    <li><a href="">CHECK SHELTER</a></li>
                                    <li><a href="">POST FOR ADOPTION</a></li>
                                </ul>
                            </div>
                            <div  class="footer-sitemap-categories-block center-adjust" onclick="expandFooterMenuContent(1)">
                                <li class="footer-sitemap-header">
                                    <h6>ABOUT
                                        <svg class="dropDown-arrow-footer" viewBox="0 0 24 24">
                                            <path d="M 12 14.070312 L 8.179688 10.25 C 7.765625 9.835938 7.09375 9.835938 6.679688 10.25 C 6.265625 10.664062 6.265625 11.335938 6.679688 11.75 L 11.292969 16.363281 C 11.683594 16.753906 12.316406 16.753906 12.707031 16.363281 L 17.320312 11.75 C 17.734375 11.335938 17.734375 10.664062 17.320312 10.25 C 16.90625 9.835938 16.234375 9.835938 15.820312 10.25 Z M 12 14.070312"></path>
                                        </svg>
                                    </h6>
                                </li>
                                <ul class="footer-sitemap-links">
                                    <li><a href="">GENERAL</a></li>
                                    <li><a href="">F.A.Q.S</a></li>
                                </ul>
                            </div>
                            <div  class="footer-sitemap-categories-block center-adjust" onclick="expandFooterMenuContent(2)">
                                <li class="footer-sitemap-header">
                                    <h6>TESTIMONIALS
                                        <svg class="dropDown-arrow-footer" viewBox="0 0 24 24">
                                            <path d="M 12 14.070312 L 8.179688 10.25 C 7.765625 9.835938 7.09375 9.835938 6.679688 10.25 C 6.265625 10.664062 6.265625 11.335938 6.679688 11.75 L 11.292969 16.363281 C 11.683594 16.753906 12.316406 16.753906 12.707031 16.363281 L 17.320312 11.75 C 17.734375 11.335938 17.734375 10.664062 17.320312 10.25 C 16.90625 9.835938 16.234375 9.835938 15.820312 10.25 Z M 12 14.070312"></path>
                                        </svg>
                                    </h6></li>
                                <ul class="footer-sitemap-links">
                                    <li><a href="">Sarah and Connor</a></li>
                                    <li><a href="">Nathan</a></li>
                                    <li><a href="">Melinda</a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                    <div class="footer-contact">
                        <div class="footer-contact-wrapper">
                            <div>
                                <p>Have something on your mind?</p>
                            </div>
                            <div id="contact-button" class="contact-button">
                                CONTACT US
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="footer-copyright">
                    <p class="footer-copyright-c">© Copyright 2011-2021 Cebu Pet Match</p>
                    <p>Cebu Pet Match is provided as a service to potential adopters. Listings for adoptable animals are provided courtesy of the Shelters and Posters. The information in these listings is reviewed by Administrators. For more information, please see our Terms & Conditions. </p>
                </div>
            </div>  
        </div>
        <script src="./javascript/footer.js" async defer></script>
    </footer>


    <script src="./javascript/searchResults.js"></script>
    <script type="text/javascript">

    </script>


</body>
</html>