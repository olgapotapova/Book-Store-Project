<!DOCTYPE html>
<html>
<head>
    <title>Fashion Book</title>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = "text/css"
          href = "../style/style.css">
</head>
<body>
    <h1>Fashion Book</h1>
    <?php
    include('../htmlosad/header.php');
    ?>
	
<main>
	<form action="" method="post" id="form1">
		<input type="hidden" name="search" value="<?=basename(__FILE__, "search.php")?>">
	</form>
	
	<form action="" method="post" id="form2">
		<p><img src="../pildid/" ></p>
		<dt><input type="submit" name="shop" value="Shop Now" /></dt>
	</form>
	
	<h4>Featured Products</h4>
	<p><img src="../pildid/" ></p>
	
	
    <?php
    include('form3.php');
    ?>
</main>
<nav>
    <ul id="navbar1">
        <li><a href="_main.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="help.php">Help</a></li>		
    </ul>
	<ul id="navbar2">
        <li><a href="company.php">The Company</a></li>
        <li><a href="careers.php">Careers</a></li>
        <li><a href="https://www.nytimes.com/section/books">Press</a></li>		
    </ul>
	</ul>
	    <ul id="navbar3">
        <li><a href="team.php">The Team</a></li>
        <li><a href="history.php">Our History</a></li>
        <li><a href="brand.php">Brand Smart Book</a></li>		
    </ul>
	</ul>
	    <ul id="navbar4">
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