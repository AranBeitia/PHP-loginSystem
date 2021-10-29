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

function checkSession () {
	session_start();
	if(!isset($_SESSION['email'])) {
		header('Location: index.php');
	}
}

function destroySession () {
	session_start();
	unset($_SESSION);

	if(ini_get('session.use_cookies')) {
		$params = session_get_cookie_params();
		setcookie(
			session_name(),
			'',
			time() - 42000,
			$params['path'],
			$params['domain'],
			$params['secure'],
			$params['httponly'],
		);
	}

	session_destroy();
	header('Location: ../index.php?logout=true');
}

function registerUser () {
	if(isset($_POST['register'])) {
		//getting the data
		$username = $_POST['username'];
		$password = $_POST['password'];
		$mail = $_POST['email'];
		$country = $_POST['country'];

		if($username!= '' && $password != '' && $mail != '' && $country != ''){
			//SQL connection
			$sql = "INSERT INTO users(username, password, email, country) VALUES('$username', '$password', '$mail',  '$country')";

			//making connection
			include_once('./db.php');

			//making a query
			$qry = mysqli_query($connection, $sql) or die('Database insertion error');

			if($qry) {
				header('Location: ../index.php');
			}
		} else {
			echo "Please fill all the fields";
		}
	}
}