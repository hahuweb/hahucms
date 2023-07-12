<?php

/**
 * Index Pages 
 * 
 */

// header
include 'header.php';
$pages = new pages();
$media = new medias();
?>

<div class="content-wrapper" id="page-content">
    <div class="container-fluid">
        <h4>Admin</h4>
        <div class="py-2"></div>
        <div class="row g-2">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">

                            <div>
                                <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                    <span class="legend-circle-sm bg-success"></span>
                                    All Users
                                </h5>
                            </div>

                            <i class="fa-solid fa-users"></i>

                        </div>
                        <div class="d-flex justify-content-between">
                            <h2 class="mb-0">
                                <?php
                                $get_users = $hw_users->all_users('hw_users');
                                $count_user = mysqli_num_rows($get_users);
                                if ($count_user == true) {
                                    echo $count_user;
                                }

                                ?>
                            </h2>
                            <div class="py-2">
                                <a class="btn btn-sm text-muted" href="users.php">View</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">

                            <div>
                                <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                    <span class="legend-circle-sm bg-success"></span>
                                    Active Users
                                </h5>

                            </div>

                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h2 class="mb-0">
                                <?php
                                $get_users = $hw_users->active_users('hw_users');
                                $count_user = mysqli_num_rows($get_users);
                                if ($count_user == true) {
                                    echo $count_user;
                                }
                                ?>
                            </h2>
                            <div class="py-2">
                                <a class="btn btn-sm text-muted" href="active.php">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5"></div>

        <div class="row g-2">
            <div class="col-lg-6 pages">
                <h4>Pages</h4>
                <div class="card">
                    <div class="card-body">
                        <?php
                        $theme = file_get_contents('../hw-includes/setting/site/theme.json');
                        $theme_data = json_decode($theme);
                        if ($theme_data->theme_url == true) {
                        ?>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                        <span class="legend-circle-sm bg-success"></span>
                                        <?php
                                        $countpages = $pages->countThemePages('../' . $theme_data->theme_url);
                                        ?>
                                    </h5>
                                </div>

                                <i class="fa-solid fa-file"></i>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h2 class="mb-0">
                                    <?php
                                    $folder = $pages->themeFolder();
                                    echo sizeFormat(folderSize($folder));
                                    ?>
                                </h2>
                                <div class="py-2">
                                    <a class="btn btn-sm text-muted" href="pages.php">View</a>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                        <span class="legend-circle-sm bg-success"></span>
                                        <?php
                                        $countpages = $pages->countPages();
                                        ?>
                                    </h5>

                                </div>

                                <i class="fa-solid fa-file"></i>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h2 class="mb-0">
                                    <?php
                                    $folder = $pages->pagesFolder();
                                    echo sizeFormat(folderSize($folder));
                                    ?>
                                </h2>
                                <div class="py-2">
                                    <a class="btn btn-sm text-muted" href="pages.php">View</a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>

            </div>
            <div class="col-lg-6 media">
                <h4>Media</h4>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">

                            <div>
                                <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                    <span class="legend-circle-sm bg-success"></span>
                                    <?php
                                    $countfile = $media->countFile();
                                    ?>
                                </h5>

                            </div>

                            <i class="fa-solid fa-image"></i>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h2 class="mb-0">
                                <?php
                                $folder = $media->folderName();
                                echo sizeFormat(folderSize($folder));
                                ?>
                            </h2>
                            <div class="py-2">
                                <a class="btn btn-sm text-muted" href="media.php">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5"></div>

        <?php
        $hw_post = new post();
        $connect = $hw_post->db_connect();
        $get_post = $hw_post->first_posts('hw_post');
        $rows_post = ($get_post);
        if ($rows_post->num_rows == TRUE) {
        ?>
            <div class="d-flex bd-highlight">
                <div class="p-2 flex-grow-1 bd-highlight">
                    <h4>Blogs</h4>
                </div>
                <div class="p-2 bd-highlight">
                    <a href="post.php" class="btn">All</a>
                </div>
            </div>
            <div class="py-2"></div>
            <div class="row g-2 post scroll-content">
                <?php
                while ($rows_post = $get_post->fetch_assoc()) {
                    $post_id = $rows_post['post_id'];
                ?>
                    <div class="col-10 col-md-5 col-lg-4">
                        <div class="card">
                            <a href="post-view.php?post_id=<?php echo $rows_post['post_id'] ?>" style="width:100%">
                                <img src="../<?php echo $rows_post['img'] ?>" class="card-img-to" alt="..." style="width:100%">
                            </a>
                            <div class="card-body align-items-center p-3 p-sm-4">
                                <h5 class="card-title"><?php echo $rows_post['post_title'] ?></h5>
                                <br />
                                <div class="d-flex bd-highlight mb-3">
                                    <div class="me-auto bd-highlight">
                                        <span class="text-muted small">

                                            <?php
                                            $post_users = $hw_users->view_user('hw_users', $rows_post['post_author']);
                                            $user_post = ($post_users);
                                            if ($user_post->num_rows == TRUE) {
                                                $user_post = $post_users->fetch_assoc();

                                                if ($user_post['user_img'] == true) {
                                            ?>
                                                    <img src="../<?php echo $user_post['user_img'] ?>" style="width: 40px;height:40px; border-radius:50px">

                                                    <?php
                                                            }else{
                                                                ?>
                                                                <span class="fa-solid fa-user" style="font-size: 20px;"></span>
                                                                <?php
                                                            }
                                                            ?>


                                        </span>
                                        <span class="text-muted small">
                                        <?php

                                                echo ucfirst($user_post['username']);
                                            }
                                        ?>
                                        </span>
                                        <span class="text-muted small">
                                            <?php
                                            if ($rows_post['view']  > 0) {
                                                echo countViews($rows_post['view']);
                                            }
                                            ?>
                                        </span>
                                        <span class="text-muted small">
                                            <?php
                                            if ($rows_post['post_date'] == '0000-00-00') {
                                            } else {
                                                dateDeff($rows_post['post_date'], current_date());
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php
                }
            }
            ?>

            </div>
            <div class="py-4"></div>

    </div>
</div>
<?php
// copyright
require 'copyright.php';

// footer
require 'footer.php';
?>