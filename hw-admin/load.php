<?php

/**
 *  Load
 *  Configuration, all data and form files.
 */


/** Define ABSPATH as this file's directory */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}
if(!file_exists('../hw-includes/config/config.php')) {
    header("Location: account/setup.php");
}
// Configuration
require_once ABSPATH . '../hw-includes/config/config.php';

// Authentic 
require_once ABSPATH . '../hw-includes/config/auth.php';

// db
require_once ABSPATH . '../hw-includes/config/class-db.php';

// Data
require_once ABSPATH . '../hw-includes/app/class-users.php';
require_once ABSPATH . '../hw-includes/app/class-post.php';
require_once ABSPATH . '../hw-includes/app/class-media.php';
require_once ABSPATH . '../hw-includes/app/class-data.php';
require_once ABSPATH . '../hw-includes/app/class-pages.php';
require_once ABSPATH . '../hw-includes/app/class-theme.php';
require_once ABSPATH . '../hw-includes/app/class-plugin.php';

// Controllers
require_once ABSPATH . '../hw-includes/controllers/class-values.php';
require_once ABSPATH . '../hw-includes/controllers/class-users.php';
require_once ABSPATH . '../hw-includes/controllers/class-edit.php';
require_once ABSPATH . '../hw-includes/controllers/class-post.php';
require_once ABSPATH . '../hw-includes/controllers/class-pages.php';
require_once ABSPATH . '../hw-includes/controllers/class-data.php';
require_once ABSPATH . '../hw-includes/controllers/class-media.php';
require_once ABSPATH . '../hw-includes/controllers/class-mail.php';
require_once ABSPATH . '../hw-includes/controllers/class-themes.php';
require_once ABSPATH . '../hw-includes/controllers/class-plugin.php';
require_once ABSPATH . '../hw-includes/controllers/class-update.php';

// Function
require_once ABSPATH .'../hw-includes/function.php';
