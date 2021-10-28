<?php
	require "header.php";
?>

<main class="main__wrapper">
<section class="main__content">
	<h1>Sign up</h1>
	<form action="includes/signup.inc.php" method="post" class="form__wrapper">
		<input type="text" name="uid" placeholder="Username">
		<input type="text" name="mail" placeholder="Email">
		<input type="password" name="pwd" placeholder="Password">
		<input type="password" name="pwd-repeat" placeholder="Repeat password">
		<button type="submit" name="signup-submit">Signup</button>
	</form>
</section>
</main>

<?php
	require "footer.php";
?>