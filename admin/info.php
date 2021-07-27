<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/reset-styles.css">
    <link rel="stylesheet" href="../css/admin/header-admin.css">
    <link rel="stylesheet" href="../css/admin/info.css">
</head>
<body class="hea_body-styles" onload="setSelectedMenuItem(2)">
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
   <div id="main">
        <section class="main__padd main__header-white das__padd">
           <div class="main__width">
               <h6>
                   <span>PORTAL HOME</span> ->
                   <span>ALL TICKETS</span> ->
                   <span>TICKET NUMBER</span>
                </h6>
                <div class="inf-tkt-header">
                    <div class="inf--tkt-status-header">
                        CLOSED
                    </div>
                    <h3 class="inf--tkt-h3">GEH-DC001</h3>
                </div>
                <h2 class="inf-tkt-h2">GENERAL CONTACT INQUIRY TICKET</h2>
           </div>
       </section>
       <main class="extra_padd inf__content_pad">
           <section class="inf-ticket-data-container">
                <form class="inf--tkt-data-form">
                    <div class="inf--tkt-data-header">
                        <h4>TICKET DATA</h4>
                        <button class="btn-tkt-head btn-comment">COMMENT</button>
                        <button class="btn-tkt-head btn-edit">EDIT</button>
                        <button class="btn-tkt-head btn-save hide">SAVE</button>
                        <button class="btn-tkt-head btn-cancel hide">CANCEL</button>
                    </div>
                    <div class="inf---tkt-data-row">
                        <div class="inf----form-column">
                            <!-- inf-----enable" -->
                            <div class="inf-----form-group ">
                                <label for="name-input">Name: </label>
                                <input type="text" placeholder="User's Name" disabled>
                            </div>
                            <!-- inf-----enable -->
                            <div class="inf-----form-group ">
                                <label for="name-input">Email: </label>
                                <input type="text"  placeholder="User's Email" disabled>
                            </div>
                            <!-- inf-----enable -->
                            <div class="inf-----form-group ">
                                <label for="name-input">Number: </label>
                                <input type="text"  placeholder="User's Number" disabled>
                            </div>
                        </div>
                        <div class="inf----form-column">
                            <!-- inf-----enable -->
                            <div class="inf-----form-group">
                                <label for="name-input">Message: </label>
                                <textarea name="" id="" cols="30" rows="5" placeholder="The User's message" disabled></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="inf---admin-notes hide">
                         <hr class="br-space">                        

                                <label for="name-input">Status: </label>
                                <div class="inf-----form-group inf-----enable">
                                     <select name="" id="">
                                        <option value="">New Ticket</option>
                                        <option value="">Pending</option>
                                        <option value="">Closed</option>
                                    </select>
                                </div>

                                <label for="name-input">Administrator's Notes: </label>
                                <div class="inf-----form-group inf-----enable">
                                    <textarea name="" id="" cols="150" rows="5" placeholder="Lorem ipsum dolor"></textarea>
                                </div>

                        <button class="btn-tkt-head btn-save ">SAVE</button>
                        <button class="btn-tkt-head btn-cancel ">CANCEL</button>
                    </div>

                </form>
           </section>
           <section class="inf-ticket-data-table">
               <div class="inf--tkt-table-header">
                    <div class="inf---tkt-th-group inf-flex-1">
                        <h3>Date</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><polygon points="13.41 16.59 12 18 16 22 20 18 18.59 16.59 17 18.17 17 3 15 3 15 18.17 13.41 16.59"/><polygon points="10.59 7.41 12 6 8 2 4 6 5.41 7.41 7 5.83 7 21 9 21 9 5.83 10.59 7.41"/></svg>
                    </div>
                    <div class="inf---tkt-th-group inf-flex-1">
                        <h3>Time</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><polygon points="13.41 16.59 12 18 16 22 20 18 18.59 16.59 17 18.17 17 3 15 3 15 18.17 13.41 16.59"/><polygon points="10.59 7.41 12 6 8 2 4 6 5.41 7.41 7 5.83 7 21 9 21 9 5.83 10.59 7.41"/></svg>
                    </div>
                    <div class="inf---tkt-th-group inf-flex-3">
                        <h3>Notes</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><polygon points="13.41 16.59 12 18 16 22 20 18 18.59 16.59 17 18.17 17 3 15 3 15 18.17 13.41 16.59"/><polygon points="10.59 7.41 12 6 8 2 4 6 5.41 7.41 7 5.83 7 21 9 21 9 5.83 10.59 7.41"/></svg>
                    </div>
               </div>
               <div class="inf--tkt-table-body">
                    <div class="inf---tkt-tr-group">
                        <div class="inf-pad-y-1 inf-flex-1">
                            <p>06/07/2021</p>
                        </div>
                        <div class="inf-pad-y-1 inf-flex-1">
                            <p>11:21:00</p>
                        </div>
                        <div class="inf-pad-x-1 inf-flex-3" style="text-align:justify">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime animi magnam facilis voluptatibus non, fugiat ratione aut eveniet harum totam quae nostrum nulla ab quasi.</p>
                        </div>
                    </div>
                    <div class="inf---tkt-tr-group">
                        <div class="inf-pad-y-1 inf-flex-1">
                            <p>06/07/2021</p>
                        </div>
                        <div class="inf-pad-y-1 inf-flex-1">
                            <p>11:21:00</p>
                        </div>
                        <div class="inf-pad-x-1 inf-flex-3" style="text-align:justify">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime animi magnam facilis voluptatibus non, fugiat ratione aut eveniet harum totam quae nostrum nulla ab quasi.</p>
                        </div>
                    </div>
                    <div class="inf---tkt-tr-group">
                        <div class="inf-pad-y-1 inf-flex-1">
                            <p>06/07/2021</p>
                        </div>
                        <div class="inf-pad-y-1 inf-flex-1">
                            <p>11:21:00</p>
                        </div>
                        <div class="inf-pad-x-1 inf-flex-3" style="text-align:justify">
                            <p>quasi.</p>
                        </div>
                    </div>
                    <div class="inf---tkt-tr-group">
                        <div class="inf-pad-y-1 inf-flex-1">
                            <p>06/07/2021</p>
                        </div>
                        <div class="inf-pad-y-1 inf-flex-1">
                            <p>11:21:00</p>
                        </div>
                        <div class="inf-pad-x-1 inf-flex-3" style="text-align:justify">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia odio, nihil veritatis facere delectus, laboriosam nam alias ipsam itaque non quidem beatae corrupti exercitationem eligendi! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime animi magnam facilis voluptatibus non, fugiat ratione aut eveniet harum totam quae nostrum nulla ab quasi.</p>
                        </div>
                    </div>
               </div>
           </section>
       </main>
    </div>
    
   <!-- Main END -->
   <script src="../javascript/admin/header-admin.js" type="text/javascript"></script>
</body>
</html>