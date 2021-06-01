<!DOCTYPE html>
<html lang='en'>
<head>
    <title><?php echo $title ?></title>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = "text/css"
          href = "style/style.css">
    <link rel = "stylesheet" type = "text/css"
          href = "style/page1.css">
    <link rel = "stylesheet" type = "text/css"
          href = "style/navigatsion.css">
    <link rel = "stylesheet" type = "text/css"
          href = "style/form3.css">
    <link rel = "stylesheet" type = "text/css"
          href = "style/full-navbar.css">
    <link rel = "stylesheet" type = "text/css"
          href = "style/shop.css">
    <link rel = "stylesheet" type = "text/css"
          href = "style/admin.css">
    <script src="https://use.fontawesome.com/ef7d32b53e.js"></script>
</head>
<body>

<?php if($title == "Fashion Book") { ?>
        
<div class="container">
   <!-- <div class="child">
    </div>-->
    <div class="child child1">
        <img class="logo" src="style/pildid/logo.png" alt="logo" style="width: 63px; height: auto;">
    </div>    
    <div class="child child2">
        <h1><a>Fashion </a><span>Book</span></h1>
    </div> 
    <div class="child child_for_media">
    </div>
    <div class="child child3">
        <h2>
            <i class="fa fa-shopping-cart" aria-hidden="true" style="padding-left: 10px;"></i>
            <a href="?page=cart.php" style="color: antiquewhite;"> Your cart</a>
        </h2>
    </div>
</div>

<?php } ?>

    <?php
        include('include/header.php');
    ?>