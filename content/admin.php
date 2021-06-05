<?php
$title = "Administration"; //Title for the page.  Used in the <title> tag
include('html-begin.php');
require_once('config.php');

//andmete lisamine ab tabelisse
if (isset($_REQUEST["add_book"])) {
	echo "Lisa raamat";
	$kask = $yhendus->prepare("INSERT INTO Books(author,title,cost,genre,picture) VALUES (?,?,?,?,?)");
	$kask->bind_param(
		"sssss",
		$_REQUEST["author_field"],
		$_REQUEST["title_field"],
		$_REQUEST["price_field"],
		$_REQUEST["genre_field"],
		$_REQUEST["imageURL_field"]
	);
	$kask->execute();
	echo $yhendus -> error;
	$yhendus->close();
	exit();
}

if (isset($_REQUEST["remove_book"])) {
	$command = $yhendus->prepare("DELETE FROM Books WHERE bookId = ?");
	$command->bind_param("i", $_REQUEST["id"]);
	$command->execute();
	$yhendus->close();
	header("Location: $_SERVER[PHP_SELF]?page=admin.php");
	exit();
}
?>
<main>
	<div class="container_post">
		<form action='?page=admin.php' method="post">
			<input type="hidden" name="add_book" value="jah">
			<ul>
				<div class="form__line">
					<label class="label_for-center" for='author_field'>Author: </label>
					<input class="center" type='text' name='author_field' id='author_field' />
				</div>
				<div class="form__line">
					<label class="label_for-center" for='title_field'>Title: </label>
					<input class="center" type='text' name='title_field' id='title_field' />
				</div>
				<div class="form__line">
					<label class="label_for-center" for='price_field'>Price: </label>
					<input class="center" type='text' name='price_field' id='price_field' />
				</div>
				<div class="form__line">
					<label class="label_for-center" for='genre_field'>Genre: </label>
					<input class="center" type='text' name='genre_field' id='genre_field' />
				</div>
				<div class="form__line">
					<label class="label_for-center" for='imageURL_field'>Image URL: </label>
					<input class="center" type='text' name='imageURL_field' id='imageURL_field' />
				</div>
				<div class="form__line">
					<label class="label_for-center" for='imageURL_field'></label>
					<input class="button" type='submit' name='add_book' value='Add' />
				</div>
			</ul>
		</form>
	</div>

	<?php
	$items;
	$cnt = 0;
	$index = 0;
	$command = $yhendus->prepare("SELECT bookId, author, title, genre, cost, picture FROM Books");
	$command->bind_result($id, $author, $title, $genre, $cost, $picture);
	$command->execute();
	while ($command->fetch()) {
		$book = array($id, $author, $title, $genre, $cost);
		$items[$index] = $book;
		$cnt += 1;
		$index += 1;
	}
	if ($cnt > 0) {
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

	<?php include('html-end.php');