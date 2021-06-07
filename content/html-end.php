</main>
<?php
    include('include/full-navbar.php');
    include('include/footer.php');
?>
<!-- As we use sessions in the project, we'll need to notify the user about the use of cookies.
A variable will be stored in the browser's localstorage to prevent the user from receiving the notification again -->
<script>
(function() {
	if (!localStorage.getItem('cookieconsent')) {
		document.body.innerHTML += '\
		<div class="cookieconsent" style="position:fixed;padding:20px;left:0;bottom:0;background-color:rgba(121, 133, 14, 0.850);color:antiquewhite;text-align:center;width:100%;z-index:99999; font-family:Source Sans Pro,sans-serif;font-weight: 300;">\
         We use cookies to ensure the smooth and proper operation of the site. By using the site, you consent to their use. \
			<a href="#" style="color:rgba(121, 133, 14); background-color:#faecd2;display: inline-block;padding:14px 16px; text-align:center">Understood</a>\
		</div>\
		';
		document.querySelector('.cookieconsent a').onclick = function(e) {
			e.preventDefault();
			document.querySelector('.cookieconsent').style.display = 'none';
			localStorage.setItem('cookieconsent', true);
		};
	}
})();
</script>
</body>
</html>