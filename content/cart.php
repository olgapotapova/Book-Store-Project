<?php 
    $title = "Cart"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
<main>
<section>
<?php
    session_start();
    echo "<div class='cart__container'>";	
    echo "<form action='?page=cart.php' method='post'>";
    echo "<holder><div class='cart__child1'><img  src='$_SESSION[picture]' name = 'picture' ></div></holder>";
    echo "<div class='cart__child2'><br><li><h4 name = 'title'>". $_SESSION['title'] ."</h4></li>";
    echo "<li><h6 name = 'author'>". $_SESSION['author'] ."</h6></li>";
    echo "<li>&#x24; <strong name = 'cost'>". $_SESSION['cost'] ."</strong><input type='number' id='tentacles' name='tentacles' min='1' max='10' placeholder=' 1 pcs'></li>";
    echo "</form>";
    echo "</div>";

   /* $data = " ";
    $picture = $_REQUEST['picture'];
    $picture = htmlspecialchars($picture);
    $picture = urldecode($title);
    $picture = trim($picture);
    $title = $_REQUEST['title']; 
    $title = htmlspecialchars($title);
    $title = urldecode($title);
    $title = trim($title);
    $author = $_REQUEST['author'];
    $author = htmlspecialchars($author);
    $author = urldecode($author);
    $author = trim($author);
    $cost = $_REQUEST['cost'];
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
?>
</section>
<?php
    include('html-end.php');
?>