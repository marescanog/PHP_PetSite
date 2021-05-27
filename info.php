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
        <link rel="stylesheet" href="./css/info-styles.css">
        <link rel="stylesheet" href="./css/header-styles.css">
        <link rel="stylesheet" href="./css/footer-styles.css">
        <link rel="stylesheet" href="./css/not-found.css">
        <meta name="currentPage" content="ADOPT">
        <meta property="og:image" content="./images/LOGO/LOGO-BLOCK.svg" />
        <?php require './php-html-blocks/favicon.php'?>
        <?php require_once './php/enum.php'?>
    </head>
    <body >
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
    </body>
</html>