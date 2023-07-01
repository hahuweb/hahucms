<?php

/**
 * Upload
 * 
 * Handling for upload media, image, themes, plugins and updates.
 */


require 'load.php';
$imgHandle = new mediaHandling();
$themeHandle = new themeHandling();
$pluginHandle = new pluginHandling();
$updateHandle = new updateHandling();


/**
 * media
 */
if (!empty($_FILES['media']['name'])) {
    $uploadMedia = $imgHandle->upload();
}

/**
 * Image
 */
if (!empty($_FILES['img']['name'])) {
    $uploadImg = $imgHandle->imgUpload();
}

/**
 * Themes
 */
if (!empty($_FILES['theme']['name'])) {
    $uploadTheme = $themeHandle->themeUpload();
}


/**
 * Plugins
 */
if (!empty($_FILES['plugin']['name'])) {
    $uploadPlugin = $pluginHandle->pluginUpload();
}


/**
 * Updates
 */
if (!empty($_FILES['update']['name'])) {
    $update = $updateHandle->update();
}

