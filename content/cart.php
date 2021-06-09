<script type="text/javascript">
  function togglePic() {
    file_put_contents('./cart.txt', null)
  }
</script>
<?php 
    $title = "Cart"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
<main>
<section>
<?php

require_once('config.php');
$items;
$cnt = 0;
$index = 0;

/*$str = file_get_contents('./cart.txt');
$num = preg_match_all("/[0-9]+/", $str, $matches);*/


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

    $ides=file('./cart.txt');
    foreach($ides as $i){
    

    if (strpos(implode(" ", $book), $i) !== false){

    echo "<div class='cart__container'>";	
    echo "<form action='?page=cart.php' method='post'>";
    echo "<holder><div class='cart__child1'><img name = 'picture' src=$picture ></div></holder>";
    echo "<div class='cart__child2'><br><li><input name='id' id='id' class='hidden' value = '$id' ></input><h4 id = 'tit' name = 'tit'>".  $title ."</h4></li>";
    echo "<li><h6 id = 'auth' name = 'auth'>".  $author ."</h6></li>";
    echo "<li>&#x24; <strong name = 'cost'>".  $cost ."</strong><br><br><br><br><br><br><br><br><br><br><br><br></li>";
    echo "</div>";
    }
    $items[$index] = $book;
    $cnt += 1;
    $index += 1;}

}


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

if(isset($_POST['delete']))
{
    $fh = fopen('./cart.html', 'a');
fwrite($fh, ' ');
fclose($fh);

unlink('../cart.html');
    //fclose(fopen('./cart.txt','w'));
    //file_put_contents('./cart.txt', '');
}

echo "<div class='cart__container'>";
echo "<form onsubmit='togglePic();' action='?page=_main.php' method='post'>";
echo"<input class='delete' type = 'submit' name ='buy' value='Buy' style='height: 30px'>";
echo "</div>";

echo "<div class='cart__container'>";
echo "<form onsubmit='togglePic();' action='?page=_main.php' method='post'>";
echo"<input class='delete' type = 'submit' name ='delete' value='Delete' style='height: 30px'>";
echo "</div>";

?>

</section>
<?php
    include('html-end.php');
?>