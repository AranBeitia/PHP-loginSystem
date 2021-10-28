
<?php
	$_SESSION['username'] = "aran kitty";

	if (!isset($_SESSION['username'])) {
		echo "You are not logged in!";
	} else {
		echo "You are logged in!";
	}
?>
<footer>
	<p>Hello <?php echo $_SESSION['username']?></p>
</footer>
</body>
</html>