<?php 
    $title = "Cart"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
<main>
<section>
<?php
$data = " ";
$id = $_REQUEST['id'];
$id = htmlspecialchars($id);
$id = urldecode($id);
$id = trim($id);
$cart_file = fopen('./cart.txt', 'a');
fwrite($cart_file, $id);
fwrite($cart_file, $data);
fclose($cart_file);
$items;
$cnt = 0;
$index = 0;
$command = $yhendus->prepare("SELECT bookId, author, title, cost, genre, picture FROM Books WHERE bookId like ?");// LIKE %search%
if (!$command) {
    die("Connection failed: " . mysqli_connect_error());
}
$command->bind_param("s", $_REQUEST["id"]);
$command->bind_result($id, $author, $title, $cost, $genre, $picture);
$command->execute();
while ($command->fetch()) {
    $book = array($id, $picture, $title, $author, $cost);
    echo "<div class='cart__container'>";	
    echo "<form action='?page=cart.php' method='post'>";
    echo "<holder><div class='cart__child1'><img src=$picture ></div></holder>";
    echo "<div class='cart__child2'><div name='id' id='id'></div><br><li><h4>". $title ."</h4></li>";
    echo "<li><h6>". $author ."</h6></li>";
    echo "<li>&#x24; <strong>". $cost ."</strong><input type='number' id='tentacles' name='tentacles' min='1' max='10' placeholder=' 1 pcs'></li>";
    echo "</form>";
    echo "</div>";
    $items[$index] = $book;
    $cnt += 1;
    $index += 1;
}

$items=file('./cart.txt');
// To check the number of lines
//echo count($ides).'<br>';
$cnt = 0;
$index = 0;
foreach($items as $id)
{
   echo $id.'<br>';

$command = $yhendus->prepare("SELECT bookId, author, title, cost, genre, picture FROM Books WHERE bookId like ?");// LIKE %search%
if (!$command) {
    die("Connection failed: " . mysqli_connect_error());
}
$command->bind_param("s", $_REQUEST["id"]);
$command->bind_result($id, $author, $title, $cost, $genre, $picture);
$command->execute();



while ($command->fetch()) {
    $book = array($id, $title, $author, $cost);
    $items[$index] = $book;
    $cnt += 1;
    $index += 1;
}

}
if ($cnt > 0) {
    echo "<table>";
    echo "<th>Id</th>";
    echo "<th>Title</th>";
    echo "<th>Author</th>";
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


/*$items[$index] = $book;
$cnt += 1;
$index += 1;}

}*/

    //session_start();
    /*echo "<div class='cart__container'>";	
    echo "<form action='?page=cart.php' method='post'>";
    echo "<holder><div class='cart__child1'><img  src='$_SESSION[picture]' name = 'picture' ></div></holder>";
    echo "<div class='cart__child2'><br><li><h4 name = 'title'>". $_SESSION['title'] ."</h4></li>";
    echo "<li><h6 name = 'author'>". $_SESSION['author'] ."</h6></li>";
    echo "<li>&#x24; <strong name = 'cost'>". $_SESSION['cost'] ."</strong><input type='number' id='tentacles' name='tentacles' min='1' max='10' placeholder=' 1 pcs'></li>";
    echo "</form>";
    echo "</div>";
    var_dump($_SESSION);
    die();*/
?>
</section>
<?php
    include('html-end.php');
?>