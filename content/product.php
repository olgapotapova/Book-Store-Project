<?php 
    $title = "Placeholder: Product name goes here"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
<main>
	<section>

<?php
	require_once('config.php');
	$items;
	$cnt = 0;
	$index = 0;
	$search = $_REQUEST['search'];
	$command = $yhendus->prepare("SELECT bookId, picture, title, author, cost FROM Books");
	if (!$command) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$command->bind_result($id, $picture, $title, $author, $cost);
	$command->execute();
	/*session_start();
	$_SESSION['picture'] = $book[1];
	$_SESSION['title'] = $book[2];
	$_SESSION['author'] = $book[3];
	$_SESSION['cost'] = $book[4];
	header("Location: $_SERVER[PHP_SELF]?page=product.php");*/

	while ($command->fetch()) {
		
		$book = array($id, $picture, $title, $author, $cost);

		if (strpos(implode(" ", $book), $search) !== false){


		echo "<div class='product__container'>";	
		echo "<form action='?page=cart.php' method='post'>";
		echo "<holder><div class='product__child1'><img name = 'picture' src=$picture ></div></holder>";
		echo "<div class='product__child2'><br><li><input name='id' id='id' class='hidden' value = '$id' ></input><h4 id = 'tit' name = 'tit'>".  $title ."</h4></li>";
		echo "<li><h6 id = 'auth' name = 'auth'>".  $author ."</h6></li>";
		echo "<li>&#x24; <strong name = 'cost'>".  $cost ."</strong><br><br><br><br><br><br><br><br><br><br><br><br></li>";
		
		echo "<li><input class='add_to_cart' type = 'submit' name ='add_to_cart' value='Add To Cart'></li></div>";
		echo "</form>";
		echo "</div>";

		$items[$index] = $book;
		$cnt += 1;
		$index += 1;}

	}
	?>

</section>
<?php
    include('html-end.php');
?>