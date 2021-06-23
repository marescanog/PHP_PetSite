<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CEBU PET MATCH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/reset-styles.css">
    <link rel="stylesheet" href="./css/stylish-page-wrapper-styles.css">
    <link rel="stylesheet" href="./css/contact-styles.css">
    <link rel="stylesheet" href="./css/header-styles.css">
    <link rel="stylesheet" href="./css/footer-styles.css">
    <script type="text/javascript" src="./javascript/jquery-3.6.0.min.js"></script> 
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
                    <?php include './images/LOGO/headerTitles/contactus.svg';?>
                </div>
                <div class="sty__-paper">
                    <div class="sty__--small-head-wrapper">
                        <h2>Have something on your mind?</h2>
                        <h3>Let's talk about it!</h3>
                        <hr>
                    </div>
                    <div class="con_main-container"> 
                        <div class="con_-img-container">
                            <?php include './images/ICONS/contact.svg';?>
                        </div>
                        <form id="contact-form" action="" action="" method="post" class="con_-form-container" onsubmit="contactformSubmit(event)">
                            <label for="name" >Full Name *</label>
                            <input type="text" name="name" id="name" placeholder="Your First and Last Name" maxlength="50" required ><br>
                            <label for="email">Email Address *</label>
                            <input type="email" name="email" id="email" placeholder="Your_email@email.com" maxlength="45" required><br>
                            <label for="mobile">Mobile No.</label>
                            <input type="tel" name="mobile" id="mobile" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}|[0-9]{11}" placeholder="09X-XXX-XXXX" maxlength="15"><br>
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="10" cols="50" placeholder="Your Message" maxlength="10000" required></textarea><br>
                            <button>SUBMIT</button>
                        </form>
                        <div id="form-sucess" class= "con_-form-container con_display-none">
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                            <lottie-player src="https://assets9.lottiefiles.com/datafiles/wxvpPtnApiUPy4Y/data.json"  background="transparent"  speed="1"  style="width: 50px; height: 50px; margin-left:auto; margin-right:auto; margin-top:10px"    autoplay></lottie-player>
                                <div class= "con_--sucess-contents">
                                    <h3>Your message has been sent!</h3>
                                    <div class="con_---refNo-container">
                                        <p>Your confirmation number is</p>
                                        <p id="refNo"> 000 </p>
                                    </div>
                                    <p class="con_---Info-Paragraph">A representative will contact you within 24-48 hours about your inquiry.</p>
                                    <p id="new-submit" class="con_---submit-another" onclick="submitNewContactForm()">Submit a new inquiry</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php require './php-html-blocks/footer.php'?>

    <script src="./javascript/formSubmission.js" type="text/javascript"></script>


    <script type="text/javascript">
    </script>

</body>
</html>