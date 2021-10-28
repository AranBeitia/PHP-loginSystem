<?php
	require "head.php";
?>

<main class="main__wrapper">
	<section class="main__content">
		<h1>Welcome</h1>
		<form action="./modules/login.php" method="POST" class="form__wrapper">
			<input type="text" name="email" placeholder="Email">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" name="login">Login</button>
		</form>
	</section>
</main>