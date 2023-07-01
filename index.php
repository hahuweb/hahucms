<?php

/**
 * Home
 * 
 * Webite home page
 */


/**
 * header
 */
require 'header.php';


/**
 *home page 
 */
/*$home = $pg->home;
$homePage = $site->page($home);*/
if ($themes_info->theme_url == true) {
    $home = $pg->home;
    $siteHeader = $site->themePage($themes_info->theme_url, $home);
} else {
    $home = $pg->home;
    $siteHeader = $site->page($home);
}
 
/**
 * first post
 */
$blog = $site->blogInfo();
if ($blog->home == 'Enable') {
    $firstPost = $post->firstPost('hw_post');
}


/**
 * contact form
 */
$contact = $plugins->contactForm($home);


/**
 * footer
 */
require 'footer.php';
