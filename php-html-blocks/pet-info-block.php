<?php     require_once('./php/enum.php'); ?>

<div class="inf__main">
            <div class="header-padding" style="background-color: #766F9B; transform: translateY(5px);"></div>
            <div class="inf_header">
                <div class="inf__max_width">
                    <div>
                        <a href="<?php echo $pagelink?>">
                            <svg class="inf__arrow" viewBox="0 0 24 24">
                                <path id="two" d="M 12 14.070312 L 8.179688 10.25 C 7.765625 9.835938 7.09375 9.835938 6.679688 10.25 C 6.265625 10.664062 6.265625 11.335938 6.679688 11.75 L 11.292969 16.363281 C 11.683594 16.753906 12.316406 16.753906 12.707031 16.363281 L 17.320312 11.75 C 17.734375 11.335938 17.734375 10.664062 17.320312 10.25 C 16.90625 9.835938 16.234375 9.835938 15.820312 10.25 Z M 12 14.070312"></path>
                            </svg>
                            Back to Search
                        </a>
                    </div>
                    <div>
                        <h1><?php echo htmlentities($petInfo[0]['petName']);?></h1>
                    </div>
                </div>
            </div>

            <main class="inf__min_height">
                <div class="inf__col-2 inf__max_width inf__center_height">
                    <div class="inf_content-block">
                        <div class="inf_-about">
                            <div>
                                <h4>ABOUT ME</h4>
                            </div>
                            <div >
                                <div class = "inf_--about-content">
                                    <ul class="inf_---about-content-col-1">
                                        <li><span>Species</span><?php echo ENUM_SPECIES::getKey((int)$petInfo[0]['species']);?></li>
                                        <li><span>Age</span><?php echo ucfirst(ENUM_AGE::getKey((int)$petInfo[0]['age']));?></li>
                                        <li><span>Gender</span><?php echo ucfirst(ENUM_GENDER::getKey((int)$petInfo[0]['gender']));?></li>
                                   </ul>
                                   <ul class="inf_---about-content-col-2">
                                        <li><span>Breed</span><?php echo htmlentities($petInfo[0]['breed']) ?></li>
                                        <li><span>Weight</span><?php echo htmlentities($petInfo[0]['weight']) ?></li>
                                        <li><span>Size</span><?php echo ucfirst(ENUM_SIZE::getKey((int)$petInfo[0]['size']));?></li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                        <div class="inf_-details">
                            <h4>MY DETAILS</h4>
                            <p><?php echo htmlentities($petInfo[0]['details']); ?></p>
                            <h4>MY FOSTER CARER</h4>
                            <p><?php echo htmlentities($petInfo[0]['fosterCarer']); ?></p>
                            <h4>MY INFO & HISTORY</h4>
                            <p>Date of Birth: <?php echo htmlentities($petInfo[0]['dob']); ?></p>
                            <p><?php echo htmlentities($petInfo[0]['history']); ?></p>
                        </div>
                        <div class="inf_-contact">
                            <h4>Want to adopt <span><?php echo htmlentities($petInfo[0]['petName']); ?></span>?</h4>
                            <button>CONTACT</button>
                        </div>
                    </div>

                    <div class="inf__wrapper-vertical inf_slider-block">
                        <div class="inf_-slider-frame">
                            <div id="slider">
                                <figure class="inf_slider-images" >
                                    <?php                                     
                                        for($ph_x = 0; $ph_x < $totalPhotos; $ph_x++){
                                            echo '<img src="./images/PETS/Photos/'.$petID.'_img_'.($ph_x+1).'.jpg" alt="'.htmlentities($petName).' image '.($ph_x+1).'" draggable="false">';
                                        }
                                        
                                    ?>
                                    <!--template
                                       <img src="./images/PETS/Photos/peanut_img_1.jpg" alt="Peanut image 1" draggable="false">
                                    -->
                                </figure>
                            </div>
                            <div class="inf_-slider-thumbnail-collection">
                                <button class="inf_thumbnail-button previous" id="previous"><</button>
                                <div class="inf_-slider-thumbnails">
                                    <?php 
                                    
                                        for($ph_x = 0; $ph_x < $totalPhotos; $ph_x++){
                                            $thumb_str = '<img src="./images/PETS/thumbnails/'.$petID.'_thumb_'.($ph_x+1).'.jpg" ';
                                            if($ph_x == 0) {
                                                $thumb_str.= 'class="inf_thumbnail-image_selected" ';
                                            }
                                            $thumb_str.='alt="'.htmlentities($petName).' thumbnail '.($ph_x+1).'">';
                                            echo $thumb_str;
                                        }
                                     
                                    ?>
                                     <!-- template
                                    <img src="./images/PETS/thumbnails/peanut_thumb_1.jpg" alt="" class="inf_thumbnail-image_selected">
                                    <img src="./images/PETS/thumbnails/peanut_thumb_2.jpg" alt="" >
                                    -->
                                </div>
                                <button class="inf_thumbnail-button next" id="next">></button>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
            <script src="./javascript/info.js"></script>
        </div>