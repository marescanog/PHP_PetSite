<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CEBU PET MATCH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/reset-styles.css">
    <link rel="stylesheet" href="./css/home-styles.css">
    <link rel="stylesheet" href="./css/header-styles.css">
    <link rel="stylesheet" href="./css/footer-styles.css">
    <link rel="stylesheet" href="./css/search-bar-styles.css">
    <?php require './php-html-blocks/favicon.php'?>
    <?php require_once './php/enum.php'?>
</head>
<body >


 <?php require './php-html-blocks/header.php'?>
    
    <div>
        <div class="header-padding" style="background-color:#766F9B; transform: translateY(15px);"></div>
        <div class="hom_hero-banner-container">   
            <div class="hom__max-width hom_hero-banner-padding">
                <?php require './php-html-blocks/tagline.php'?>
                <?php require './php-html-blocks/tagline-mobile.php'?>
                <div class="hom_-search-banner">
                    <!-- FORM START -->
                    <form method="get" id="hom_form_search_filter" class="hom_--search-banner-col-1" action="search.php">
                        <div class="hom_---search-empty"></div>
                        <div class="hom_---search-block">
                            <div class="hom_----title-banner">
                                <h1>FIND YOUR NEW HAPPY COMPANION</h1>
                            </div>
                            <img src="./images/PEOPLE/banner/banner-mobile-low.jpg" alt="Pet owner with a happy companion" class="ban__image-mobile">
                            <!-- SEARCH BAR HTML START -->
                            <div class="bar_---search-bar">
                                <!-- custom select dropdow for city-->
                                <div class="bar__box bar_----select-bar-city">  
                                    <div class="bar__-select">                                  <!-- custom-select-wrapper -->
                                        <div class="bar__-custom-select"> <!-- custom-select -->
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
                                        <div class="bar__-custom-select"> <!-- custom-select -->
                                            <div class="bar__-select-trigger bar__animal">        <!-- custom-select__trigger -->
                                                <img id="selectImage" src="./images/ICONS/searchbar/Dog.svg" alt="animal icon" class="bar__animal-icon">
                                                <div class="bar__--anim-desc">
                                                    <span>A Dog</span>
                                                    <div class="arrow"></div>
                                                </div>
                                            </div>
                                            <div class="pink bar__-select-options" data-select-bar-type="1">                  <!-- custom-options -->
                                                <span class="pink bar__-option selected" data-value="Dog">A Dog</span>
                                                <span class="pink bar__-option" data-value="Cat">A Cat</span>
                                                <span class="pink bar__-option" data-value="Bird">A Bird</span>
                                                <span class="pink bar__-option" data-value="Reptile">A Reptile</span>
                                                <span class="pink bar__-option" data-value="Rabbit">A Rabbit</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bar_---search-button">
                                <button class="bar__button" id="hom_search_BTN" onclick="document.getElementById('hom_form_search_filter').submit()">GET STARTED</button>
                            </div>
                            <div>
                                <input class="bar__text_form" type="text" name="city" id="hom_city" value="All Cebu" readonly="readonly" ><br>
                                <input class="bar__text_form" type="text" name="animal" id="hom_animal" value="Dog" readonly="readonly"><br>
                            </div>
                        </div>
                        <!-- SEARCH BAR HTML END -->
                    </form>
                    <div class="hom_--search-banner-col-2">
                        <img src="./images/PEOPLE/banner/banner.jpg" alt="A happy pet owner carrying a dog" class="hom_banner-mobile-disable hom--search-banner-image">
                    </div>
                </div>
            </div>
        </div>
        <div class="hom__max-width hom_features-container">
            <div  class="hom__max-width">
                <h2><span style="font-weight: 400;">Your</span> Pet Adoption Path</h2>
                <div class="hom_-feature-card-container">
                    <div class="hom_--feature-card">
                        <img src="./images/ICONS/features/Search.svg" alt="Adoption icon">
                        <h3>FIND A FRIEND</h3>
                        <p>Enter your city to search for animals who are available for adoption in your area. 
                            You can specify if you're looking for a cat, dog, turtle or other pets!</p>
                    </div>
                    <div class="hom_--feature-card">
                        <img src="./images/ICONS/features/Contact.svg" alt="Adoption icon">
                        <h3>CONTACT</h3>
                        <p>Click on the pet's page to learn more about them. Once you find that special friend, 
                            you can click on "Request contact information" and contact the ad poster to learn more 
                            about how to meet and adopt the pet.</p>
                    </div>
                    <div class="hom_--feature-card">
                        <img src="./images/ICONS/features/Adopt.svg" alt="Adoption icon">
                        <h3>ADOPT</h3>
                        <p>Make sure to settle all the necessary papers for adoption and go through the necessary steps. If a 
                            resue or shelter is the ad poster, they will walk you through the adoption process. Get your house 
                            all readied up for your new friend!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="hom_about-container">  
            <div class="hom__max-width">
                <div class="hom__--about-max-width">
                    <h2><span style="font-weight: 100;">About</span><strong> Cebu Pet Match</strong></h2>
                    <p>
                         Cebu Pet match is a searchable online database of user-submitted collection of animals who need homes.
                         It also is a directory to animal shelters and adoption organizations within Cebu. 
                         These other organizations maintain their own home pages and available-pets for adoption. 
                        </p> <p>Pet lovers can search for a pet that best matches their needs. When they have found their pet match, 
                         these pet lovers can submit an inquiry to contact the foster owner or institution on the adoption process. 
                         Any pets found, adopted through, or listed in Cebu Pet match are the sole responsibility of the adoption 
                         organizations and/or the adopting party.
                    </p>
                    <svg class="hom_svg-pawprint" viewBox="0 0 99.49 82.86">
                        <path d="M93.43,58.85c-1.53,3.25-4,3.85-8.19,1.89-3.43-1.62-5.73-4.26-9.35-6s-6.64-.92-10.62-2.8c-3.8-1.79-4-5.19-3-7.18,1.88-4,5-3.16,9.91-5s8.4-4.67,11.83-3c4,1.87,3.19,6.81,4.47,11.62C89.44,52.77,95.22,55.05,93.43,58.85Zm1-24.53c4.35,2,9-2.18,11.29-7.06s.43-8.87-1.56-9.81c-4.34-2-8.83,1.36-10.28,4.44C92.48,24.78,90.41,32.44,94.39,34.32ZM79,27.06c4,1.88,7.36-2.94,9.67-7.83,1.7-3.61.81-7.79-1.55-8.9-4.16-2-8,1.52-9.72,5.14C76,18.36,75.58,25.44,79,27.06ZM72.37,29.9c1.54-3.26.36-7.8-2.17-9s-7.67,1.25-9.72,5.59c-1.36,2.89-1.24,8.26,2.2,9.88C65.94,37.92,70.24,34.42,72.37,29.9Zm35.45,8.76c-2.27-1.74-6-.84-10.23,2.47-5,3.6-5.18,8.17-2.45,10.34s7.27.55,11-3.2C109.23,45.52,110.1,40.4,107.82,38.66Z" transform="translate(-9.61 -9.76)" fill="#fff"/><path d="M33.93,79.15c0-5-1.94-9.56,1.44-12.37,2.93-2.42,7-.62,12.22,0s8-1,10.85,2.43c1.41,1.7,2.09,5-1.15,7.71s-6.51,2.8-9.59,5.35-4.65,5.68-7.57,8.1c-3.55,2.93-6.11,3-8.41.21C29.05,87.36,34.08,83.7,33.93,79.15ZM22.14,54.89c-2.17-2.62-7.37-4.81-11.06-1.75C9.39,54.55,8.56,58.88,12,63s9,7.1,12.7,4C28.08,64.26,24.18,57.35,22.14,54.89ZM36.46,44.58C33.9,41.5,29.3,39.09,25.76,42c-2,1.66-1.83,5.93.72,9,3.45,4.16,7.92,8,11.31,5.18C40.71,53.79,38.5,47.05,36.46,44.58Zm19.47,16.6c2.93-2.43,1.71-7.66-.33-10.12-3.07-3.7-8.65-4.79-10.8-3s-2.17,6.48.13,9.25C48.12,61.16,53.15,63.48,55.93,61.18ZM16.76,83.5c4.58,2.71,9.37,3.16,11.48.37s.8-7.17-4.95-9.41c-4.91-2.16-8.75-2.1-10.52.15S13.11,81.6,16.76,83.5Z" transform="translate(-9.61 -9.76)" fill="#fff"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="hom_testimonials-container hom_testimonials-background">  
            <div class="hom__max-width hom__page-section">
                <div class="hom_-testimonials">
                    <div class="home_-section-title">
                        <h2>
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 64 64"><defs><style>.cls-1{fill:#211753;}</style></defs><title>comment</title><path class="cls-1" d="M0.72,0.08A0.67,0.67,0,0,0,0,.8V47.28A0.72,0.72,0,0,0,.72,48H48L64,64V0.72A0.67,0.67,0,0,0,63.28,0H0.8Z"/></svg>
                        <span>Real</span> Testimonials</h2>
                    </div>
                    <div class="hom_--testimon-row">
                        <div class="hom_---testimonials-card">
                            <div class="hom_---testimon-image">
                                <img src="./images/PEOPLE/banner/Sarah-Connor.jpg" alt="A picture of Sarah, Connor and their adopted pet">
                            </div>
                            <h3>Sarah and Connor</h3>
                            <span>Adopted "Wolf"</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in sem maximus, 
                                mollis orci id, maximus nunc. Sed libero nibh, feugiat sit amet sodales et, 
                                consectetur nec nisl. Maecenas consequat sollicitudin luctus. Integer vulputate dapibus...</p>
                            <a href="">Click here to read the story</a>
                        </div>
                        <div class="hom_---testimonials-card">
                            <div class="hom_---testimon-image">
                                <img src="./images/PEOPLE/banner/Nathan.jpg" alt="A picture of Sarah, Connor and their adopted pet">
                            </div>
                            <h3>Nathan</h3>
                            <span>Adopted "Butter"</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in sem maximus, 
                                mollis orci id, maximus nunc. Sed libero nibh, feugiat sit amet sodales et, 
                                consectetur nec nisl. Maecenas consequat sollicitudin luctus. Integer vulputate dapibus...</p>
                            <a href="">Click here to read the story</a>
                        </div>
                        <div class="hom_---testimonials-card hom_---testimonials-last">
                            <div class="hom_---testimon-image">
                                <img src="./images/PEOPLE/banner/Melinda.jpg" alt="A picture of Sarah, Connor and their adopted pet">
                            </div>
                            <h3>Melinda</h3>
                            <span>Adopted "Sparky"</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in sem maximus, 
                                mollis orci id, maximus nunc. Sed libero nibh, feugiat sit amet sodales et, 
                                consectetur nec nisl. Maecenas consequat sollicitudin luctus. Integer vulputate dapibus...</p>
                            <a href="">Click here to read the story</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <?php require './php-html-blocks/footer.php'?>

    
    <script src="./javascript/customSelectBox.js"></script>

    <script type="text/javascript">
    </script>

</body>
</html>