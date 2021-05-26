<?php 
    $title = "Administration"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
	if(!empty($_REQUEST["add_book"]))
    {
        $command = $yhendus-> prepare("INSERT INTO books(author, title, price, genre) VALUES (?, ?, ?, ?)");
        $command -> bind_param("ssis", $_REQUEST["author_field"], $_REQUEST["title_field"], $_REQUEST["price_field"], $_REQUEST["genre_field"]);
        $command -> execute();
        header("Location: $_SERVER[PHP_SELF]?page=admin");
        $yhendus-> close();
    }
	if (!empty($_REQUEST["remove_book"]))
	{
		$command = $yhendus -> prepare("DELETE FROM books WHERE id = ?");
		$command -> bind_param("i", $_REQUEST["id"]);
		$yhendus -> execute();
		header("Location: $_SERVER[PHP_SELF]?page=admin");
        $yhendus-> close(); 
	}
	$command = $yhendus -> prepare("SELECT id, author, title, price, genre FROM books");
	$command -> bind_result($id, $author, $title, $price, $genre);
	$command -> execute();
	$yhendus -> close();

?>
<main>
	<form action='?'>
        Author:
        <input type='text' name="author_field">
		<br>
		Title:
		<input type='text' name="title_field">
		<br>
		Price:
		<input type='text' name="price_field">
		<br>
		Genre:
		<input type='text' name="genre_field">
		<br>
        <input type='submit' value='add_book'>
    </form>
	

<?php
    include('html-end.php');
?>