<?php

/**
 * View
 * 
 * 
 */

require 'hw-includes/site/load.php';

// site info
$site = new site();

// blog info
$post = new blog();
$today = date('y-m-d');

if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
    // count view
    $view = $post->countView($post_id);
}
