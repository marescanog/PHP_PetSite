<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pet Info</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/reset-styles.css">
        <link rel="stylesheet" href="./css/info-styles.css">
        <link rel="stylesheet" href="./css/header-styles.css">
        <link rel="stylesheet" href="./css/footer-styles.css">
        <?php require './php-html-blocks/favicon.php'?>
        <?php require_once './php/enum.php'?>
    </head>
    <body>

    <?php require './php-html-blocks/header.php'?>

        <div class="inf__main">
            <div class="header-padding" style="background-color: #766F9B; transform: translateY(5px);"></div>
            <div class="inf_header">
                <div class="inf__max_width">
                    <div>
                        <a href="">
                            <svg class="inf__arrow" viewBox="0 0 24 24">
                                <path id="two" d="M 12 14.070312 L 8.179688 10.25 C 7.765625 9.835938 7.09375 9.835938 6.679688 10.25 C 6.265625 10.664062 6.265625 11.335938 6.679688 11.75 L 11.292969 16.363281 C 11.683594 16.753906 12.316406 16.753906 12.707031 16.363281 L 17.320312 11.75 C 17.734375 11.335938 17.734375 10.664062 17.320312 10.25 C 16.90625 9.835938 16.234375 9.835938 15.820312 10.25 Z M 12 14.070312"></path>
                            </svg>
                            Back to Search
                        </a>
                    </div>
                    <div>
                        <h1>Peanut</h1>
                    </div>
                </div>
            </div>

            <main>
                <div class="inf__col-2 inf__max_width">
                    <div class="inf_content-block">
                        <div class="inf_-about">
                            <div>
                                <h4>ABOUT ME</h4>
                            </div>
                            <div >
                                <div class = "inf_--about-content">
                                    <ul class="inf_---about-content-col-1">
                                        <li><span>Species</span>Dog</li>
                                        <li><span>Age</span>Puppy</li>
                                        <li><span>Gender</span>Female</li>
                                   </ul>
                                   <ul class="inf_---about-content-col-2">
                                        <li><span>Breed</span>Russian Lapdog</li>
                                        <li><span>Weight</span>50 Ibs.</li>
                                        <li><span>Size</span>Small</li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                        <div class="inf_-details">
                            <h4>MY DETAILS</h4>
                            <p>House-trained, Shots Up to Date</p>
                            <h4>MY FOSTER CARER</h4>
                            <p>Angelica R. Santos</p>
                            <h4>MY INFO & HISTORY</h4>
                            <p>Date of Birth: 1/02/21</p>
                            <p>Peanut came from a litter of 4. Unfortunately, the owner 
                                Angelica is not able to keep all puppies since her apartment 
                                is so small. Angelica decided to put the puppies for adoption.
                                Peanut is sociable, playful and loving. Peanut is a small dog 
                                so she is very well suited for condos or apartments.  Her 
                                temperament as a lapdog is also beneficial since she enjoys
                                relaxing at home on the couch.</p>
                        </div>
                        <div class="inf_-contact">
                            <h4>Want to adopt <span>Peanut</span>?</h4>
                            <button>CONTACT</button>
                        </div>
                    </div>

                    <div class="inf__wrapper-vertical inf_slider-block">
                        <div class="inf_-slider-frame">
                            <div id="slider">
                                <figure class="inf_slider-images" >
                                       <img src="./images/PETS/Photos/peanut_img_1.jpg" alt="Peanut image 1" draggable="false">
                                        <img src="./images/PETS/Photos/peanut_img_2.jpg" alt="Peanut image 2" draggable="false">
                                        <img src="./images/PETS/Photos/peanut_img_3.jpg" alt="Peanut image 3" draggable="false">
                                        <img src="./images/PETS/Photos/peanut_img_4.jpg" alt="Peanut image 4" draggable="false"> 
                                </figure>
                            </div>
                            <div class="inf_-slider-thumbnail-collection">
                                <button class="inf_thumbnail-button previous" id="previous"><</button>
                                <div class="inf_-slider-thumbnails">
                                    <img src="./images/PETS/thumbnails/peanut_thumb_1.jpg" alt="" class="inf_thumbnail-image_selected">
                                    <img src="./images/PETS/thumbnails/peanut_thumb_2.jpg" alt="" >
                                    <img src="./images/PETS/thumbnails/peanut_thumb_3.jpg.png" alt="" >
                                    <img src="./images/PETS/thumbnails/peanut_thumb_4.jpg" alt="" >
                                </div>
                                <button class="inf_thumbnail-button next" id="next">></button>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
            <script src="./javascript/info.js"></script>
        </div>

        <?php require './php-html-blocks/footer.php'?>
    </body>
</html>