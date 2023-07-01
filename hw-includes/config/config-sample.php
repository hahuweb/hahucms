<?php

/**
 * Configuration
 *
 * 
 */


// ** Database settings - You can get this info from your web host ** //
/**  Database name */
define("DB_NAME", "database_name_here");

/** Database username */
define("DB_USER", "username_here");

/** Database password */
define("DB_PASS", "password_here");

/** Database hostname */
define("DB_SERVER", "localhost");

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
  //die("Connect filed:" . $conn->connect_error);
}

