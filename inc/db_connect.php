<?php

// Database config
define("HOST", "localhost");     // The host you want to connect to.
define("USER", "duke");          // The database username. 
define("PASSWORD", "littlefrank");     // The database password. 
define("DATABASE", "nw_routes");    // The database name.
 
// define("CAN_REGISTER", "any");
// define("DEFAULT_ROLE", "member");

  
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
mysqli_set_charset($mysqli, 'utf8');


