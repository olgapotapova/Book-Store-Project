<!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = "text/css"
          href = "../style/style.css">
</head>
<body>
    <?php
    include('../htmlosad/header.php');
	?>
<main>
<h1>The book is the purest essence of the human soul</h1>
	<form action="" method="post" id="form1">
		<input type="hidden" name="search" value="<?=basename(__FILE__, "search.php")?>">
		<dt><input type="submit" name="sub" value="Submit" /></dt>
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


</main>
    <?php
	include('../htmlosad/footer_menu.php');
    include('../htmlosad/footer.php');
    ?>

</body>
</html>