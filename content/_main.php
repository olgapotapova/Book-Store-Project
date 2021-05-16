<!DOCTYPE html>
<html>
<head>
    <title>FashionBook></title>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = "text/css"
          href = "../style/style.css">
    <link rel = "stylesheet" type = "text/css"
          href = "../style/page1.css">
    <link rel = "stylesheet" type = "text/css"
          href = "../style/navigatsion.css">
    <script src="https://use.fontawesome.com/ef7d32b53e.js"></script>
</head>
<body>
<div class="container">
    <div class="child">
    </div>
    <div class="child child1">
        <img class="logo" src="../style/pildid/logo.png" alt="logo" style="width: 63px; height: auto;">
    </div>    
    <div class="child child2">
        <h1><a>Fashion </a><span>Book</span></h1>
    </div> 
    <div class="child">
    </div>
    <div class="child child3">
        <h2><i class="fa fa-shopping-cart" aria-hidden="true"></i> Your cart</h2>
    </div>
</div>

<!--<?php 
    $title = "Fashion Book"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>-->

	
<main>
    <div class="form1">
	    <form action="" method="post" id="form1">
		    <div class="field">
			    <input type="text" name="search" class="border" placeholder="Search...">
			    <input type="hidden" name="product" value="<?= basename(__FILE__, "product.php")?>">
		    </div>
	    </form>
    </div>

    
    <?php
	    include('../htmlosad/navigation.php');
	?>
	
	<form action="" method="post" id="form2">
		<p><img src="../pildid/" ></p>
		<dt><input type="submit" name="shop" value="Shop Now" /></dt>
	</form>
	
	<h4>The Last Products</h4>
	<p><img src="../pildid/" ></p>
	
	
<?php
    include('form3.php');
?>

<?php
    include('html-end.php');
?>
