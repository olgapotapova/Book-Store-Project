<?php if($title == "Fashion Book") { ?>
	
	
	<form action="" method="post" id="form3" class="form3">
	<h4>Newsletter</h4>
	<div class="container_form3">
		<p>Subscribe to the newsletter:</p>
		<div class="child_form3"><input class="input_email" type="text" name="email" placeholder="Email Address"/></div>
		<div class="child_form3"><input type="submit" name="sisestusnupp" value="Subscribe" /></div>
	</div>
	</form>

	<?php } else { ?>
		<form action="" method="post" id="form3" class="form">
	<h4>Newsletter</h4>
	<div class="news_form">
		<input class="src" type="text" name="email" placeholder="Email Address"/>
		<input class="btn" type="submit" name="sisestusnupp" value="Subscribe" />
	</div>
	</form>
    <?php
       }
    ?>
