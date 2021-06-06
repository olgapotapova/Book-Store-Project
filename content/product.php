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
		$_SESSION['picture'] = $picture;
		$_SESSION['title'] = $title;
		$_SESSION['author'] = $author;
		$_SESSION['cost'] = $cost;
		echo "<div class='product__container'>";	
		echo "<form action='?page=cart.php' method='post'>";
		echo "<holder><div class='product__child1'><img  src=$picture ></div></holder>";
		echo "<div class='product__child2'><br><li><h4>".  $title ."</h4></li>";
		echo "<li><h6>".  $author ."</h6></li>";
		echo "<li>&#x24; <strong>".  $cost ."</strong><br><br><br><br><br><br><br><br><br><br><br><br></li>";
		echo "<li><input type='submit' value='Add To Cart'></li></div>";

		echo "</form>";
		echo "</div>";
		$items[$index] = $book;
		$cnt += 1;
		$index += 1;}
	}
	




	if ($cnt > 1) {
		echo "<table>";
		echo "<th>ID</th>";
		echo "<th>Title</th>";
		echo "<th>Author</th>";
		echo "<th>Genre</th>";
		echo "<th>Price</th>";
		echo "<th>Button</th>";
		foreach ($items as $item) {
			echo "<tr>";
			//Listing properties of the book
			foreach ($item as $subitem) {
				echo "<td>$subitem</td>";
			}
			//Delete button
			echo "<td><form action='?page=admin.php' method='post'>
					<input type = 'hidden' name = 'id' value = '$item[0]'/>
					<input type = 'submit' name = 'remove_book' value = 'Remove'/>
					</form></td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "There are currently no books in the database.";
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