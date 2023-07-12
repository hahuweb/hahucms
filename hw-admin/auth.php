<?php

/**
 * configuration
 *
 */

session_start();
if (!isset($_SESSION['ID'])) {
    header("Location: account/login.php");
    exit();
}

