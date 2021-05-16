<?php 
    $title = "Product catalog"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
<main>
<h1>The book is the purest essence of the human soul</h1>
	<form action="" method="post" id="form1">
		<div class="field">
			<input type="text" name="search">
			<input type="hidden" name="product" value="<?=basename(__FILE__, "product.php")?>">
			<dt><input type="submit" name="sub" value="Submit" /></dt>
		</div>
	</form>
	
	<h2>Featured Categories</h2>
	<p><img src="../pildid/" ></p>
	<p><img src="../pildid/" ></p>
	<p><img src="../pildid/" ></p>
	<p><img src="../pildid/" ></p>


    <?php
    include('form3.php');
    ?>


    <p><a href="sample.html"><img src="../pildid/" width="50" height="50" alt="foto"></a></p>
    <p><a href="sample.html"><img src="../pildid/" width="50" height="50" alt="foto"></a></p>
    <p><a href="sample.html"><img src="../pildid/" width="50" height="50" alt="foto"></a></p>
    <p><a href="sample.html"><img src="../pildid/" width="50" height="50" alt="foto"></a></p>
    <p><a href="sample.html"><img src="../pildid/" width="50" height="50" alt="foto"></a></p>
    <p><a href="sample.html"><img src="../pildid/" width="50" height="50" alt="foto"></a></p>
    <p><a href="sample.html"><img src="../pildid/" width="50" height="50" alt="foto"></a></p>


<?php
    include('html-end.php');
?>