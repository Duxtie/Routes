<?php
	require_once 'function.php';
	// if (isset($_POST['firstName'], $_POST['lastName'], $_POST['phone'], $_POST['email'], $_POST['address'], $_POST['country'], $_POST['state'], $_POST['town'], $_POST['description'])){
	if (isset($_SERVER['REQUEST_METHOD']) && 'POST') {

		// Initalize an error array.
		$errors = array();
		if (empty($_POST['firstName'])) {
			$errors[] = '<p class="error">You did not enter your Firstname!</p>';
		} else {
			$firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
		}
		if (empty($_POST['lastName'])) {
			$errors[] = '<p class="error">You did not enter your Lastname!</p>';
		} else {
			$lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
		}
		if (empty($_POST['phone'])) {
			$errors[] = '<p class="error">You did not enter your Phone number!</p>';
		} else {
			$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
		}
		if (empty($_POST['email'])) {
			$errors[] = '<p class="error">You did not enter your Email!</p>';
		} else {
			$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	    	$email = filter_var($email, FILTER_VALIDATE_EMAIL);
		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		        // Not a valid email
		        $errors[] = '<p class="error">The email address you entered is not valid</p>';
		    }
		}
		if (empty($_POST['address'])) {
			$errors[] = '<p class="error">You did not enter an Address!</p>';
		} else {
			$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
		}
		if (empty($_POST['country'])) {
			$errors[] = '<p class="error">You did not enter a Country</p>';
		} else {
			$country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING); 
		}
		if (empty($_POST['state'])) {
			$errors[] = '<p class="error">You did not enter a State!</p>';
		} else {
			$state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
		}
		if (empty($_POST['state'])) {
			$errors[] = '<p class="error">You did not enter a Town!</p>';
		} else {
			$town = filter_input(INPUT_POST, 'town', FILTER_SANITIZE_STRING);
		}
		if (empty($_POST['description'])) {
			$errors[] = '<p class="error">You did not enter a Description!</p>';
		} else {
			$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
		}
		if (empty($errors)) {
			echo 'Success';
		} else {
			echo 'ERROR!';
			echo '<p>' . mysqli_error($mysqli) . '</p>';
		}
	}
?>