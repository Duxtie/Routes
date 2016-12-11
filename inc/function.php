<?php
	require_once 'db_connect.php';
	
	function sec_session_start() {	
		$session_name = 'sec_session_id'; // Set a custom session name
		session_name($session_name);
		session_start(); 				// Start the PHP session
	}


	// Process Login.
	function login($inputEmail, $password, $mysqli) {
		// Using prepared ststement means that SQL injection is not possible.
		if ($stmt = $mysqli->prepare("SELECT id, email, password, salt, user_level FROM users WHERE email = ? LIMIT 1")) {
			$stmt->bind_param('s', $inputEmail); // Bind "$email" to parameter.
			$stmt->execute();	// Execute the prepared query.
			$stmt->store_result();

			// Get variable from result.
			$stmt->bind_result($user_id, $email, $db_password, $salt, $user_level);
			$stmt->fetch();

			// Hash the password with the unique salt.
			$password = hash('sha512', $password . $salt);
			if ($stmt->num_rows == 1) {
				// If the user exists, check if the account is locked.
				// from too many login attempts.

				if (checkbrute($user_id, $mysqli) == true) {
					// Account is locked.
					// Send an email to use saying their account is locked.
					return false;
				} else {
					// Check if the password in the database matchs
					// the password the user submitted.
					if($db_password == $password) {
						// Password is correct!
						// Get the user-agent string of the user.
						$user_browser = $_SERVER['HTTP_USER_AGENT'];
						// XSS protection as I might print this value.
						$user_id = preg_replace("/[^0-9]+/", "", $user_id);
						$_SESSION['user_id'] = $user_id;
						// XSS protection as I might print this value
						//$username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);

						$_SESSION['email'] = $email;
						$_SESSION['user_level'] = $user_level;
						$_SESSION['login_string'] = hash('sha512', $password . $user_browser);
						// Login Successful.
						return true;
					} else {
						// Password is not correct
						// We record this attempt in the database
						// $now = time();
						$ip_address = $_SERVER['REMOTE_ADDR'];
						$user_browser = $_SERVER['HTTP_USER_AGENT'];
						$mysqli->query("INSERT INTO login_attempts(user_id, ip_address, time, browser)
										VALUE ('$user_id', '$ip_address', CURRENT_TIMESTAMP, '$user_browser')");
						return false;
					}
				}
			} else {
				// No user exists
				return false;
			}
		}
	}


	// Trigger email confirmation after five login attempts (guide against brute force).
	function checkbrute($user_id, $mysqli) {
		// Get timestamp of current time.
		$now = time();

		// All login attempts are from the past 2 hours.
		$valid_attempts = $now - (2 * 60 * 60);

		if ($stmt = $mysqli->prepare("SELECT time
										FROM login_attempts
										WHERE user_id = ?
										AND time > '$valid_attempts'")) {
			$stmt->bind_param('i', $user_id);

			// Execute the prepared query.
			$stmt->execute();
			$stmt->store_result();

			// If there have been more than 5 failed login attempts
			if ($stmt->num_rows > 5) {
				return true;
			} else {
				return false;
			}
		}
	}


	// Check login status
	function login_check($mysqli){
		// Check if all session variables are set.
		if (isset($_SESSION['user_id'],
				  $_SESSION['email'],
				  $_SESSION['user_level'],
				  $_SESSION['login_string'])) {

			// Assign values to variables
			$user_id = $_SESSION['user_id'];
			$email = $_SESSION['email'];
			$user_level = $_SESSION['user_level'];
			$login_string = $_SESSION['login_string'];

			// Get the user-agent string of the user.
			$user_browser = $_SERVER['HTTP_USER_AGENT'];

			if ($stmt = $mysqli->prepare("SELECT password FROM users WHERE id = ? LIMIT 1")) {
				// Bind "$user_id" to parameter.
				$stmt->bind_param('i', $user_id);
				$stmt->execute(); // Execute the prepared query.
				$stmt->store_result();

				if ($stmt->num_rows == 1){
					// If the user exists get variable from result.
					$stmt->bind_result($password);
					$stmt->fetch();
					$login_ckeck = hash('sha512', $password . $user_browser);

					if ($login_ckeck == $login_string) {
						// Logged In!!!
						return true;
					} else {
						// Not logged in
						return false;
					}
				} else {
					// Not logged inn
					return false;
				}
			} else {
					// Not logged in
					return false;
			}
		} else {
			// Not logged in
			return false;
		}
	}

	// Sanitize URL from PHP_SELF
	function esc_url($url) {

		if ('' == $url) {
			return $url;
		}

		$url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\xff]|i', '', $url);

		$strip = array('%0d', '%0a', '%0D', '%0A');
		$url = (string) $url;

		$count = 1;
		while ($count) {
			$url = str_replace($strip, '', $url, $count);
		}

		$url = str_replace(';//', '://', $url);

		$url = htmlentities($url);

		$url = str_replace('&amp;', '&#038;', $url);
		$url = str_replace("'", '&#038;', $url);

		if ($url[0] !== '/') {
			// I am only interested in relative links from $_SERVER['PHP_SELF']
			return '';
		} else {
			return $url;
		}
	}

	// Redirect
	function redirect_to($location= NULL){
		if($location != NULL){
			header("Location: {$location}");
			exit;
		}
	}

	// Profile image.
	function profile_image($img){
		if (!isset($img['src'])) {$img['src'] = '../img/user_avatar.png'; }
		if (!isset($img['alt'])) {$img['alt'] = 'User'; }
		if (!isset($img['height'])) {$img['height'] = '200px'; }
		if (!isset($img['width'])) {$img['width'] = '200px'; }
	}


	function profile_image2($img){
		$default = array('src' => 'img/user_avatar.png',
						 'alt' => 'User',
						 'height' => '100px',
						 'width' => '70px'
		);
	}


	// FOR REVEW

	//Select states
	function state_select ($mysqli) {
	    //$query = "SELECT name FROM states";

	    if ($stmt = $mysqli->prepare("SELECT name FROM states")) {

	        /* execute statement */
	        $stmt->execute();

	        /* bind result variables */
	        $stmt->bind_result($name);

	        $value = strtolower($name);

	        /* fetch values */
	        echo "<select class='txt fill-width txt-name' name='stateOfOrigin'>";
	        echo "<option selected='selected' value='' >Select a State...</option>";
	        while ($stmt->fetch()) {
	            echo "<option value='" . strtolower(str_replace(' ', '-', $name)) . "'>$name</option> \n";
	        }
	        echo "</select>";

	        /* close statement */
	        $stmt->close();
	    } else {
	        echo "Hello!";
	    }

	    /* close connection */
	    $mysqli->close();
	}

	// Update *NOT yet working 
	function update_users($mysqli) {
		$query = "UPDATE users 
					SET (firstName, lastName, phone, email, address, country, state, town, description) = (?, ?, ?, ?, ?, ?, ?, ?, ?)
					WHERE email = $email
					LIMIT 1";
		if ($stmt = $mysqli->prepare($query)) {
			$stmt->bind_param('sssssssss', $firstName, $lastName, $phone, $email, $address, $country, $state, $town, $description);

			// Execute the prepared query
			$stmt->execute();
		}
	}

	// Check number of users.
	function check_num_of_user($mysqli) {

		if ($stmt = $mysqli->prepare("SELECT * FROM users")) {

			// Execute the prepared query.
			$stmt->execute();
			$stmt->store_result();

			// If there have been more than 5 failed login attempts
			/*if ($stmt->num_rows > 0) {
				condition 1
			} else {
				ondition 2;
			}*/
			echo $stmt->num_rows();
		}
	}
	function text_summery($text){
		$text = (strlen($text) > 15) ? substr($text, 0, 15). '...' : $text;
	}
	

	// Check number of users.
	function print_num_of_user($mysqli) {

		if ($stmt = $mysqli->prepare("SELECT id, firstName, lastName, phone, email, reg_date FROM users")) {

			// Execute the prepared query.
			$stmt->execute();
			$stmt->bind_result($id, $firstName, $lastName, $phone, $email, $reg_date);

			// Fetch user details.
			echo '<tbody>';
				while ($stmt->fetch()) {

					$name = $firstName . ' ' . $lastName;
					echo '<tr class="odd gradeX">';
					echo '<td>' . $id . '</td>';
					echo '<td>' . $name . '</td>';
					echo '<td>' . $phone . '</td>';
					echo '<td class="center">' . $email . '</td>';
					echo '<td class="center">' . $reg_date . '</td>';
					echo '<td class="center"><a href="#" title="ha!">View</a>&nbsp;&nbsp;<a href="edit-user.php">Edit</a>&nbsp;&nbsp;&nbsp;<a href="users.php?delete=' . $id . '" onclick="return confirm(\'are you
sure you want to delete this user?\') " >Delete</a></td>';
					echo '</tr>';
				}
			echo '</tbody>';
	        $stmt->close();
		}

		if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
			$user = $_GET['delete'];
				if ($stmt = $mysqli->prepare("DELETE FROM users WHERE id = {$user}")) {
				$stmt->execute();
		        $stmt->close();
		        $success = "Entry deleted successfully";
		    } else {
		    	$error_msg = "Could not delete Entry, try again";
			}
	    }
	}

	function getQuery($string, $userId, $param) {
		switch ($string) {
			case 'getUser':
				$return_query = "SELECT * FROM users";
				break;
			case 'getUserData':
				$return_query = "SELECT $param[id], $param[email] FROM users WHERE id = {$userId}";
				break;
			case 'deleteUser':
				$return_query = "DELETE FROM users WHERE id = {$userId}";
				break;
			case 'getloginAttempts':
				$return_query = "SELECT * FROM login_attempts";
				break;
			case 'deleteloginAttempts':
				$return_query = "DELETE * FROM login_attempts WHERE id = {$userId}";
				break;
			
			default:
				echo "no query";
				break;
		}
		return $return_query;
	}

	function resArray($mysqli, $query) {
		 $result = mysqli_query($mysqli, $query);

		if ($result) {
			echo $query . '<br />';
		} else {
			echo 'Hello!';
		}
			/*
			// Option 1
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				echo $row['email'] . '<br /><br />';
			}
			*/
			// Option 2
			while($row = $result->fetch_array(MYSQLI_BOTH)) {
				echo $row['email'] . '<br />';
			}

		return $result;
	}

	$userId = 9;
	// $param = array('email', 'phone');
	 $param = array(
		"id" => 'id',
		"email" => 'email'
	);
	//resArray($mysqli, getQuery('getUser', $userId, $param));
	 //getSingleObject(resArray(getQuery("getUser", $userid, $param)),"email") ;
	//while($getRow = mysql_fetch_array($result)) {

	//}
?>
