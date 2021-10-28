<?php
	require "head.php";
	session_start();
	$userEmail = $_SESSION['email'];
	$arrayEmail = explode('@', $userEmail);
	$user = $arrayEmail[0];
?>
<header>
	<nav class="header__wrapper">
		<div class="header__nav">
			<a href="#">
				<img src="assets/img/logo.png" alt="logo" class="logo">
			</a>
			<ul class="header__list">
				<li><a href="home.php">Home</a></li>
				<li><a href="portfolio.php">Portfolio</a></li>
				<li><a href="#">About me</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<div class="header__form-wrapper">
			<p>Welcome <?= $user?></p>
			<form action="modules/logout.php" method="post">
				<button type="submit" name="logout-submit">Logout</button>
			</form>
		</div>
	</nav>
</header>
