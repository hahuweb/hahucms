<?php

/**
 * Header
 * 
 * 
 */

 
/** load */
require 'hw-includes/site/load.php';

/** site data */
$site = new site();

/** post */
$post = new blog();


/** plugins data */
$plugins = new plugins();

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php

    /** site info*/
    $siteinfo = $site->siteInfo();
    ?>

    <!-- css -->
    <link rel="stylesheet" href="hw-includes/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="hw-includes/assets/css/swiffy-slider.min.css" />
    <link rel="stylesheet" href="hw-includes/assets/css/style.css" />

    <?php

    /** theme css */
    $css = $site->css();
    ?>

    <!-- icons -->
    <link rel="stylesheet" href="hw-includes/assets/fontawesome/css/fontawesome.css" />
    <link rel="stylesheet" href="hw-includes/assets/fontawesome/css/solid.css" />
    <link rel="stylesheet" href="hw-includes/assets/fontawesome/css/brands.css" />

</head>

<body class="scrollspy-example" data-bs-spy="scroll" data-bs-target="#page" data-bs-offset="100" tabindex="0">
    <?php


    /** pages info */
    $pg = $site->pagesInfo();
    $themes_info = $site->themeInfo();


    /** header page */
    if ($themes_info->theme_url == true) {
        $header = $pg->header;
        $siteHeader = $site->themePage($themes_info->theme_url, $header);
    } else {
        $header = $pg->header;
        $siteHeader = $site->page($header);
    }
    ?>