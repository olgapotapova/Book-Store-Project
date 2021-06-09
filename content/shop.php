<?php 
    $title = "Product catalog"; //Title for the page.  Used in the <title> tag
    include('html-begin.php');
?>
<main>
<section>
    <div class="box">
<h5>The book is the purest essence of the human soul</h5>
<hr size="1.8px" width="15%" color="DarkKhaki">
	<form action='?page=product.php' method="post" id="form1">
		<div class="field">
			<input class="search" type="text" name="search" placeholder=" &#x1F50E;&#xFE0E; Search...">
			<input type="hidden" name="product" value="<?=basename(__FILE__, "product.php")?>">
			<input class="button"  type="submit" name="sub" value="Submit" />
		</div>
	</form>
</div>
	<h5>Featured Categories</h5> 
<div class="container_cat">
    <div class="child_cat"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeEVWEQnPLUXcS7Ec2phPOiL0rISPXFBT2vw&usqp=CAU" style="width: 25vw; height: auto;" >
        <div class="text_img">
        <p>KIDS STORY</p>
        </div>
    </div>
    <div class="child_cat"><img src="https://99px.ru/sstorage/56/2018/08/mid_303756_795732.jpg" style="width: 25vw; height: auto;" >
        <div class="text_img">
        <p>HISTORY</p>
        </div>
    </div>
    <div class="child_cat"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJ9Uf_KdoHAS7vzQMnZtuCeZYKuADeBr5Gcw&usqp=CAU" style="width: 25vw; height: auto;" >
        <div class="text_img">
        <p>SCIENCE FICTION</p>
        </div>
    </div>
    <div class="child_cat"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr2BeE0TOtBoBvtPXU3W0OgF8tHCGT6xSc6Q&usqp=CAU" style="width: 25vw; height: auto;" >
        <div class="text_img">
        <p>MEMOIRS</p>
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
<div class="child_books"><a href="https://ru.wikipedia.org/wiki/%D0%A4%D0%B0%D0%BD%D1%82%D0%B0%D1%81%D1%82%D0%B8%D0%BA%D0%B0"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Byzantinischer_Mosaizist_des_5._Jahrhunderts_002.jpg/250px-Byzantinischer_Mosaizist_des_5._Jahrhunderts_002.jpg" width="15vw" height="auto" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Viki</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$12</p>
                </div>
            </div>

<div class="child_books"><a href="https://way2day.com/article/filmy-fantastika.html"><img src="https://way2day.com/wp-content/uploads/2017/12/Svyaz-1.jpg" width="15vw" height="auto" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Coher</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$35</p>
                </div>
            </div>
<div class="child_books"><a href="https://habr.com/ru/post/555988/"><img src="https://habrastorage.org/getpro/habr/upload_files/176/775/b2a/176775b2a73b083fdfb11703c730bbda.jpg" width="15vw" height="auto" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Prod</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$15</p>
                </div>
            </div>
<div class="child_books"><a href="http://wp.wiki-wiki.ru/wp/index.php/%D0%A4%D0%B0%D0%BD%D1%82%D0%B0%D1%81%D1%82%D0%B8%D0%BA%D0%B0"><img src="https://upload.wikimedia.org/wikipedia/commons/9/92/Stradano_Inferno_Canto_06.jpg" width="15vw" height="auto" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Story</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$40</p>
                </div>
            </div>
<div class="child_books"><a href="https://ru.pngtree.com/freebackground/science-fiction-green-planet-background-material_1212669.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfYz-XHiJk1waC-PVnjzA4Aap47bjrZeFh_w&usqp=CAU" width="15vw" height="auto" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Green</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$30</p>
                </div>
            </div>
<div class="child_books"><a href="https://saintbasil.ru/news-193778-10-fantasticheskih-filmov-kotorye-my-gdem-bolshe-vsego-v-2020-godu-s-nadegdoj-v-buduschee.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyXKM9e-Y5ls6ExkQTmm27PpIc2ROVsqxhhg&usqp=CAU" width="15vw" height="auto" alt="foto"></a></div>
<div class="child_books">
				<div class="booktext_img"><p>Daimon</p>
                <p>&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <p>$60</p>
                </div>
            </div>
<div>
</section>
<?php
    include('html-end.php');
?>