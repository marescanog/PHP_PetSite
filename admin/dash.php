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

    <!-- Template: Adjusts main content to the floating header -->
   <!-- <div class="hea_empty-div-style"></div>
   <div class="hea_-empty-flex-div">
       <div id="emptyHead" class="hea_--empty-div-drawer"></div>
       <main class="hea_--div-main">
            <p>Your content</p>
        </main>
   </div> -->

   <!-- Main Content Start -->
   <div class="hea_empty-div-style"></div>
   <div class="hea_-empty-flex-div">
       <div id="emptyHead" class="hea_--empty-div-drawer"></div>
       <main class="hea_--div-main">
            <p>Your content</p>
        </main>
   </div>

</body>
</html>