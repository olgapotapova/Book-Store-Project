<?php 
    $title = "Product catalog"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
<main>
    <div class="box">
<h1>The book is the purest essence of the human soul</h1>
<hr size="1.8px" width="10%" color="DarkKhaki">
	<form action="" method="post" id="form1">
		<div class="field">
			<input class="search" type="text" name="search" placeholder=" &#x1F50E;&#xFE0E; Search...">
			<input type="hidden" name="product" value="<?=basename(__FILE__, "product.php")?>">
			<input class="button"  type="submit" name="sub" value="Submit" />
		</div>
	</form>
</div>
	<h1>Featured Categories</h1> 
<div class="container_cat">
<div class="child_cat"><img src="../pildid/" >
<div class="text_img">
    <p>CATEGORY</p>
</div>
</div>
<div class="child_cat"><img src="../pildid/" >
<div class="text_img">
    <p>CATEGORY</p>
</div>
</div>
<div class="child_cat"><img src="../pildid/" >
<div class="text_img">
    <p>CATEGORY</p>
</div>
</div>
<div class="child_cat"><img src="../pildid/" ></div>
</div>
<table>
<td class="logo1">
    <img  src="style/pildid/logo.png" alt="logo" style="width: 140px; height: 140px;">
</td>
<td class="news">
    <?php
    include('form3.php');
    ?>
</td>
</table>

<div class="container_books">
<div class="child_books"><a href="sample.html"><img src="../pildid/" width="50" height="50" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Product Name</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$300</p>
                </div>
            </div>

<div class="child_books"><a href="sample.html"><img src="../pildid/" width="50" height="50" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Product Name</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$300</p>
                </div>
            </div>
<div class="child_books"><a href="sample.html"><img src="../pildid/" width="50" height="50" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Product Name</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$300</p>
                </div>
            </div>
<div class="child_books"><a href="sample.html"><img src="../pildid/" width="50" height="50" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Product Name</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$300</p>
                </div>
            </div>
<div class="child_books"><a href="sample.html"><img src="../pildid/" width="50" height="50" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Product Name</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$300</p>
                </div>
            </div>
<div class="child_books"><a href="sample.html"><img src="../pildid/" width="50" height="50" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Product Name</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$300</p>
                </div>
            </div>
<div>

<?php
    include('html-end.php');
?>