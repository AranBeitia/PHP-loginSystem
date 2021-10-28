<?php
require_once('./modules/validate.php');
	require "head.php";
	checkSession();
	$userEmail = $_SESSION['email'];
	$arrayEmail = explode('@', $userEmail);
	$user = $arrayEmail[0];
?>
<header class="bg-white shadow">
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
			<button 
					type="submit"
					name="logout"
					class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
					Logout
					</button>
			</form>
		</div>
	</nav>
</header>
