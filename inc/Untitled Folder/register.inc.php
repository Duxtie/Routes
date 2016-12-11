<?php
    require_once 'db_connect.php';
    // require_once 'function.php';
 
$error_msg = "";
$ip_address = $_SERVER["REMOTE_ADDR"];

if (isset($_POST['email'], $_POST['p'], $_POST['firstName'], $_POST['lastName'], $_POST['phone'])) {
    // Sanitize and validate the data passed in
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }
 
    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }
    

    $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);

    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //
 
    $prep_stmt = "SELECT id FROM users WHERE email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
   // check existing email  
    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
 
        if ($stmt->num_rows == 1) {
            // A user with this email address already exists
            $error_msg .= '<p class="error">Email address already exists.</p>';
                        $stmt->close();
                        // header('Location: error.php');
        }
                // $stmt->close();
    } else {
        $error_msg .= '<p class="error">Database error Line 39</p>';
                $stmt->close();
    }
 
    // check existing phone
    $prep_stmt = "SELECT id FROM users WHERE phone = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
    if ($stmt) {
        $stmt->bind_param('s', $phone);
        $stmt->execute();
        $stmt->store_result();
 
            if ($stmt->num_rows == 1) {
                // A user with this phone already exists
                $error_msg .= '<p class="error">Phone number already exists</p>';
                $stmt->close();
            }
                // $stmt->close();
        } else {
            $error_msg .= '<p class="error">Database error line 55</p>';
            $stmt->close();
        }
 
    // TODO: 
    // We'll also have to account for the situation where the user doesn't have
    // rights to do registration, by checking what type of user is attempting to
    // perform the operation.
 
    if (empty($error_msg)) {
        // Create a random salt
        //$random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE)); // Did not work
        $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
 
        // Create salted password 
        $password = hash('sha512', $password . $random_salt);
        

       // Insert the new user into the database 
        $time = date("h:i:s a");
        $date = date("d-m-Y");
        $browser = $_SERVER['HTTP_USER_AGENT'];
        if ($insert_stmt = $mysqli->prepare("INSERT INTO users (firstName, lastName, phone, email, password, salt, reg_time, reg_date, reg_ip, reg_browser) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssssssssss', $firstName, $lastName, $phone, $email, $password, $random_salt, $time, $date, $ip_address, $browser);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
        // header('Location: ../account/');

                $to      = $email;
                $subject = 'Watzsap TV VJ Registration';
                $message = 'Welcome to Watzsap TV' . "\r\n" .

                'Welcome to Watzsap TV.' . "\r\n" .
                'Thanks for Registering with us; we are pleased to have you on board. ' . "\r\n" . 
                'Stay up to date with the latest Urban gosple by Subscribing to our newsletter on ' . "\r\n" .
                'http://watzsaptv.com  ' . "\r\n" .
                'or by following us on; ' . "\r\n" ."\r\n" .
                'Facebook: http://www.facebook.com/watzsapTV ' . "\r\n" .
                'Twitter: http://www.twitter.com/watzsapTV ' . "\r\n" .
                'Instagram: http://www.instagram.com/watzsapTV ' . "\r\n" .
                'BBM:  ' . "\r\n" .
                'WhatsApp: +234 706 905 9758 ' . "\r\n". "\r\n" .

                'If you need help with getting started, contact our support team on; ' . "\r\n" .
                'E-Mail: support@watzsaptv.com ' . "\r\n" .
                'Tel: +234 706 905 9758 ' . "\r\n" .
                '     +234 817 341 8956 ' . "\r\n". "\r\n" .

                ' ' . "\r\n" .
                ' ' ;




                $headers = 'From: support@watzsaptv.com' . "\r\n" .
                'Reply-To: support@watzsaptv.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
                mail($to, $subject, $message, $headers);



        $success = 'Signup Successful! Please Signin to continue.';
    } else {
        $error_msg .= '';
    }
}
?>
