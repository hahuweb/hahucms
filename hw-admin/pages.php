<?php

/**
 *  Pages
 * 
 */


// header
include 'header.php';
$pages = new pages();
$pagesHandle = new pagesHandling;

?>

<div class="content-wrapper" id="page-content">
    <div class="container-fluid">

        <?php
        $theme = file_get_contents('../hw-includes/setting/site/theme.json');
        $theme_data = json_decode($theme);
        if ($theme_data->theme_url == true) {

        ?>
            <div class="d-flex bd-highlight">
                <div class="p-2 flex-grow-1 bd-highlight">
                    <h5 class="">Pages</h5>
                </div>
                <div class="p-2 bd-highlight">
                    <?php
                    $count = $pages->countThemePages('../' . $theme_data->theme_url);
                    ?>
                </div>
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#pages" aria-controls="offcanvasRight">
                        <i class="fa-solid fa-plus"></i>
                        Add new page
                    </button>
                </div>
            </div>
            <?php

            // add
            if (isset($_POST['add_theme'])) {
                $addPage = $pagesHandle->addThemePages('../' . $theme_data->theme_url . '/');
            }

            // rename 
            if (isset($_POST['edit_themepage'])) {
                $renamePage = $pagesHandle->renameTheme('../' . $theme_data->theme_url . '/');
            }

            // delete  
            if (isset($_POST['delete_theme'])) {
                $addPage = $pagesHandle->deleteTheme('');
            }
            ?>
            <div class="py-3"></div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="media_form">
                <?php
                if ($pages->themeP() != 0) {

                ?>
                    <div class="table-responsive">
                        <table class="table align-middle table-striped">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Name</th>
                                <th scope="col">Size</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Rename</th>
                            </tr>
                            <?php
                            $display = $pages->displayThemePages();
                            ?>
                        </table>
                    </div>
                <?php
                } else {
                    echo 'Pages display here';
                }
                ?>
                <div class="col-md-6">
                    <button class="btn btn-danger btn-delete" type="submit" name="delete_theme">Delete
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                            <span class="visually-hidden">selected items</span>
                        </span>
                    </button>
                </div>
            </form>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="pages" aria-labelledby="topOffcanvasLabel">
                <div class="offcanvas-header">
                    <h4>Add Page</h4>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="container">
                    <hr />
                </div>
                <div class="offcanvas-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="form_pages">

                        <div class="row">
                            <div class="col-12">
                                <label class="form-label">Page Name</label>
                                <input type="text" class="form-control" name="page_name" id="page" placeholder="Page Name">
                                <div class="py-2"></div>
                                <select class="form-select" name="type" required="" hidden>
                                    <option selected value=".html">HTML</option>
                                </select>
                            </div>
                        </div>
                        <br />
                        <button type="submit" class="btn btn-outline-secondary btn-md" name="add_theme">Add</button>
                    </form>
                </div>
            </div>

        <?php
        } else {
        ?>

            <div class="d-flex bd-highlight">
                <div class="p-2 flex-grow-1 bd-highlight">
                    <h5 class="">Pages</h5>
                </div>
                <div class="p-2 bd-highlight">
                    <?php
                    $count = $pages->countPages();
                    ?>
                </div>
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#pages" aria-controls="offcanvasRight">
                        <i class="fa-solid fa-plus"></i>
                        Add new page
                    </button>
                </div>
            </div>
            <?php

            // add
            if (isset($_POST['add_page'])) {
                $addPage = $pagesHandle->addPages();
            }

            // rename 
            if (isset($_POST['edit_page'])) {
                $renamePage = $pagesHandle->renamePages();
            }

            // delete  
            if (isset($_POST['delete_page'])) {
                $addPage = $pagesHandle->deletePages();
            }
            ?>
            <div class="py-3"></div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="media_form">
                <?php
                if ($pages->countP() != 0) {

                ?>
                    <div class="table-responsive">
                        <table class="table align-middle table-striped">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Name</th>
                                <th scope="col">Size</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Rename</th>
                            </tr>
                            <?php
                            $display = $pages->displayPages();
                            ?>
                        </table>
                    </div>
                <?php
                } else {
                    echo 'Pages display here';
                }
                ?>
                <div class="col-md-6">
                    <button class="btn btn-danger btn-delete" type="submit" name="delete_page">Delete
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                            <span class="visually-hidden">selected items</span>
                        </span>
                    </button>
                </div>
            </form>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="pages" aria-labelledby="topOffcanvasLabel">
                <div class="offcanvas-header">
                    <h4>Add Page</h4>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="container">
                    <hr />
                </div>
                <div class="offcanvas-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="form_pages">

                        <div class="row">
                            <div class="col-12">
                                <label class="form-label">Page Name</label>
                                <input type="text" class="form-control" name="page_name" id="page" placeholder="Page Name">
                                <div class="py-2"></div>
                                <select class="form-select" name="type" required="" hidden>
                                    <option selected value=".html">HTML</option>
                                </select>
                            </div>
                        </div>
                        <br />
                        <button type="submit" class="btn btn-outline-secondary btn-md" name="add_page">Add</button>
                    </form>
                </div>
            </div>

        <?php
        }

        ?>

        <div class="py-3"></div>
    </div>
</div>

<?php
// footer
include 'footer.php';
?>