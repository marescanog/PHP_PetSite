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
                        <form action="" class="con_-form-container">
                            <label for="name" >Full Name *</label>
                            <input type="text" name="name" id="name" placeholder="Your First and Last Name" required><br>
                            <label for="email">Email Address *</label>
                            <input type="email" name="email" id="email" placeholder="Your_email@email.com" required><br>
                            <label for="mobile">Mobile No.</label>
                            <input type="tel" name="mobile" id="mobile" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}|[0-9]{11}" placeholder="09X-XXX-XXXX"><br>
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="10" cols="50" placeholder="Your Message" required></textarea><br>
                            <button>SUBMIT</button>
                        </form>
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