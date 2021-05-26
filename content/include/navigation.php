<nav>
    <?php if($title == "Fashion Book") { ?>
        <ul class="horizontal_main">
            <li class="for_media"></li>
            <li><a href="?page=_main.php">Home</a></li>
            <li><div class="vl"></div></li>
            <li><a href="?page=shop.php">Shop</a></li>
            <li><div class="vl"></div></li>
            <li><a href="?page=admin.php">Admin</a></li>
            <li></li>
        </ul>
    <?php } else { ?>
        <ul class="horizontal_page">
            <li><a href="?page=_main.php">Home</a></li>
            <li><div class="vl"></div></li>
            <li><a href="?page=shop.php">Shop</a></li>
            <li><div class="vl"></div></li>
            <li><a href="?page=admin.php">Admin</a></li>   
            <li style="padding-left: 15px;">
                <h2>
                    <i class="fa fa-shopping-cart" aria-hidden="true" style="padding-left: 10px;"></i>
                    <a href="?page=cart.php" style="color: antiquewhite;"> Your cart</a>
                </h2>
            </li>
        </ul>
    <?php }  ?>  	
</nav>

