<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CEBU PET MATCH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/reset-styles.css">
    <link rel="stylesheet" href="./css/stylish-page-wrapper-styles.css">
    <link rel="stylesheet" href="./css/questions-styles.css">
    <link rel="stylesheet" href="./css/header-styles.css">
    <link rel="stylesheet" href="./css/footer-styles.css">
    <meta name="currentPage" content="ABOUT">
    <meta property="og:image" content="./images/LOGO/LOGO-BLOCK.svg" />
    <?php require './php-html-blocks/favicon.php'?>
</head>
<body >
    <?php require './php-html-blocks/header.php'?>
        <div style="background-color:#766F9B; min-height:100vh;">
            <div class="header-padding3" style="transform: translateY(15px);"></div>
            <div class="sty__left-right-margins">
                <div class="sty__header">
                    <?php include './images/LOGO/headerTitles/questions.svg';?>
                </div>
                <div class="sty__-paper">
                    <div class="sty__--small-head-wrapper">
                        <h2>Have some questions?</h2>
                        <h3>Here are the most common questions from users</h3>
                        <hr>
                    </div>
                    <div class="que__accordion">

                        <div class="que__-accordion-item">
                            <div class="que_--accordion-item-header">
                                How can I adopt an animal from Cebu Pet Match?
                            </div>
                            <div class="que_--accordion-item-body">
                                <div class="que_---accordion-item-body-content">
                                After searching for your pet match, simply click on the pet's profile to be directed to their information page.
                                At the bottom of the page, you will find a "CONTACT" button. Click on the button to enable the contact info form and fill in your details.
                                Your information will be forwarded to the respective foster carer or shelter listed on the pet's information page and you will receive a reference number.
                                Wait for the foster carer or shelter to contact you and they will provide you with their adoption process.
                                </div>
                            </div>
                        </div>

                        <div class="que__-accordion-item">
                            <div class="que_--accordion-item-header">
                                What if I don't receive a call or email from the foster carer/shelter?
                            </div>
                            <div class="que_--accordion-item-body">
                                <div class="que_---accordion-item-body-content">
                                You can contact us on the website with your reference number and we will follow up on your inquiry. Simply click on the "Contact Us" link located in the navigation menu or the footer section.
                                </div>
                            </div>
                        </div>

                        <div class="que__-accordion-item" style="margin-bottom:0">
                            <div class="que_--accordion-item-header">
                                What if my request to adopt an animal has been declined by the foster carer or shelter?
                            </div>
                            <div class="que_--accordion-item-body">
                                <div class="que_---accordion-item-body-content">
                                Unfortunately that is beyond the control of Cebu pet Match. Different foster carers and shelters have different needs and levels for qualifying a potential adopter.
                                Cebu Pet Match cannot gaurantee the likelyhood of potential adopters being able to secure their desired pet. You can always find another pet match and try your luck with a different foster carer/shelter.
                                Click on <a href="search.php">this link </a> to search for a new match.
                                </div>
                            </div>
                        </div>

                        <div class="que__-accordion-item">
                            <div class="que_--accordion-item-header">
                                Do you pick up stray animals?
                            </div>
                            <div class="que_--accordion-item-body">
                                <div class="que_---accordion-item-body-content">
                                Rescuing stray animals is a difficult process and it is impossible to rescue every stray animal. Cebu Pet Match can post adoption ads on the site provided that the stray animal is 
                                currently in the care of a foster carer or shelter. Cebu Pet Match cannot take in strays since we do not have a physical location to hold them. 
                                </div>
                            </div>
                        </div>

                        <div class="que__-accordion-item">
                            <div class="que_--accordion-item-header">
                                Can you adopt my pet?
                            </div>
                            <div class="que_--accordion-item-body">
                                <div class="que_---accordion-item-body-content">
                                Unfortunately Cebu Pet Match does not take in adopted pets since we only offer a virtual service. You can, however, choose to post an advertisment of adoption
                                for your pet on our website. Click on the "Request to post a pet up for adoption" on the "Placements" section of the navigation menu. Or "Post for adoption" in the footer section of the website.
                                You can click <a href="rehome.php">on this link</a> to be redirected to the page.
                                </div>
                            </div>
                        </div>

                        <div class="que__-accordion-item">
                            <div class="que_--accordion-item-header">
                                Does Cebu Pet Match have a shelter location?
                            </div>
                            <div class="que_--accordion-item-body">
                                <div class="que_---accordion-item-body-content">
                                Cebu Pet Match is a virtual online service that aims to match potential adopters with pets that are available for adoption in your area. 
                                We do not have a physical office location nor are we a shelter that houses pets. Alternatively, you can visit the pages of other shelters available in Cebu.
                                You can click <a href="shelters.php">on this link</a> to be redirected to the page.
                                </div>
                            </div>
                        </div>

                        <div class="que__-accordion-item">
                            <div class="que_--accordion-item-header">
                                Is Cebu Pet Match even real?
                            </div>
                            <div class="que_--accordion-item-body">
                                <div class="que_---accordion-item-body-content">
                                No. The concept of Cebu Pet Match was made up for a website project. The images were sourced from free to use stock photo image platforms such as pexels.com and unsplash.com to name a few. 
                                Any likeness to the names and details mentioned on this website are a pure coincidence. However the links and pages to the Cebu City shelters are real (IRO, MARO & CCACC). This website was made as a final project for the CIS 1202 Web Development I Class. 
                                This website showcases the use web technologies and libraries using HTML, CSS, PHP and database functionality MySQL. The website is hosted on EducationHost
                                to demonstrate the real-time web application features and functionality. The github repository can be found at <a href="https://github.com/marescanog/PHP_PetSite" target=”_blank”>this link</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    <script src="./javascript/accordion.js"></script>
    <?php require './php-html-blocks/footer.php'?>
</body>
</html>