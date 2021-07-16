<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/reset-styles.css">
    <link rel="stylesheet" href="../css/admin/header-admin.css">
    <link rel="stylesheet" href="../css/admin/tickets.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="hea_body-styles" onload="setSelectedMenuItem(1)">
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
   <main id="main">
        <section class="main__padd main__header das__padd border-bottom">
           <div class="main__width">
                <h2>ALL TICKETS</h2>
                <div class="main__breadcrumbs">
                    <span>PORTAL HOME </span>
                    <span>&nbsp; -> &nbsp;</span>
                    <span> ALL TICKETS</span>
                </div>
           </div>
       </section>
       <section class="tkt_card_wrapper">
           <div class="tkt_card">
                <div class="tkt_-card-header">
                    <p>Showing x out of x entries</p>
                    <form action="" class="tkt_--crd-hdr-searchFrom">
                        <i class="fa fa-search icon"></i>
                        <input type="text" maxlength="30">
                    </form>
                </div>
                <div class="tkt_-card-table">
                    <div class="tkt_--card-thead_body">
                        <div class="tkt_--card-thead">
                            <div class="tkt_---card-thead-group">
                                <p>Ticket No.</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><polygon points="13.41 16.59 12 18 16 22 20 18 18.59 16.59 17 18.17 17 3 15 3 15 18.17 13.41 16.59"/><polygon points="10.59 7.41 12 6 8 2 4 6 5.41 7.41 7 5.83 7 21 9 21 9 5.83 10.59 7.41"/></svg>
                            </div>
                            <div class="tkt_---card-thead-group col-mobile-hide">
                                <p>Type</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><polygon points="13.41 16.59 12 18 16 22 20 18 18.59 16.59 17 18.17 17 3 15 3 15 18.17 13.41 16.59"/><polygon points="10.59 7.41 12 6 8 2 4 6 5.41 7.41 7 5.83 7 21 9 21 9 5.83 10.59 7.41"/></svg>
                            </div>
                            <div class="tkt_---card-thead-group">
                                <p>Status</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><polygon points="13.41 16.59 12 18 16 22 20 18 18.59 16.59 17 18.17 17 3 15 3 15 18.17 13.41 16.59"/><polygon points="10.59 7.41 12 6 8 2 4 6 5.41 7.41 7 5.83 7 21 9 21 9 5.83 10.59 7.41"/></svg>
                            </div>
                            <div class="tkt_---card-thead-group col-mobile-hide">
                                <p>Last Updated</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><polygon points="13.41 16.59 12 18 16 22 20 18 18.59 16.59 17 18.17 17 3 15 3 15 18.17 13.41 16.59"/><polygon points="10.59 7.41 12 6 8 2 4 6 5.41 7.41 7 5.83 7 21 9 21 9 5.83 10.59 7.41"/></svg>
                            </div>
                        </div>
                        <div class="tkt_--card-tbody">
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn tkt_---orange"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn tkt_---gray"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                            <div class="tkt_--card-item">
                                <p>GEH-DC0001</p>
                                <p class="col-mobile-hide-body">GENERAL</p>
                                <button class="tkt_---card-item-btn"><p>NEW TICKET</p></button>
                                <p class="col-mobile-hide-body">07/05/2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="tkt_-card-footer">
                        <div class="tkt---card-foot-show-number-entries">
                            <p>Show</p>
                            <select name="entries" id="footer-select">
                                <option value=10>10</option>
                                <option value=15>15</option>
                                <option value=20>20</option>
                                <option value=25>25</option>
                                <option value=30>30</option>
                            </select>
                            <p>entries</p>
                        </div>
                        <div class="tkt---card--foot-pagination">
                            <a class="a-side">PREV</a>
                            <a class="a-selected">1</a>
                            <div class="tkt-crd-foot-extra-pages">
                                <a>2</a>
                                <a>3</a>
                            </div>
                            <a class="a-side">NEXT</a>
                        </div>
                    </div>
            </div>                                                  
           </div>
       </section>
    </main>
   <!-- Main END -->

   <script src="../javascript/admin/header-admin.js" type="text/javascript"></script>
</body>
</html>