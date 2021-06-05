<?php 
    $title = "Placeholder: Product name goes here"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
<main>

<?php
	$items;
	$cnt = 0;
	$index = 0;
	$search = $_REQUEST['search'];
	$command = $yhendus->prepare("SELECT bookId, author, title, cost, genre, picture FROM Books");
	if (!$command) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$command->bind_result($id, $author, $title, $cost, $genre, $picture);
	$command->execute();
	while ($command->fetch()) {
		$book = array($id, $author, $title, $cost, $genre);
		if (strpos(implode(" ", $book), $search) !== false){
		$items[$index] = $book;
		$cnt += 1;
		$index += 1;}
	}

	if ($cnt > 0) {
		echo "<table>";
		echo "<th></th>";
		echo "<th>Title</th>";
		echo "<th>Author</th>";
		echo "<th>Genre</th>";
		echo "<th>Price</th>";
		foreach ($items as $item) {
			echo "<tr>";

			foreach ($item as $subitem) {
				echo "<td>$subitem</td>";
			}
		}
		echo "</table>";
	} else {
		echo "There are currently no books in the database.";
	}
	?>

	<p><img src="../pildid/" ></p>
	<h1>Product title</h1>
	<h2>Author</h2>
	<h3>hind</h3>
	
	<form action="" method="post" id="form4">
	<h1>Similar products</h1>
	<p><img src="../pildid/" ></p>
	<p><img src="../pildid/" ></p>
	<p><img src="../pildid/" ></p>
	</form>
<?php
    include('html-end.php');
?>