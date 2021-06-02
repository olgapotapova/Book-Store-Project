<?php 
    $title = "Product catalog"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
<main>
    <div class="box">
<h5>The book is the purest essence of the human soul</h5>
<hr size="1.8px" width="15%" color="DarkKhaki">
	<form action="" method="post" id="form1">
		<div class="field">
			<input class="search" type="text" name="search" placeholder=" &#x1F50E;&#xFE0E; Search...">
			<input type="hidden" name="product" value="<?=basename(__FILE__, "product.php")?>">
			<input class="button"  type="submit" name="sub" value="Submit" />
		</div>
	</form>
</div>
	<h5>Featured Categories</h5> 
<div class="container_cat">
    <div class="child_cat"><img src="style/pildid/book1.jpg" style="width: 25vw; height: auto;" >
        <div class="text_img">
        <p>CATEGORY</p>
        </div>
    </div>
    <div class="child_cat"><img src="style/pildid/book1.jpg" style="width: 25vw; height: auto;" >
        <div class="text_img">
        <p>CATEGORY</p>
        </div>
    </div>
    <div class="child_cat"><img src="style/pildid/book1.jpg" style="width: 25vw; height: auto;" >
        <div class="text_img">
        <p>CATEGORY</p>
        </div>
    </div>
    <div class="child_cat"><img src="../pildid/"style="width: 25vw; height: auto;" >
        <div class="text_img">
        <p class="cat4"></p>
        </div>
    </div>
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
<div class="child_books"><a href="sample.html"><img src="style/pildid/book1.jpg" width="15vw" height="auto" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Product Name</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$300</p>
                </div>
            </div>

<div class="child_books"><a href="sample.html"><img src="style/pildid/book1.jpg" width="15vw" height="auto" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Product Name</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$300</p>
                </div>
            </div>
<div class="child_books"><a href="sample.html"><img src="style/pildid/book1.jpg" width="15vw" height="auto" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Product Name</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$300</p>
                </div>
            </div>
<div class="child_books"><a href="sample.html"><img src="style/pildid/book1.jpg" width="15vw" height="auto" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Product Name</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$300</p>
                </div>
            </div>
<div class="child_books"><a href="sample.html"><img src="style/pildid/book1.jpg" width="15vw" height="auto" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Product Name</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$300</p>
                </div>
            </div>
<div class="child_books"><a href="sample.html"><img src="style/pildid/book1.jpg" width="15vw" height="auto" alt="foto"></a></div>
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