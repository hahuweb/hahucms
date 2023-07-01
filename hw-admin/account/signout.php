<?php

/**
 * Sign Out
 *
 * Handles for close session and update user activity.
 *
 */

session_start();

// Include files
require 'load.php';


// Show user
$hw_users = new users();
$connect = $hw_users->db_connect();
if (isset($_SESSION['ID'])) {
    $id = $_SESSION['ID'];
    $get_users = $hw_users->view_user('hw_users', $id);
    $rows = ($get_users);
    if ($rows->num_rows == TRUE) {
        $row = $get_users->fetch_assoc();

    }
}

// Sign out
$signout = new logout();
$user_logout = $signout->userLogout($id);


if (session_destroy()) {

    header('Location: ../account/login.php');
}
