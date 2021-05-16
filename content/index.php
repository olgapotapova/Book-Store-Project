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
</main>
<nav>
    <ul id="navbar1">
	<h3>Main menu</h3>
        <li><a href="_main.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="admin.php">Admin</a></li>		
    </ul>
    <ul id="navbar2">
	<h3>Company</h3>
        <li><a href="company.php">The Company</a></li>
        <li><a href="careers.php">Careers</a></li>
        <li><a href="https://www.nytimes.com/section/books">Press</a></li>		
    </ul>
	<ul id="navbar3">
	<h3>Discover</h3>
        <li><a href="admin.php">The Team</a></li>
        <li><a href="history.php">Our History</a></li>
        <li><a href="brand.php">Brand Smart Book</a></li>		
    </ul>
    <ul id="navbar4">
	<h3>Find us  on</h3>
        <li><a href="https://et-ee.facebook.com/">Fasebook</a></li>
        <li><a href="https://twitter.com/">Twitter</a></li>
        <li><a href="https://www.instagram.com/">Instagramm</a></li>		
    </ul>
</nav>
    <?php
    include('../htmlosad/footer.php');
    ?>

</body>
</html>