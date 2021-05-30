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
    <meta name="currentPage" content="ABOUT">
    <meta property="og:image" content="./images/LOGO/LOGO-BLOCK.svg" />
    <?php require './php-html-blocks/favicon.php'?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300&display=swap');
    </style>
</head>
<body >
    <?php require './php-html-blocks/header.php'?>
        <div style="background-color:#766F9B; min-height:100vh;">
            <div class="header-padding3" style="transform: translateY(15px);"></div>
            <div class="sty__left-right-margins tes__font">
                <div class="sty__header">
                    <?php include './images/LOGO/headerTitles/about.svg';?>
                </div>
                <div class="sty__-paper tes_spacing">
                    <!-- Section 1-->
                    <div class="tes_-inner-wrapper">
                        <div class='tes_--section-1'>
                            <div class='tes_---section-1-image'>
                                <img src="./images/SHELTERS/cebupetmatch400x450.jpg" alt="Cebu Pet Match Logo">
                            </div>
                            <div class='tes_---section-1-content'>
                                <h2>Cebu Pet Match</h2>
                                <div class="tes_----section-1-horizontal"></div>
                                <div class="tes_----section-1-paragraphs">
                                    <h3>"Bringing pets and pet lovers together conveniently with just a click of a button!"</h3>
                                    <p>Finding a new pet companion has been easier than ever with Cebu Pet Match. Easily search for a dog, a cat, birds, small furry creatures or even turtles! Narrow down your search by selecting your area or even add additional filters like the preferred
                                    gender, age and size of your pet. Once you have selected your match, click on the pet's profile to learn more details about them. Interested adopters can click on the "Contact" section of the pet's page to 
                                    contact the foster owner or institution about their interest in adopting the pet.</p>
                                    <p> This website also offers information about shelters that are located in Cebu for people who are interested in face-to-face adoptions. People who are looking to give up their Pet
                                    can also submit a request to post an adoption advertisment on the site for other pet-lovers to browse. Whether it is finding a new home for your pet or finding a new pet for your home, Cebu Pet Match offers the solution you are looking for! </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section 2-->
                    <div class="tes_-middle-inner-wrapper">
                        <h3>"Cebu Pet Match has made it easy for interested adopters to find potential pets!"</h3>
                        <div class='tes_--section-2-image'>
                            <img style="border-top:5px solid #211753; border-bottom:5px solid #211753;" src="./images/SHELTERS/cebupetmatch600x400.jpg" alt="A foster home in Cebu. look at the pets happy faces!">
                        </div>
                        <div>
                            <p> Cebu Pet match is a searchable online database of user-submitted collection of animals who need homes. It also is a directory to animal shelters and adoption organizations within Cebu. These other organizations maintain their own home pages and available-pets for adoption. </p>
                            <p> Pet lovers can search for a pet that best matches their needs. When they have found their pet match, these pet lovers can submit an inquiry to contact the foster owner or institution on the adoption process. Any pets found, adopted through, or listed in Cebu Pet match are the sole responsibility of the adoption organizations and/or the adopting party. </p>
                        </div>
                  </div>
                    <!-- Section 3-->
                    <div class="tes_-inner-wrapper">
                            <div class='tes_--section-3'>
                                <div class='tes_---section-3-image'>
                                    <img style="border:5px solid #211753;" src="./images/SHELTERS/cebupetmatch400x300.jpg" alt="Furry friends waiting to be adopted">
                                </div>
                                <div class='tes_---section-3-content'>
                                    <h2>Find your pet match!</h2>
                                    <div class="tes_----section-3-horizontal"></div>
                                    <div class="tes_----section-3-paragraphs">
                                        <p> Save a life by adopting pets who need a home. Browse pet adoption ads from different foster carers and institutions. Finding a pet is finding great and memorable companionship. All you have to do is click the button below to get started!</p>
                                        <h4>Want to find your pet match?</h4>
                                        <button onclick="location.href='search.php';">SEARCH FOR PET</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require './php-html-blocks/footer.php'?>

</body>
</html>