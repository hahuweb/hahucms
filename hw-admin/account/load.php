<?php

/**
 * Load
 * 
 * Used to include config, form and data library.
 * 
 */


/** Define ABSPATH as this file's directory */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

if(!file_exists('../../hw-includes/config/config.php')) {
    header("Location: setup.php");
}
// Confi file
require_once ABSPATH . '../../hw-includes/config/config.php';


// Database connection
require_once ABSPATH . '../../hw-includes/config/class-db.php';

// Data
require_once ABSPATH . '../../hw-includes/app/class-users.php';
require_once ABSPATH . '../../hw-includes/app/class-data.php';
require_once ABSPATH . '../../hw-includes/app/class-pages.php';
require_once ABSPATH . '../../hw-includes/app/class-media.php';
require_once ABSPATH . '../../hw-includes/app/class-theme.php';

// controllers 
require_once ABSPATH . '../../hw-includes/controllers/class-values.php';
require_once ABSPATH . '../../hw-includes/controllers/class-users.php';
require_once ABSPATH . '../../hw-includes/controllers/class-table.php';
require_once ABSPATH . '../../hw-includes/controllers/class-pages.php';
require_once ABSPATH . '../../hw-includes/controllers/class-edit.php';

// Function
require_once ABSPATH . '../../hw-includes/function.php';

// Content
require_once ABSPATH . 'content.php';
