<?php
	session_start();

	// if(isset($_POST['mailuid'])) {
	// 	$user = $_POST['mailuid'];
	// 	$_SESSION['mailuid'];
	// 	$url = "portfolio.php?mailuid=".$user;
	// 	header('Location: '.$url);
	// 	exit();
	// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/styles/main.css" />
</head>
<body>
	<header>
		<nav class="header__wrapper">
			<div class="header__nav">
				<a href="#">
					<img src="assets/img/logo.png" alt="logo" class="logo">
				</a>
				<ul class="header__list">
					<li><a href="index.php">Home</a></li>
					<li><a href="portfolio.php">Portfolio</a></li>
					<li><a href="#">About me</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
			<div class="header__form-wrapper">
				<form action="index.php" method="post">
					<input type="text" name="mailuid" placeholder="Username/E-mail...">
					<input type="password" name="pwd" placeholder="Password...">
					<button type="submit" name="login-submit">Login</button>
				</form>
				<p>Welcome <?php echo $user?></p>
				<a href="signup.php">Signup</a>
				<form action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
				</form>
			</div>
		</nav>
	</header>
