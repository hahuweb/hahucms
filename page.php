<?php

/**
 * Page
 * 
 * 
 */



/** header */
require 'header.php';

/** pages */
if (isset($_GET['name'])) {
    $page_name = $_GET['name'];
    /** header page */
    if ($themes_info->theme_url == true) {
        $page = $site->themePage($themes_info->theme_url, $page_name);
    } else {
        $page = $site->page($page_name);

    }

    /** contact form */
    $contact = $plugins->contactForm($page_name);
}


/** footer */
require 'footer.php';
