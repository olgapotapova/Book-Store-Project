<?php 
    $title = "Cart"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
<main>
<section>
<?php
    session_start();
    echo $_SESSION['picture'];
    echo $_SESSION['title'];
    echo $_SESSION['author'];
    echo $_SESSION['cost'];
?>
</section>
<?php
    include('html-end.php');
?>