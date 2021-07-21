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
                    <h3>GEH-DC001</h3>
                </div>
                <h2>GENERAL CONTACT INQUIRY TICKET</h2>
           </div>
       </section>
       <main class="extra_padd inf__content_pad">
           <section class="inf-ticket-data-container">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quisquam?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum assumenda aperiam debitis nobis doloribus necessitatibus iure modi nam atque quam vel maxime in quia dolorum, illo illum eaque? In, architecto, similique molestiae ea totam, repellat enim autem quae corrupti quam laudantium tenetur quisquam pariatur neque impedit corporis. Recusandae cum deleniti explicabo itaque eius cumque sint, eligendi, laboriosam illo vel odit ab iusto beatae vero commodi quibusdam quis perspiciatis at adipisci suscipit! Neque eveniet quia perferendis hic velit harum vel. Odit ipsa laborum rerum obcaecati odio qui corrupti mollitia ratione tenetur nemo. Nisi ad dolorum eius. Distinctio, autem? Nesciunt, maxime excepturi?</p>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quisquam?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum assumenda aperiam debitis nobis doloribus necessitatibus iure modi nam atque quam vel maxime in quia dolorum, illo illum eaque? In, architecto, similique molestiae ea totam, repellat enim autem quae corrupti quam laudantium tenetur quisquam pariatur neque impedit corporis. Recusandae cum deleniti explicabo itaque eius cumque sint, eligendi, laboriosam illo vel odit ab iusto beatae vero commodi quibusdam quis perspiciatis at adipisci suscipit! Neque eveniet quia perferendis hic velit harum vel. Odit ipsa laborum rerum obcaecati odio qui corrupti mollitia ratione tenetur nemo. Nisi ad dolorum eius. Distinctio, autem? Nesciunt, maxime excepturi?</p>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quisquam?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum assumenda aperiam debitis nobis doloribus necessitatibus iure modi nam atque quam vel maxime in quia dolorum, illo illum eaque? In, architecto, similique molestiae ea totam, repellat enim autem quae corrupti quam laudantium tenetur quisquam pariatur neque impedit corporis. Recusandae cum deleniti explicabo itaque eius cumque sint, eligendi, laboriosam illo vel odit ab iusto beatae vero commodi quibusdam quis perspiciatis at adipisci suscipit! Neque eveniet quia perferendis hic velit harum vel. Odit ipsa laborum rerum obcaecati odio qui corrupti mollitia ratione tenetur nemo. Nisi ad dolorum eius. Distinctio, autem? Nesciunt, maxime excepturi?</p>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quisquam?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum assumenda aperiam debitis nobis doloribus necessitatibus iure modi nam atque quam vel maxime in quia dolorum, illo illum eaque? In, architecto, similique molestiae ea totam, repellat enim autem quae corrupti quam laudantium tenetur quisquam pariatur neque impedit corporis. Recusandae cum deleniti explicabo itaque eius cumque sint, eligendi, laboriosam illo vel odit ab iusto beatae vero commodi quibusdam quis perspiciatis at adipisci suscipit! Neque eveniet quia perferendis hic velit harum vel. Odit ipsa laborum rerum obcaecati odio qui corrupti mollitia ratione tenetur nemo. Nisi ad dolorum eius. Distinctio, autem? Nesciunt, maxime excepturi?</p>
           </section>
           <section class="inf-ticket-data-table">
           <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quisquam?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum assumenda aperiam debitis nobis doloribus necessitatibus iure modi nam atque quam vel maxime in quia dolorum, illo illum eaque? In, architecto, similique molestiae ea totam, repellat enim autem quae corrupti quam laudantium tenetur quisquam pariatur neque impedit corporis. Recusandae cum deleniti explicabo itaque eius cumque sint, eligendi, laboriosam illo vel odit ab iusto beatae vero commodi quibusdam quis perspiciatis at adipisci suscipit! Neque eveniet quia perferendis hic velit harum vel. Odit ipsa laborum rerum obcaecati odio qui corrupti mollitia ratione tenetur nemo. Nisi ad dolorum eius. Distinctio, autem? Nesciunt, maxime excepturi?</p>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quisquam?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum assumenda aperiam debitis nobis doloribus necessitatibus iure modi nam atque quam vel maxime in quia dolorum, illo illum eaque? In, architecto, similique molestiae ea totam, repellat enim autem quae corrupti quam laudantium tenetur quisquam pariatur neque impedit corporis. Recusandae cum deleniti explicabo itaque eius cumque sint, eligendi, laboriosam illo vel odit ab iusto beatae vero commodi quibusdam quis perspiciatis at adipisci suscipit! Neque eveniet quia perferendis hic velit harum vel. Odit ipsa laborum rerum obcaecati odio qui corrupti mollitia ratione tenetur nemo. Nisi ad dolorum eius. Distinctio, autem? Nesciunt, maxime excepturi?</p>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quisquam?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum assumenda aperiam debitis nobis doloribus necessitatibus iure modi nam atque quam vel maxime in quia dolorum, illo illum eaque? In, architecto, similique molestiae ea totam, repellat enim autem quae corrupti quam laudantium tenetur quisquam pariatur neque impedit corporis. Recusandae cum deleniti explicabo itaque eius cumque sint, eligendi, laboriosam illo vel odit ab iusto beatae vero commodi quibusdam quis perspiciatis at adipisci suscipit! Neque eveniet quia perferendis hic velit harum vel. Odit ipsa laborum rerum obcaecati odio qui corrupti mollitia ratione tenetur nemo. Nisi ad dolorum eius. Distinctio, autem? Nesciunt, maxime excepturi?</p>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quisquam?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum assumenda aperiam debitis nobis doloribus necessitatibus iure modi nam atque quam vel maxime in quia dolorum, illo illum eaque? In, architecto, similique molestiae ea totam, repellat enim autem quae corrupti quam laudantium tenetur quisquam pariatur neque impedit corporis. Recusandae cum deleniti explicabo itaque eius cumque sint, eligendi, laboriosam illo vel odit ab iusto beatae vero commodi quibusdam quis perspiciatis at adipisci suscipit! Neque eveniet quia perferendis hic velit harum vel. Odit ipsa laborum rerum obcaecati odio qui corrupti mollitia ratione tenetur nemo. Nisi ad dolorum eius. Distinctio, autem? Nesciunt, maxime excepturi?</p>
           </section>
       </main>
    </div>
    
   <!-- Main END -->
   <script src="../javascript/admin/header-admin.js" type="text/javascript"></script>
</body>
</html>