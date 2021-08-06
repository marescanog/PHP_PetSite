<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/reset-styles.css">
    <link rel="stylesheet" href="../css/admin/header-admin.css">
    <link rel="stylesheet" href="../css/admin/editcontent.css">
    <link rel="stylesheet" href="../css/admin/testimonials-styles.css">
</head>
<body class="hea_body-styles" onload="setSelectedMenuItem(4)">
    <!-- Header Menu with Drawer Start -->
    <?php require '../php-html-blocks/admin/header-admin.php'?>
    <!-- Header Menu with Drawer End -->

    <!-- Get testimonial Data Start-->
    <?php 
        require_once '../php/admin/set-testimonial-admin.php';
    ?>
    <!-- Get testimonial Data Start-->

   <!-- Side Nav Start -->
   <div class="header-spacing"></div>
   <div id="drawer" class="drawer">
            <div class="drawer-padd">
                <div class="drawer--header">
                    <h4>MENU</h4>
                    <svg onclick="toggleDrawer()" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
                </div>
                <ul id="menuNav">
                    <!-- style="background-color:#423e57" -->
                    <li onclick="window.location='./dash.php'"><a href="./dash.php">DASHBOARD</a></li>
                    <li onclick="window.location='./tickets.php'"><a href="./tickets.php">ALL TICKETS</a></li>
                    <li onclick="window.location='./petsdatabase.php'"><a href="./petsdatabase.php">PETS DATABASE</a></li>
                    <li onclick="window.location='./general.php'"><a href="./general.php">USER REQUESTS</a></li>
                    <li onclick="window.location='./editcontent.php'"><a href="./editcontent.php">TESTIMONIALS</a></li>
                </ul>
            </div>
        </div>
   <!-- Side Nav End -->
   <!-- Main Start -->
   <main id="main">
    <section class="main__padd main__header das__padd">
        <div class="main__width">
            <h2>Welcome back, <span>Username</span></h2>
            <h6>
                <span>PORTAL HOME</span> ->
                <span>TESTIMONIALS</span> ->
                <span>Melinda and Roger</span>
            </h6>
        </div>
    </section>
    <form class="edt_container">
        <h2 > WEB PAGE PREVIEW </h2>
        <div class="edt_pad edt_-top-info">
            <div class="edt_form-group">
                <label for="name-inpt">Name: </label>
                <input type="text">
            </div>
            <div class="edt_form-group-2">
                <div class="edt_label-group">
                    <p>Last Saved: <span>9:34 AM 06/07/2021</span> </p>
                </div>          
                <div class="edt_label-group">
                    <p>No current Changes</p>
                    <button>SAVE</button>
                </div> 
            </div>    
        </div>
        <div class="edt_pad edt_contents">
        <div class="tes_spacing edt_frm_inpt">
                    <!-- Section 1-->
                    <div class="tes_-inner-wrapper">
                        <div class='tes_--section-1'>
                            <div class='tes_---section-1-image'>
                                <img src="../images/PEOPLE/testimonials/<?php echo $arr['Article'];?>-400x450.jpg" alt="<?php echo $arr['Name'].' and '.$arr['PetName'];?>">
                            </div>
                            <div class='tes_---section-1-content'>
                                <h2 class="textarea" role="textbox" contenteditable><?php echo $arr['Name'];?></h2>
                                <div class="tes_----section-1-horizontal"></div>
                                <div class="tes_----section-1-paragraphs">
                                    <h3 class="textarea" role="textbox" contenteditable><?php echo $arr['Head1'];?></h3>
                                    <p class="textarea" role="textbox" contenteditable> <?php echo $arr['Paragraph1'];?></p>
                                    <p class="textarea" role="textbox" contenteditable><?php echo $arr['Paragraph2'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section 2-->
                    <div class="tes_-middle-inner-wrapper">
                        <div class="tes_-middle-text-container">
                            <h3 class="textarea" role="textbox" contenteditable><?php echo $arr['Head2'];?></h3>
                        </div>
                        <div class='tes_--section-2-image'>
                            <img src="../images/PEOPLE/testimonials/<?php echo $arr['Article'];?>-600x400.jpg" alt="<?php echo $arr['Name'].' and '.$arr['PetName'];?>">
                        </div>
                        <div>
                            <p class="textarea" role="textbox" contenteditable><?php echo $arr['Paragraph3'];?></p>
                            <p class="textarea" role="textbox" contenteditable><?php echo $arr['Paragraph4'];?></p>
                        </div>
                  </div>
                    <!-- Section 3-->
                    <div class="tes_-inner-wrapper">
                            <div class='tes_--section-3'>
                                <div class='tes_---section-3-image'>
                                    <img src="../images/PEOPLE/testimonials/<?php echo $arr['Article'];?>-400x300.jpg" alt="<?php echo $arr['PetName'];?>">
                                </div>
                                <div class='tes_---section-3-content'>
                                    <h2 class="textarea" role="textbox" contenteditable><?php echo $arr['PetName'];?></h2>
                                    <div class="tes_----section-3-horizontal"></div>
                                    <div class="tes_----section-3-paragraphs">
                                        <p class="textarea" role="textbox" contenteditable><?php echo $arr['Paragraph5'];?> </p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </form>
  </main>
    <!-- Toolbar Start -->
    <div class="edt_toolbar-container">
        <button id="btn-hide">HIDE</button>
        <button id="btn-top">TOP</button>
        <div class="edt_-toolbar-indicator">
            <p>NO CURRENT CHANGES</p>
        </div>
        <button id="btn-save">SAVE</button>
        <button id="btn-show">SHOW</button>
    </div>
    <!-- Toolbar End -->
   <!-- Main END -->
   <script src="../javascript/admin/header-admin.js" type="text/javascript"></script>
</body>
</html>