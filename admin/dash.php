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
   <main id="main">
       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores perspiciatis mollitia officia eos nostrum placeat dolore incidunt nihil dicta similique quasi consectetur esse et, veritatis alias fuga molestiae, commodi ad? Ab repudiandae cum cupiditate saepe facere. Laborum, impedit quibusdam, facilis cum commodi aliquid ea, debitis nesciunt nisi eligendi modi optio expedita sit. Laudantium exercitationem voluptatum impedit illum, ducimus blanditiis in molestiae totam accusamus cupiditate aliquid ut molestias ipsa vel suscipit maiores! Ducimus nihil nisi est corrupti nulla ab cum aperiam, mollitia dignissimos consequatur! Quo sit eum fugit repudiandae atque nihil, sed quia autem minima dignissimos. Ut necessitatibus totam distinctio, quam mollitia nesciunt quisquam sit voluptatum, animi hic nulla voluptatibus dolore, voluptates facilis dolores ipsa voluptatem nobis perspiciatis doloremque harum sunt sed praesentium. Provident esse expedita cumque nihil ab voluptatem quidem, quasi nulla! Accusamus repellat sapiente assumenda saepe, vitae doloribus possimus? Temporibus incidunt vel, ad odit accusamus velit natus, enim distinctio sapiente aliquam sint voluptatibus, provident saepe explicabo omnis iure quae reprehenderit beatae vero tenetur corrupti? Placeat consequuntur adipisci debitis veritatis, error expedita repellat commodi voluptas voluptatum porro eligendi ratione id vitae, provident odio velit dicta neque autem deleniti non! Qui animi, placeat amet quae asperiores velit nam nisi facilis nobis?</p>
       <a href="www.google.com">TEST</a>
   </main>
   <!-- Main END -->
   <script src="../javascript/admin/header-admin.js" type="text/javascript"></script>
</body>
</html>