<?php 
	$title = "Administration"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
	
	if(isSet($_REQUEST['add_book']))
	{
		$author = $_REQUEST["author_field"];
		$booktitle = $_REQUEST["title_field"];
		$price = $_REQUEST["price_field"];
		$genre = $_REQUEST["genre_field"];
		$imageURL = $_REQUEST["imageURL_field"];
		$kask = $dbConnection -> prepare("INSERT INTO books (bookAuthor, bookTitle, bookCost, bookGenre, bookPicture) 
		VALUES (?,?,?,?,?)");
		echo $dbConnection -> error;
		$kask-> bind_param("ssdss", $author, $booktitle, $price, $genre, $imageURL);
		$kask-> execute();
	}

	if (isSet($_REQUEST["remove_book"]))
	{
		$command = $dbConnection -> prepare("DELETE FROM books WHERE bookId = ?");
		$command -> bind_param("i", $_REQUEST["id"]);
		$command -> execute();
		// header("Location: $_SERVER[PHP_SELF]?page=admin");
		$dbConnection -> close();
	}
?>
<main>
	<!-- <form action='?page=admin.php' method='post'> -->
	<div class="container_post">
	<form action='?page=admin.php' method="post">
	<ul>
		<div class="form__line">
        <label class="label_for-center" for='author_field'>Author: </label>
        <input class="center" type='text' name='author_field' id='author_field'/>
		</div>
		<div class="form__line">
		<label class="label_for-center" for='title_field'>Title: </label>
		<input class="center" type='text' name='title_field' id='title_field'/>
		</div>
		<div class="form__line">
		<label class="label_for-center" for='price_field'>Price: </label>
		<input class="center" type='text' name='price_field' id='price_field'/>
		</div>
		<div class="form__line">
		<label class="label_for-center" for='genre_field'>Genre: </label>
		<input class="center" type='text' name='genre_field' id='genre_field'/>
		</div>
		<div class="form__line">
		<label class="label_for-center" for=imageURL_field'>Image URL: </label>
		<input class="center" type='text' name='imageURL_field' id='imageURL_field'/>
		</div>
		<div class="form__line">
        <input class="center" type='submit' name='add_book' value='Add'/>
		</div>
	</ul>
    </form>
	</div>
	<?php

	?>
	<?php
		$items;
		$cnt = 0;
		$index = 0; 
		$command = $dbConnection -> prepare("SELECT bookId, bookAuthor, bookTitle, bookCost, bookGenre, bookPicture FROM books");
		$command -> bind_result($id, $author, $title, $price, $genre, $picture);
		$command -> execute();
		while($command -> fetch())
		{
			$book = array($id, $author, $title, $price, $genre);
			$items[$index] = $book;
			$cnt += 1;
			$index += 1;
		}
		if ($cnt > 0)
		{
			echo "<table>";
			echo "<th></th>";
			echo "<th>Title</th>";
			echo "<th>Author</th>";
			echo "<th>Genre</th>";
			echo "<th>Price</th>";
			foreach ($items as $item)
			{
				echo "<tr>";
				
				foreach($item as $subitem)
				{
					echo "<td>$subitem</td>";
				}
				//Delete button
				echo $item[0];
				echo "<td><form action='?page=admin.php' method='post'>
					<input type = 'hidden' name = 'id' value = '$item[0]'/>
					<input type = 'submit' name = 'remove_book' value = 'Remove'/>
					</form></td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "There are currently no books in the database.";
		}
	?>


<?php include('html-end.php');
