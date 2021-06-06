<?php 
    $title = "Placeholder: Product name goes here"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
<main>
	<section>

<?php
	
	$items;
	$cnt = 0;
	$index = 0;
	$search = $_REQUEST['search'];
	$command = $yhendus->prepare("SELECT picture, title, author, cost FROM Books");
	if (!$command) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$command->bind_result($picture, $title, $author, $cost);
	$command->execute();
	while ($command->fetch()) {
		$book = array($picture, $title, $author, $cost);
		if (strpos(implode(" ", $book), $search) !== false){
		/*session_start();*/
		$_SESSION['picture'] = $picture;
		$_SESSION['title'] = $title;
		$_SESSION['author'] = $author;
		$_SESSION['cost'] = $cost;

		echo "<div class='product__container'>";	
		echo "<form action='?page=cart.php' method='post'>";
		echo "<holder><div class='product__child1'><img name = 'picture' src=$picture ></div></holder>";
		echo "<div class='product__child2'><br><li><h4 name = 'title'>".  $title ."</h4></li>";
		echo "<li><h6  name = 'author'>".  $author ."</h6></li>";
		echo "<li>&#x24; <strong name = 'cost'>".  $cost ."</strong><br><br><br><br><br><br><br><br><br><br><br><br></li>";
		echo "<li><input type='submit' value='Add To Cart'></li></div>";
		echo "</form>";
		echo "</div>";
	
		/*$data = " ";
		$picture = $_POST['picture'];
		$picture = htmlspecialchars($picture);
		$picture = urldecode($title);
		$picture = trim($picture);
		$title = $_POST['title']; 
		$title = htmlspecialchars($title);
		$title = urldecode($title);
		$title = trim($title);
		$author = $_POST['author'];
		$author = htmlspecialchars($author);
		$author = urldecode($author);
		$author = trim($author);
		$cost = $_POST['cost'];
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
		$items[$index] = $book;
		$cnt += 1;
		$index += 1;}
	}
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