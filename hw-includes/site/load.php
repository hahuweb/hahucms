<?php

/**
 *  Load
 *  Configuration, site and pages data.
 */



// Configuration

if(!file_exists('hw-includes/config/config.php')) {
    header("Location: hw-admin/account/setup.php");
}
require_once  'hw-includes/config/config.php';

// db
require_once  'hw-includes/config/class-db.php';

// Data
require_once  'hw-includes/app/class-users.php';
require_once  'hw-includes/app/class-post.php';
require_once  'hw-includes/app/class-pages.php';

// function
require_once 'hw-includes/function.php';

// site information and pages data
require_once  'hw-includes/site/site.php';

// post
require_once  'hw-includes/site/post.php';

// plugins
require_once  'hw-includes/site/plugins.php';
