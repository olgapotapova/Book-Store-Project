<?php 
    $title = "Fashion Book"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
	
<main>

    <div class="form1">
	    <form action="" method="post" id="form1">
		    <div class="field">
                <input type="text" name="search" id="search" class="border"  placeholder="   Search...">
			    <input type="hidden" name="product" value="<?= basename(__FILE__, "product.php")?>">
		    </div>
	    </form>
    </div>
	
	<form action="" method="post" id="form2" class="form2">
        <div class="container_form2">
		    <div class="holder"><div class="child_form2"><img src="style/pildid/book1.jpg" style="width: 25vw; height: auto;"></div></div>
		    <div class="holder"><div class="child_form2"><img src="style/pildid/book2.jpg" style="width: 25vw; height: auto;"></div></div>
            <div class="holder"><div class="child_form2"><img src="style/pildid/book3.jpg" style="width: 25vw; height: auto;"></div></div>
        </div>
        <div class="container_shop">
            <dt><input type="submit" class="submit" name="shop" value="Shop Now"/></dt>
        </div>
	</form>
	
    <h4>The Last Products</h4>
    <div class="container_last_products">
        <div class="holder">
	        <div class="child_last_products">
                <img src="style/pildid/book1.jpg" style="width: 40vw; height: auto;">
            </div>
            <div class="text_img">
			    <p>Product Name</p>
                <p>$300</p>
            </div>
        </div>
        <div class="holder">
            <div class="child_last_products">
                <img src="style/pildid/book3.jpg" style="width: 40vw; height: auto;" >
            </div>
            <div class="text_img">
				<p>Product Name</p>
                <p>$300</p>
            </div>
        </div>
    </div>


	
	
<?php
    include('form3.php');
?>

<?php
    include('html-end.php');
?>
