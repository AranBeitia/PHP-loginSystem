<?php
/**
 * Get input form values and redirection to private area
 */
function authUser() {
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	// DB connection
	$emailDB = 'daisy@hola.com';
	$passwordDB = '1234';

	if($passwordDB === $password && $emailDB === $email) {
		$_SESSION['email'] = $email;

		header('Location: ../home.php');
	} else {
		header('Location: ../index.php');
	}
}