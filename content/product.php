<?php 
    $title = "Placeholder: Product name goes here"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
<main>
<?php
require_once('config.php');
$kask=$yhendus->prepare("Select bookId, author, title, cost, genre, picture FROM Books");
//$kask->bind_param("i", $_REQUEST["id"]);
//i - integer, s - string, d - double
$kask->bind_result($id, $author, $title, $cost, $genre, $picture);
$kask->execute();
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