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
		echo "<div class='product__child2'><br><li><input name='id' id='id' value = '$id'> $id </input><h4 id = 'tit' name = 'tit'>".  $title ."</h4></li>";
		echo "<li><h6 id = 'auth' name = 'auth'>".  $author ."</h6></li>";
		echo "<li>&#x24; <strong name = 'cost'>".  $cost ."</strong><br><br><br><br><br><br><br><br><br><br><br><br></li>";
		
		echo "<li><input class='add_to_cart' type = 'submit' name ='add_to_cart' value='Add To Cart'></li></div>";
		echo "</form>";
		echo "</div>";

		$items[$index] = $book;
		$cnt += 1;
		$index += 1;}

	}



		/*$data = " ";
		$picture =  $_REQUEST['picture'];
		$picture = htmlspecialchars($picture);
		$picture = urldecode($title);
		$picture = trim($picture);
		$title =  $_REQUEST['title']; 
		$title = htmlspecialchars($title);
		$title = urldecode($title);
		$title = trim($title);
		$author =  $_REQUEST['author'];
		$author = htmlspecialchars($author);
		$author = urldecode($author);
		$author = trim($author);
		$cost =  $_REQUEST['cost'];
		$cost = htmlspecialchars($cost);
		$cost = urldecode($cost);
		$cost = trim($cost);
		$cart_file = fopen('./cart.txt', 'a');
		fwrite($cart_file, $picture);
		fwrite($cart_file, $data);
		fwrite($cart_file, $title);
		fwrite($cart_file, $data);
		fwrite($cart_file, $author);
		fwrite($cart_file, $data);
		fwrite($cart_file, $cost);
		fwrite($cart_file, $data);
		fclose($cart_file);*/


	/*require_once('config.php');

	if(isSet($_GET["add_to_cart"])){
		$title = $_GET['title'];
		$author = $_GET['author'];
		$kask = $yhendus ->prepare ("SELECT picture, title, author, cost FROM Books WHERE title='$title' AND author='$author'")or die("Error" . mysqli_error($yhendus));
		if (!$command) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$command->bind_result($picture, $title, $author, $cost);
		$kask->execute();
		header("Location: $_SERVER[PHP_SELF]?page=cart.php");
		exit();
	}*/

	?>
	
	<form action="" method="post" id="form4">
	<h1>Similar products</h1>
	<p><img src="../pildid/" ></p>
	<p><img src="../pildid/" ></p>
	<p><img src="../pildid/" ></p>
	</form>

</section>
<?php
    include('html-end.php');
?>