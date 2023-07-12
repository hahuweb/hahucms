<?php

/**
 * Setting
 * 
 * Manage website data.
 */


include 'header.php';
$data = new data();
$pages = new pages();
$updates = new updateHandling();
$forms = new dataValues();

?>

<div class="content-wrapper" id="page-content">
    <div class="container-fluid">
        <?php

        // Edit site info
        if (isset($_POST['add_site'])) {
            $pages = $forms->addSite();
        }

        // Edit site info
        if (isset($_POST['add_pages'])) {
            $pages = $forms->addPages();
        }

        // Edit blog info
        if (isset($_POST['add_blog'])) {
            $blog = $forms->addBlog();
        }
        // Update
        if (isset($_POST['upload_update'])) {
            $update = $updates->update();
        }
        ?>

        <h5>Website</h5>
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight">
                <p>Website Title, Description, Keyword, Author and Favicon</p>
            </div>

            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#site" aria-controls="offcanvasRight">
                    <i class="fa-solid fa-edit"></i>
                    Edit
                </button>
            </div>
        </div>
        <div class="py-2"></div>

        <h5>Pages</h5>
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight">
                <p>Choose home, header & footer page</p>
            </div>

            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#pages" aria-controls="offcanvasRight">
                    <i class="fa-solid fa-edit"></i>
                    Edit
                </button>
            </div>
        </div>
        <div class="py-2"></div>

        <h5>Blog</h5>
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight">
                <p>Show or hide blog from home page</p>
            </div>

            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#blog" aria-controls="offcanvasRight">
                    <i class="fa-solid fa-edit"></i>
                    Edit
                </button>
            </div>
        </div>
        <div class="py-2"></div>

        <h5>Security</h5>
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight">
                <p>Tow-Step Verification</p>
            </div>
            <?php
            if ($row['verification'] == 'ON') {
            ?>
                <div class="p-2 bd-highlight">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked disabled>
                    </div>
                </div>
            <?php
            } elseif ($row['verification'] == 'OFF') {
            ?>
                <div class="p-2 bd-highlight">
                    <p>
                        OFF
                    </p>
                </div>
                <div class="p-2 bd-highlight">
                    <a class="btn btn-outline-secondary btn-sm" href="profile.php"> <i class="fa-solid fa-edit"></i>
                        Edit
                    </a>
                </div>

            <?php
            }
            ?>
        </div>
        <div class="py-2"></div>

        <h5>Style</h5>
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight">
                <p>Dark Mode</p>
            </div>
            <div class="p-2 bd-highlight">
                <div class="form-check form-switch">
                    <input class="form-check-input dark-btn" id="dark-btn" type="checkbox">
                    <input class="form-check-input light-btn" id="light-btn" type="checkbox" checked>
                </div>
            </div>
        </div>
        <div class="py-2"></div>

        <h5>Hahu CMS</h5>
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight">
                <p>Version: 1.0</p>
            </div>
            <div class="p-2 bd-highlight">
                <?php
                if ($row['user_role'] == 'Administrator') {

                ?>
                    <button type="button" class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#update" aria-controls="offcanvasRight">
                        <i class="fa-solid fa-edit"></i>
                        Update
                    </button>

                <?php
                }
                ?>
            </div>
        </div>


        <!-- site -->
        <div class="offcanvas offcanvas-end" id="site" aria-labelledby="topOffcanvasLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Website</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr />
            <div class="offcanvas-body">

                <form action="" method="post" class="form-group">
                    <?php
                    $siteInfo = $data->siteInfo();

                    ?>
                    <div class="row ">
                        <div class="col-lg-12">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="<?php echo $siteInfo->title; ?> ">
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-12">
                            <label class="form-label">Description</label>
                            <textarea name="description" rows="8" class="form-control" style="height:100px"><?php
                                                                                                            echo $siteInfo->description;
                                                                                                            ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-12">
                            <label class="form-label">Keyword</label>
                            <textarea name="keyword" rows="8" class="form-control" style="height:100px"><?php
                                                                                                        echo $siteInfo->keyword;
                                                                                                        ?>
                        </textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label">Author</label>
                        <input type="text" class="form-control" name="author" value="<?php echo $siteInfo->author; ?> ">
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-12">
                            <label class="form-label">Favicon</label>
                            <div class="d-flex bd-highlight">
                                <div class="p-2 flex-grow-1 bd-highlight">
                                    <img src="../<?php echo $siteInfo->favicon; ?>" class="lb-img rounded-circle" id="lb-img" style="width: 50px;height:50px" />
                                    <input type="text" id="result" class="form-control" name="favicon" value="<?php echo $siteInfo->favicon; ?>" hidden>
                                </div>
                                <div class=" p-2 bd-highlight">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#MediaModal">
                                        Set Image
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row ">
                        <div class="col-lg-10">
                            <button type="submit" name="add_site" class="btn btn-outline-secondary">Save</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- end site -->


        <!-- pages -->
        <div class="offcanvas offcanvas-end" id="pages" aria-labelledby="topOffcanvasLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Pages</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr />
            <div class="offcanvas-body">
                <form action="" method="post" class="form-group">
                    <?php
                    $theme = file_get_contents('../hw-includes/setting/site/theme.json');
                    $theme_data = json_decode($theme);
                    $pagesInfo = $data->pagesInfo();

                    ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="form-label">Header</label>
                            <select class="form-select" name="header" required="">
                                <?php
                                if ($pagesInfo->header == true) {
                                ?>
                                    <option selected value="<?php echo $pagesInfo->header ?>"><?php echo $pagesInfo->header ?></option>
                                <?php
                                }
                                if ($theme_data->theme_url == true) {
                                    $edit_setting = $pages->themeSetting('../' . $theme_data->theme_url, $pagesInfo->header);
                                } else {
                                    $edit_setting = $pages->pagesetting($pagesInfo->header);
                                }
                                ?>
                                <option value="hide">Hide Header</option>

                            </select>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="form-label">Home Page</label>
                            <select class="form-select" name="home" required="">
                                <?php
                                if ($pagesInfo->home == true) {
                                ?>
                                    <option selected value="<?php echo $pagesInfo->home ?>"><?php echo $pagesInfo->home ?></option>
                                <?php
                                }
                                if ($theme_data->theme_url == true) {
                                    $edit_setting = $pages->themeSetting('../' . $theme_data->theme_url, $pagesInfo->home);
                                } else {
                                    $edit_setting = $pages->pagesetting($pagesInfo->home);
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="form-label">Footer</label>
                            <select class="form-select" name="footer" required="">
                                <?php
                                if ($pagesInfo->footer == true) {
                                ?>
                                    <option selected value="<?php echo $pagesInfo->footer ?>"><?php echo $pagesInfo->footer ?></option>
                                <?php
                                }
                                if ($theme_data->theme_url == true) {
                                    $edit_setting = $pages->themeSetting('../' . $theme_data->theme_url, $pagesInfo->footer);
                                } else {
                                    $edit_setting = $pages->pagesetting($pagesInfo->footer);
                                }
                                ?>
                                <option value="hide">Hide Footer</option>

                            </select>
                        </div>
                    </div>
                    <br />
                    <div class="row ">
                        <div class="col-lg-10">
                            <button type="submit" name="add_pages" class="btn btn-outline-secondary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end pages -->

        <!-- blog -->
        <div class="offcanvas offcanvas-end" id="blog" aria-labelledby="topOffcanvasLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Blog</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr />
            <div class="offcanvas-body">
                <form action="" method="post" class="form-group">
                    <?php

                    $blogInfo = $data->blogInfo();

                    ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="form-label">Show or hide blog from home page</label>
                            <select class="form-select" name="blogHome" required="">
                                <?php
                                if ($blogInfo->home == true) {
                                    if ($blogInfo->home == 'Disable') {
                                ?>
                                        <option selected value="<?php echo $blogInfo->home ?>"><?php echo $blogInfo->home ?></option>
                                        <option value="Enable">Enable</option>

                                    <?php
                                    } elseif ($blogInfo->home == 'Enable') {
                                    ?>
                                        <option selected value="<?php echo $blogInfo->home ?>"><?php echo $blogInfo->home ?></option>
                                        <option value="Disable">Disable</option>
                                <?php
                                    }
                                }
                                ?>

                            </select>
                        </div>
                    </div>
                    <br />

                    <div class="row ">
                        <div class="col-lg-10">
                            <button type="submit" name="add_blog" class="btn btn-outline-secondary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end blog -->


        <!-- update -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="update" aria-labelledby="topOffcanvasLabel">
            <div class="offcanvas-header">
                <h6>Drop or choose files to upload</h6>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr />
            <div class="offcanvas-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="files" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-9">
                            <input type="file" class="form-control" name="update" id="file" required>
                        </div>
                        <div class="col-1">
                            <button type="submit" class="btn btn-outline-secondary btn-md" name="upload_update">Update</button>
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
                            <div id="loader-icon" hidden>
                                <p>Updating please wait...</p>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- end update  -->


        <!-- Modal -->
        <div class="modal fade" id="MediaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="MediaModalLabel">Media</h5>

                        <button type="button" class="btn btn-sm" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fa-solid fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="filemanager">
                            <div class="d-flex bd-highlight">
                                <div class="p-0 flex-grow-1 bd-highlight">
                                    <p></p>
                                </div>
                                <div class="p-0 bd-highlight">
                                    <button class="btn btn-outline-secondary btn-sm btn-icon me-5 float-end" data-bs-toggle="collapse" data-bs-target=".upload" aria-expanded="false">
                                        <i class="fa-solid fa-cloud-upload-alt"></i>
                                        Upload new file
                                    </button>
                                </div>
                                <div class="p-0 bd-highlight">
                                    <div class="search">
                                        <input type="search" class="img_search" placeholder="search.." />
                                    </div>
                                </div>
                            </div>

                            <div class="top-panel">

                                <div class="upload collapse">

                                    <button id="upload-close" type="button" class="btn btn-sm btn-light" aria-label="Close" data-bs-toggle="collapse" data-bs-target=".upload" aria-expanded="true">
                                        <span aria-hidden="true"><i class="fa-solid fa-times"></i></span>
                                    </button>


                                    <h3>Drop or choose files to upload</h3>
                                    <div class="py-2"></div>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formImg" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-4">
                                                <input type="file" class="form-control" name="img" id="img">
                                            </div>
                                            <div class="col-1">
                                                <button type="submit" class="btn btn-outline-secondary btn-md" name="upload_img">Upload</button>
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

                            <div class="display-panel">
                                <span id="uploaded_image"></span>

                                <?php
                                $media = new medias();
                                $display = $media->mediaModel();
                                ?>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">

                        <div class="align-left">

                        </div>

                        <div class="align-right">
                            <button type="button" class="btn btn-primary save-btn" data-bs-dismiss="modal">Add selected</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal -->

    </div>
</div>

<?php
include 'footer.php';
?>