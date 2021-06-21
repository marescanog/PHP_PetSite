<?php 
    /* Database Connection */
    require_once('../private/db_config.php');
    /* Custom Static Enum Classes (Also used for quick validation)*/
    require_once('./php/enum.php');
    /* Filtering & Pagination Logic. Extracting Data from Database & closing DB connection*/
    require_once('./php/pet-info-query.php');
?>

<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pet Info</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/reset-styles.css">
        <link rel="stylesheet" href="./css/modal-styles.css">
        <link rel="stylesheet" href="./css/info-styles.css">
        <link rel="stylesheet" href="./css/header-styles.css">
        <link rel="stylesheet" href="./css/footer-styles.css">
        <link rel="stylesheet" href="./css/not-found.css">
        <script type="text/javascript" src="./javascript/jquery-3.6.0.min.js"></script> 
        <meta name="currentPage" content="ADOPT">
        <meta property="og:image" content="./images/LOGO/LOGO-BLOCK.svg" />
        <?php require './php-html-blocks/favicon.php'?>
        <?php require_once './php/enum.php'?>
    </head>
    <body >
        <!-- Modal for Contact form -->
        <div id="simpleModal" class="mod__modal">
            <div class="mod__modal-content">
                <div class="mod__-header">
                    <span class="mod__closeBtn" id="closeBtn">&times;</span>
                    <h2>CONTACT</h2>
                </div>
                <form id="modalForm" class="mod__-body">
                    <div class="mod__--form-wrapper">
                        <label for="fname">First name:</label>
                        <input type="text" id="fname" name="fname"><br>
                        <label for="lname">Last name:</label>
                        <input type="text" id="lname" name="lname"><br>
                        <label for="lname">E-mail:</label>
                        <input type="email" id="email" name="email"><br>
                        <label for="lname">Phone Number:</label>
                        <input type="number" id="number" name="number"><br>  
                        <p style="font-size:small;">Enter your contact information to inqire about adoption! The foster carer or shelter will contact you within 24-48 hours.</p><br>      
                        <div class="inf_-contact">
                            <button class="mod_-button">SUBMIT</button>
                        </div>
                    </div>
                </form>
                <div id="sucessSubmit" class="mod__-body mod__-hidden">
                    <div class="mod__--sucess-container">
                        <img src="./images/ICONS/features/Adopt.svg" alt="Sucessful adoption logo">
                        <h3>Your submission was sucessful!</h3>
                        <p>Your confirmation number is</p>
                        <span>00000000</span>
                        <p style="font-size:small;">Please wait 24-48 hours for the foster carer to contact you. To know about the status of your inquiry, submit a follow-up at the general contact us page with the confirmation number.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Include the header file -->
        <?php require './php-html-blocks/header.php'; ?>
    
        <!-- When the page link is valid, display page info. Otherwise display 404 page not found -->
        <?php
            if($petID == 'NOTFOUND'){
                require_once './php-html-blocks/Not-Found-404.php';
            } else {
                foreach($db_err_messages as $message){
                    echo $message;
                    echo '</br>';
                }
                if($db_err_messages == null){
                    require_once './php-html-blocks/pet-info-block.php';
                }
            }
        ?>

        <!-- Include the footer file -->
        <?php require './php-html-blocks/footer.php'?>

        <script src="./javascript/modal.js" type="text/javascript"></script>
        <script type="text/javascript">
           
            $('#modalForm').submit(function(e){
                e.preventDefault();
                $.ajax({
                    url: './php/modalContactFormSubmission.php',
                    type: 'post',
                    data:$('#modalForm').serialize(),
                    success:function(response){
                        console.log(response);
                        //var res = JSON.parse(response);
                        //alert(res["message"]);
                        console.log("success");
                        //console.log(res["fname"]);
                        //console.log(res["lname"]);
                        //console.log(res["email"]);
                        //console.log(res["number"]);
                        $('#modalForm').css("display", "none");
                        $('#sucessSubmit').css("display", "block");
                    }
                });
            });

        </script>
    </body>
</html>