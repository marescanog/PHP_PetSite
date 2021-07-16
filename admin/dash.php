<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/reset-styles.css">
    <link rel="stylesheet" href="../css/admin/header-admin.css">
    <link rel="stylesheet" href="../css/admin/dash.css">
</head>
<body class="hea_body-styles" onload="setSelectedMenuItem(0)">
    <!-- Header Menu with Drawer Start -->
    <?php require '../php-html-blocks/admin/header-admin.php'?>
    <!-- Header Menu with Drawer End -->

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
   <main id="main" class="das_mainSection">
       <section class="main__padd main__header das__padd">
           <div class="main__width">
                <h2>Welcome back, <span>Username</span></h2>
           </div>
       </section>
       <section class="main__padd das_tickets">
            <h3>TICKETS</h3>
            <div class="das_-tickets-container">
                <div class="das_--ticket-box das_--tckt-purple">
                    <div class="das_---ticket-content">
                        <p>0</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" viewBox="0 0 370 246">
                        <path d="M456.75,211.38V152.71a30,30,0,0,0-30-30h-310a30,30,0,0,0-30,30v58.8a34.49,34.49,0,0,1,0,68.4v58.8a30,30,0,0,0,30,30h310a30,30,0,0,0,30-30V280a34.5,34.5,0,0,1,0-68.65Zm-62,98.83a15.5,15.5,0,0,1-15.5,15.5h-215a15.5,15.5,0,0,1-15.5-15.5v-129a15.5,15.5,0,0,1,15.5-15.5h215a15.5,15.5,0,0,1,15.5,15.5Z" transform="translate(-86.75 -122.71)" fill="#704773"/><rect x="80.5" y="62" width="209" height="122" fill="#704773"/></svg>                    </svg>
                    </div>
                    <h4>ADOPTION REQUESTS</h4>
                </div>
                <div class="das_--ticket-box das_--tckt-blue">
                    <div class="das_---ticket-content">
                        <p>0</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 133.28 135.32">
                        <path d="M359,55H258.91c-9.16,0-16.59,6.46-16.59,14.43V175.93c0,8,7.43,14.43,16.59,14.43H359c9.17,0,16.6-6.46,16.6-14.43V69.47C375.6,61.5,368.17,55,359,55Zm-82.41,110c-4.51,0-8.16-3.18-8.16-7.1s3.65-7.1,8.16-7.1,8.16,3.18,8.16,7.1S281.1,165.05,276.59,165.05Zm0-29.34c-4.51,0-8.16-3.17-8.16-7.09s3.65-7.1,8.16-7.1,8.16,3.18,8.16,7.1S281.1,135.71,276.59,135.71Zm0-30.51c-4.51,0-8.16-3.18-8.16-7.1s3.65-7.1,8.16-7.1,8.16,3.18,8.16,7.1S281.1,105.2,276.59,105.2Zm77.79,56.54a1.79,1.79,0,0,1-1.9,1.65H300.25a1.79,1.79,0,0,1-1.9-1.65v-7.57a1.79,1.79,0,0,1,1.9-1.66h52.23a1.79,1.79,0,0,1,1.9,1.66Zm0-29.34a1.79,1.79,0,0,1-1.9,1.66H300.25a1.79,1.79,0,0,1-1.9-1.66v-7.57a1.79,1.79,0,0,1,1.9-1.65h52.23a1.79,1.79,0,0,1,1.9,1.65Zm0-30.52a1.79,1.79,0,0,1-1.9,1.66H300.25a1.79,1.79,0,0,1-1.9-1.66V94.31a1.79,1.79,0,0,1,1.9-1.65h52.23a1.79,1.79,0,0,1,1.9,1.65Z" transform="translate(-242.32 -55.04)" fill="#0a4b7c"/></svg>                    </svg>
                    </div>
                    <h4>ADOPTION REQUESTS</h4>
                </div>
                <div class="das_--ticket-box das_--tckt-green">
                    <div class="das_---ticket-content das_--tckt-green">
                        <p>0</p>
                        <svg id="Web" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 73 73">
                        <path id="Path_4" data-name="Path 4" d="M10.95,10.95Q20.987,0,36.5,0T62.05,10.95Q73,20.987,73,36.5T62.05,62.05Q52.013,73,36.5,73T10.95,62.05C4.258,54.75,0,46.842,0,36.5S3.65,17.642,10.95,10.95ZM41.367,65.7q3.65,0,9.125-5.475c2.433-4.258,4.258-8.517,4.258-12.775a10.074,10.074,0,0,0-3.042-7.3c-2.433-2.433-4.867-3.65-7.908-3.65H37.717a17.762,17.762,0,0,1-5.475-1.217,5.523,5.523,0,0,1-1.825-4.258,3.161,3.161,0,0,1,1.217-2.433,4.612,4.612,0,0,1,2.433-1.217A4.152,4.152,0,0,1,37.108,29.2c1.217.608,1.825,1.217,2.433,1.217a3.657,3.657,0,0,0,2.433-.608,3.657,3.657,0,0,0,.608-2.433c0-1.825-1.217-4.258-3.042-6.083A25.162,25.162,0,0,0,42.583,9.733a1.308,1.308,0,0,0-1.217-1.217A18.806,18.806,0,0,0,36.5,7.3c-6.692.608-11.558,1.825-15.817,4.867a15.315,15.315,0,0,0-5.475,12.167,15.576,15.576,0,0,0,4.867,11.558,16.62,16.62,0,0,0,11.558,4.867h0v2.433a7.81,7.81,0,0,0,2.433,6.083,8.859,8.859,0,0,0,5.475,3.65v10.95c0,.608,0,.608.608,1.217S40.758,65.7,41.367,65.7Z" fill="#468D00"/>
                        </svg>
                    </div>
                    <h4>ADOPTION REQUESTS</h4>
                </div>
            </div>
       </section>
       <section class="main__padd das_content-management">
           <h3>CONTENT MANAGEMENT</h3>
            <ul>
                <li><a href="">PET INFORMATION DATA</a></li>
                <li><a href="">TESTIMONIAL DATA</a></li>
                <li><a href="">IMAGES</a></li>
                <li><a href="">ARCHIVE</a></li>
            </ul>
       </section>
   </main>
   <!-- Main END -->
   <script src="../javascript/admin/header-admin.js" type="text/javascript"></script>
</body>
</html>