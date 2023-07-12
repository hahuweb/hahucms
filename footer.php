<?php

/**
 * Footer
 * 
 */



/** footer page*/
if ($themes_info->theme_url == true) {
    $footer = $pg->footer;
    $siteHeader = $site->themePage($themes_info->theme_url, $footer);
} else {
    $footer = $pg->footer;
    $siteHeader = $site->page($footer);
}

/** Facebook messenger */
$fbMessenger = $plugins->facebookMessenger();
?>

<script src="hw-includes/assets/js/jquery-3.1.0.min.js"></script>
<script src="hw-includes/assets/js/bootstrap.bundle.min.js"></script>
<script src="hw-includes/assets/js/swiffy-slider.min.js"></script>
<script src="hw-includes/assets/js/swiffy-slider-extensions.js"></script>
<script src="hw-includes/assets/js/main.js"></script>

<?php

/** theme js */
$js = $site->js();

/**  plugin js */
$pluginjs = $plugins->contact_js();

?>
</body>

</html>