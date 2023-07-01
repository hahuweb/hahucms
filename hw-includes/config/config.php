
<?php

/**
 * Configuration
 *
 * 
 */


 // ** Database settings - You can get this info from your web host ** //
 /**  Database name */
 define("DB_NAME", "london");

/** Database username */
define("DB_USER", "root");

/** Database password */
define("DB_PASS", "");

/** Database hostname */
define("DB_SERVER", "localhost");

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
  die("Connect filed:" . $conn->connect_error);
} 
