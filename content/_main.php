
<?php 
    $title = "Fashion Book"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>

	
<main>
	<form action="" method="post" id="form1">
		<div class="field">
			<input type="text" name="search">
			<input type="hidden" name="product" value="<?= basename(__FILE__, "product.php")?>">
		</div>
	</form>
	
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
