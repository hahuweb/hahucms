<?php

/**
 * Media  
 * 
 */

 // header
include 'header.php';

$media = new medias();
$imgForm = new mediaHandling();

?>


<div class="content-wrapper" id="page-content">
    <div class="container-fluid">

        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight">
                <h5 class="">Media</h5>
            </div>
            <div class="p-2 bd-highlight">
                <?php
                $countfile = $media->countFile();
                ?>
            </div>
            <div class="p-2 bd-highlight">
                <?php
                $folder = $media->folderName();
                echo sizeFormat(folderSize($folder));
                ?>
            </div>
            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#up" aria-controls="offcanvasRight">
                    <i class="fa-solid fa-cloud-upload-alt"></i>
                    Upload new file
                </button>
            </div>
        </div>

        <?php

        /**
         * forms
         */


        // add
        if (isset($_POST['upload_media'])) {
            $uploadImg = $imgForm->upload();
        }


        // delete  
        if (isset($_POST['delete'])) {
        }
        ?>



        <div class="py-3"></div>
        <?php

        if (isset($_POST['delete'])) {
            $uploadImg = $imgForm->delete();
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="media_form">

            <div class="row g-2">

                <?php
                $display = $media->displayMedia();
                ?>
                
                <div class="col-md-6">
                    <button class="btn btn-sm btn-danger btn-delete" type="submit" name="delete">Delete
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                            <span class="visually-hidden">selected items</span>
                        </span>
                    </button>
                </div>
            </div>
        </form>

        <?php

        /*if (isset($_POST['upload_media'])) {
            $uploadImg = $imgForm->upload();
        }*/

        ?>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="up" aria-labelledby="topOffcanvasLabel">
            <div class="offcanvas-header">
                <h6>Drop or choose files to upload</h6>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="container">
                <hr />
            </div>

            <div class="offcanvas-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formedia" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-9">
                            <input type="file" class="form-control" name="media[]" id="media" multiple>
                        </div>
                        <div class="col-1">
                            <button type="submit" class="btn btn-outline-secondary btn-md" name="upload_media">Upload</button>
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