<?php
require_once 'db_connect.php';
require_once 'function.php';

sec_session_start(); // Custom secure way of starting a PHP session.
/*
if (isset($_POST['email']) && isset($_POST['p'])) {

}
*/
if (isset($_POST['email'], $_POST['pwd'])) {
	$inputEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$inputEmail = filter_var($inputEmail, FILTER_VALIDATE_EMAIL);
	$password = $_POST['pwd']; 

	

	if (login($inputEmail, $password, $mysqli) == true) {
		// Login success!
		$url = ($_SESSION['user_level'] === 1) ? '../dashboard/' : '../account/';
		header('Location: ' . $url);
		exit;
		// header('Location: ../account/');
	} else {
		// Login failed!
		header('Location: ../signin.php');
		exit;
	}
} else {
	// The correct POST vvariable were not sent to this page.
	echo 'Invalid Request';
}
?>
