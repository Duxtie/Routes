<?php
// Database config
define("HOST", "localhost");     // The host you want to connect to.
define("USER", "duke");            // The database username.
define("PASSWORD", "littlefrank");     // The database password.
define("DATABASE", "nw_routes");    // The database name.

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
mysqli_set_charset($mysqli, 'utf8');

/*


// Database settings
// database hostname or IP. default:localhost
// localhost will be correct for 99% of times
define("HOST", "localhost");
// Database user
define("DBUSER", "duke");
// Database password
define("PASS", "littlefrank");
// Database name
define("DB", "nw_routes");
 
############## Make the mysql connection ###########
$conn = mysql_connect(HOST, DBUSER, PASS);
if (!$conn)
{
    // the connection failed so quit the script
    die('Could not connect !<br />Please contact the site\'s administrator.');
}
$db = mysql_select_db(DB);
if (!$db)
{
    // cannot connect to the database so quit the script
    die('Could not connect to database !<br />Please contact the site\'s administrator.');
}
*/
?>



<?php
//login.php________________________________________________________________________________________________________
?>



<?php
if (!session_is_registered('loginid') || !session_is_registered('username'))
{
	// user is not logged in.
    if (isset($_POST['cmdlogin']))
    {
        // retrieve the username and password sent from login form
        // First we remove all HTML-tags and PHP-tags, then we create a md5-hash
        // This step will make sure the script is not vurnable to sql injections.
        $u = strip_tags($_POST['username']);
        $p = md5(strip_tags($_POST['password']));
        //Now let us look for the user in the database.
        $query = sprintf("SELECT loginid FROM login WHERE username = '%s' AND password = '%s' LIMIT 1;",
            mysql_real_escape_string($u), mysql_real_escape_string($p));
        $result = mysql_query($query);
        // If the database returns a 0 as result we know the login information is incorrect.
        // If the database returns a 1 as result we know  the login was correct and we proceed.
        // If the database returns a result > 1 there are multple users
        // with the same username and password, so the login will fail.
        if (mysql_num_rows($result) != 1)
        {
            // invalid login information
            echo "Wrong username or password!";
            //show the loginform again.
            include "loginform.php";
        } else {
            // Login was successfull
            $row = mysql_fetch_array($result);
            // Save the user ID for use later
            $_SESSION['loginid'] = $row['loginid'];
              // Save the username for use later
            $_SESSION['username'] = $u;
              // Now we show the userbox
            show_userbox();
        }
    } else {
    	 // User is not logged in and has not pressed the login button
    	 // so we show him the loginform
        include "loginform.php";
    }
 
} else {
	 // The user is already loggedin, so we show the userbox.
    show_userbox();
}
?>



<?php
//logout.php________________________________________________________________________________________________________
?>



<?php 
session_start();
if( session_unregister('loginid') == true 
		&& session_unregister('username')==true ) {
   header('Location: index.php');
   session_destroy();
} else {
   unset($_SESSION['loginid']);
   unset($_SESSION['username']);
   session_destroy();
   header('Location: index.php');
}
?>





<?php
//functions.inc.php_________________________________________________________________________________________________
?>




<?php
 
function show_userbox()
{
    // retrieve the session information
    $u = $_SESSION['username'];
    $uid = $_SESSION['loginid'];
    // display the user box
    echo "<div id='userbox'>
	 Welcome $u
		<ul>
		   <li><a href='../../logout.php'>Logout</a></li>
		</ul>
             </div>";
 
}
?>





