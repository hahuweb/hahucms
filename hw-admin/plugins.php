<?php

/**
 * Plugins  
 * 
 * Display public, private and upload plugins
 */


// header
include 'header.php';

// plugins data
$plugins = new plugins();
$pluginUpload = new pluginHandling();

?>
<div class="content-wrapper" id="page-content">
    <div class="container-fluid">

        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight">
                <h5 class="">Plugins</h5>
            </div>
            <div class="p-2 bd-highlight">
                <?php
                $countfile = $plugins->countFile();
                ?>
            </div>
            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#up" aria-controls="offcanvasRight">
                    <i class="fa-solid fa-cloud-upload-alt"></i>
                    Upload Plugins
                </button>
            </div>
        </div>
        <div class="py-3"></div>
        <?php


        // Upload plugin
        if (isset($_POST['upload_plugin'])) {
            $uploadPlugin = $pluginUpload->pluginUpload();
        }
        ?>
        <div class="row g-2">
            <?php

            // All plugins
            $public = $plugins->Plugins();
            ?>
        </div>
        
        <div class="offcanvas offcanvas-end" tabindex="-1" id="up" aria-labelledby="topOffcanvasLabel">
            <div class="offcanvas-header">
                <h6>Drop or choose files to upload</h6>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="container">
                <hr />
            </div>

            <div class="offcanvas-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="files" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-9">
                            <input type="file" class="form-control" name="plugin" id="file" required>
                        </div>
                        <div class="col-1">
                            <button type="submit" class="btn btn-outline-secondary btn-md" name="upload_plugin">Upload</button>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="progress">
                                    <span id="percent" style=" float: right;right: 4px;"></span>
                                </div>
                            </div>

                            <div id="loader-icon">

                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        
    </div>
</div>
<?php
// footer
include 'footer.php';
?>