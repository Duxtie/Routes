<?php
	require_once 'function.php';

	// Start session.
	sec_session_start();

	// Unset all session values
	$_SESSION = array();

	// Get session parameters
	$params = session_get_cookie_params();

	// Delete the actual cookies.
	setcookie(session_name(),
			  '',
			  $params["path"],
			  $params["domain"],
			  $params["secure"],
			  $params["httponly"]);

	// Destroy session
	session_destroy();
	header('Location: ../signin.php');
?>