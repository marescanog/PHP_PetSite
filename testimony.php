<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CEBU PET MATCH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/reset-styles.css">
    <link rel="stylesheet" href="./css/stylish-page-wrapper-styles.css">
    <link rel="stylesheet" href="./css/testimonials-styles.css">
    <link rel="stylesheet" href="./css/header-styles.css">
    <link rel="stylesheet" href="./css/footer-styles.css">
    <meta name="currentPage" content="TESTIMONIALS">
    <meta property="og:image" content="./images/LOGO/LOGO-BLOCK.svg" />
    <?php require './php-html-blocks/favicon.php'?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300&display=swap');
    </style>
</head>
<body >
    <?php 
        require './php-html-blocks/header.php';
        require_once './php/set-testimonial.php';
    ?>
        <div style="background-color:#766F9B; min-height:100vh;">
            <div class="header-padding3" style="transform: translateY(15px);"></div>
            <div class="sty__left-right-margins tes__font">
                <div class="sty__header">
                    <?php include './images/LOGO/headerTitles/testimonials.svg';?>
                </div>
                <div class="sty__-paper tes_spacing">
                    <!-- Section 1-->
                    <div class="tes_-inner-wrapper">
                        <div class='tes_--section-1'>
                            <div class='tes_---section-1-image'>
                                <img src="./images/PEOPLE/testimonials/<?php echo $arr['Article'];?>-400x450.jpg" alt="<?php echo $arr['Name'].' and '.$arr['PetName'];?>">
                            </div>
                            <div class='tes_---section-1-content'>
                                <h2><?php echo $arr['Name'];?></h2>
                                <div class="tes_----section-1-horizontal"></div>
                                <div class="tes_----section-1-paragraphs">
                                    <h3><?php echo $arr['Head1'];?></h3>
                                    <p><?php echo $arr['Paragraph1'];?></p>
                                    <p><?php echo $arr['Paragraph2'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section 2-->
                    <div class="tes_-middle-inner-wrapper">
                        <h3><?php echo $arr['Head2'];?></h3>
                        <div class='tes_--section-2-image'>
                            <img src="./images/PEOPLE/testimonials/<?php echo $arr['Article'];?>-600x400.jpg" alt="<?php echo $arr['Name'].' and '.$arr['PetName'];?>">
                        </div>
                        <div>
                            <p><?php echo $arr['Paragraph3'];?></p>
                            <p><?php echo $arr['Paragraph4'];?></p>
                        </div>
                  </div>
                    <!-- Section 3-->
                    <div class="tes_-inner-wrapper">
                            <div class='tes_--section-3'>
                                <div class='tes_---section-3-image'>
                                    <img src="./images/PEOPLE/testimonials/<?php echo $arr['Article'];?>-400x300.jpg" alt="<?php echo $arr['PetName'];?>">
                                </div>
                                <div class='tes_---section-3-content'>
                                    <h2><?php echo $arr['PetName'];?></h2>
                                    <div class="tes_----section-3-horizontal"></div>
                                    <div class="tes_----section-3-paragraphs">
                                        <p><?php echo $arr['Paragraph5'];?> </p>
                                        <h4>Want a pet like <?php echo $arr['PetName'];?>?</h4>
                                        <button onclick="location.href='search.php';">SEARCH FOR PET</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require './php-html-blocks/footer.php'?>
    
    <script src=""></script>

    <script type="text/javascript">
    </script>

</body>
</html>