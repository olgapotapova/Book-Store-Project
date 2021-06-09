<?php 
    $title = "Cart"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
<main>
<section>
<?php

/*$items = fopen( './cart.txt' ,"r");
while ($line = fgets ($items))
{*/


/*$ides=file('./cart.txt');
var_dump($ides);
$ides = file_get_contents('./cart.txt');*/

//$ides = implode(", ", $ides);
//$ides = explode(',', file_get_contents('./cart.txt'));
// To check the number of lines
//echo count($ides).'<br>';
//foreach($ides as $id){
//{
/*    $items;
$cnt = 0;
$index = 0;
    $str = file_get_contents('./cart.txt');
    $num = preg_match_all("/[0-9]+/", $str, $matches);
    var_dump($num);
    $count = count($ides);

  for ($i = 0; $i < $count; $i++) {
 

$command = $yhendus->prepare("SELECT bookId, author, title, cost, genre, picture FROM Books WHERE bookId IN( . $num . )");//='" . $id . "'");   LIKE %search%
if (!$command) {
    die("Connection failed: " . mysqli_connect_error());
    echo $yhendus -> error;
}
$command->bind_param("s", $_REQUEST["id"]);

echo $yhendus -> error;
$command->bind_result($id, $author, $title, $cost, $genre, $picture);
$command->execute();
while ($command->fetch()) {
    $book = array($id, $author, $title, $genre, $cost);
   

}

if ($cnt > 0) {
    echo "<table class='table1'>";
    echo "<th>ID</th>";
    echo "<th>Title</th>";
    echo "<th>Author</th>";
    echo "<th>Genre</th>";
    echo "<th>Price</th>";
    echo "<th>Button</th>";
    foreach ($items as $item) {
        echo "<tr>";
    
        foreach ($item as $subitem) {
            echo "<td>$subitem</td>";
        }
    
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

$items[$index] = $book;
$cnt += 1;
$index += 1;

}*/








$data = ", ";
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