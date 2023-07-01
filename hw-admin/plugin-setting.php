<?php

/**
 * Media  
 * 
 */

// header
include 'header.php';

$plugins = new plugins();
$pluginUpload = new pluginHandling();

?>
<div class="content-wrapper" id="page-content">
    <div class="container-fluid">
        <?php
        if (isset($_GET['public_plugin'])) {
            $public = $_GET['public_plugin'];
            $path = '../hw-content/plugins/';
            require $path.$public.'/load.php';
        } 
        ?>

    </div>
</div>
<?php
// footer
include 'footer.php';
?>