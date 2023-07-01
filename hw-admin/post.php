<?php

/**
 * Post
 * 
 * Blog post
 */
include 'header.php';

?>

<div class="content-wrapper" id="page-content">
    <div class="container-fluid">
        <?php
        $hw_post = new post();
        $get_post = $hw_post->all_posts('hw_post');
        $rows_post = ($get_post);
        $count_post = mysqli_num_rows($get_post);
        ?>
        <div class="mb-2 d-flex">
            <div class="p-2 flex-grow-1 bd-highlight">
                <h5 class="">Post</h5>
            </div>
            <div class="p-2 bd-highlight">
                <div class="py-1"></div>
                <?php
                if ($count_post > 0) {
                    echo '<span>' . $count_post . ' post</span>';
                }
                ?>
            </div>
            <div class="p-2 bd-highlight">
                <div class="pe-6 my-1">

                    <div class="dropdown">

                        <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Sort by
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="post.php?view">View</a></li>
                            <li><a class="dropdown-item" href="post.php?descending">Date <span class="small text-muted">Descending</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-2"></div>

        
        <?php
        $formPost = new addpost();

        if (isset($_POST['delete'])) {
            $delete_form = $formPost->deletePost();
        }
        ?>
        <form action="" method="post" id="media_form">
            <div class="row g-3 post">

                <?php
                if (isset($_GET['view'])) {
                    $view = $hw_post->sort_view('hw_post');
                    $rows_view = ($view);
                    if ($rows_view->num_rows == TRUE) {
                        while ($rows_view = $view->fetch_assoc()) {
                ?>
                            <div class="col-lg-6">
                                <div class="card">
                                    <a href="post-view.php?post_id=<?php echo $rows_view['post_id'] ?>" style="width:100%">
                                        <img src="<?php echo $rows_view['img'] ?>" class="card-img-to" alt="..." style="width:100%">
                                    </a>
                                    <div class="card-body align-items-center p-3 p-sm-4">
                                        <h5 class="card-title"><?php echo $rows_view['post_title'] ?></h5>
                                        <br />
                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto bd-highlight">
                                                <span class="text-muted small">

                                                    <?php
                                                    $post_users = $hw_users->view_user('hw_users', $rows_view['post_author']);
                                                    $user_post = ($post_users);
                                                    if ($user_post->num_rows == TRUE) {
                                                        $user_post = $post_users->fetch_assoc();
                                                        if ($user_post['user_img'] == true) {
                                                            ?>
                                                                <img src="<?php echo $user_post['user_img'] ?>" style="width: 40px;height:40px; border-radius:50px">
            
                                                            <?php
                                                            }
                                                            ?>
                                                </span>
                                                <span class="text-muted small">
                                                <?php

                                                        echo $user_post['username'];
                                                    }
                                                ?>
                                                </span>
                                                <span class="text-muted small">
                                                    <?php
                                                    if ($rows_view['view']  > 0) {
                                                        echo countViews($rows_view['view']);
                                                    }
                                                    ?>
                                                </span>
                                                <span class="text-muted small">
                                                    <?php
                                                    if ($rows_view['post_date'] == '0000-00-00') {
                                                    } else {
                                                        dateDeff($rows_view['post_date'], current_date());
                                                    }
                                                    ?>
                                                </span>
                                            </div>

                                            <div class="bd-highlight">
                                                <a href="post-edit.php?post_id=<?php echo $rows_view['post_id'] ?>" class="btn">Edit</a>
                                            </div>
                                            <div class="bd-highlight">
                                                <div class="py-1"></div>

                                                <input class="form-check-input checkbox" type="checkbox" name="check[]" value="<?php echo $rows_view['post_id']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }
                } elseif (isset($_GET['descending'])) {
                    $get_desc = $hw_post->sort_descending('hw_post');
                    $rows_desc = ($get_desc);
                    if ($rows_desc->num_rows == TRUE) {
                        while ($rows_desc = $get_desc->fetch_assoc()) {
                        ?>
                            <div class="col-lg-6">
                                <div class="card">
                                    <a href="post-view.php?post_id=<?php echo $rows_desc['post_id'] ?>" style="width:100%">
                                        <img src="<?php echo $rows_desc['img'] ?>" class="card-img-to" alt="..." style="width:100%">
                                    </a>
                                    <div class="card-body align-items-center p-3 p-sm-4">
                                        <h5 class="card-title"><?php echo $rows_desc['post_title'] ?></h5>
                                        <br />
                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="me-auto bd-highlight">
                                                <span class="text-muted small">

                                                    <?php
                                                    $post_users = $hw_users->view_user('hw_users', $rows_desc['post_author']);
                                                    $user_post = ($post_users);
                                                    if ($user_post->num_rows == TRUE) {
                                                        $user_post = $post_users->fetch_assoc();
                                                        if ($user_post['user_img'] == true) {
                                                            ?>
                                                                <img src="<?php echo $user_post['user_img'] ?>" style="width: 40px;height:40px; border-radius:50px">
            
                                                            <?php
                                                            }
                                                            ?>
                                                </span>
                                                <span class="text-muted small">
                                                <?php

                                                        echo $user_post['username'];
                                                    }
                                                ?>
                                                </span>
                                                <span class="text-muted small">
                                                    <?php
                                                    if ($rows_desc['view']  > 0) {
                                                        echo countViews($rows_desc['view']);
                                                    }
                                                    ?>
                                                </span>
                                                <span class="text-muted small">
                                                    <?php
                                                    if ($rows_desc['post_date'] == '0000-00-00') {
                                                    } else {
                                                        dateDeff($rows_desc['post_date'], current_date());
                                                    }
                                                    ?>
                                                </span>
                                            </div>

                                            <div class="bd-highlight">
                                                <a href="post-edit.php?post_id=<?php echo $rows_desc['post_id'] ?>" class="btn">Edit</a>
                                            </div>
                                            <div class="bd-highlight">
                                                <div class="py-1"></div>

                                                <input class="form-check-input checkbox" type="checkbox" name="check[]" value="<?php echo $rows_desc['post_id']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }

                } else {

                    if ($rows_post->num_rows == TRUE) {
                        while ($rows_post = $get_post->fetch_assoc()) {
                            $post_id = $rows_post['post_id'];
                    ?>
                            <div class="col-lg-6">
                                <div class="card">
                                    <a href="post-view.php?post_id=<?php echo $rows_post['post_id'] ?>" style="width:100%">
                                        <img src="<?php echo $rows_post['img'] ?>" class="card-img-to" alt="..." style="width:100%">
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
                                                                <img src="<?php echo $user_post['user_img'] ?>" style="width: 40px;height:40px; border-radius:50px">
            
                                                            <?php
                                                            }
                                                            ?>
                                                </span>
                                                <span class="text-muted small">
                                                <?php

                                                        echo $user_post['username'];
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

                                            <div class="bd-highlight">
                                                <a href="post-edit.php?post_id=<?php echo $rows_post['post_id'] ?>" class="btn">Edit</a>
                                            </div>
                                            <div class="bd-highlight">
                                                <div class="py-1"></div>

                                                <input class="form-check-input checkbox" type="checkbox" name="check[]" value="<?php echo $rows_post['post_id']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo '<p>Blog post display here</p>';
                    }
                }
                ?>

            </div>

            <div class="row">
                <div class="col-md-5"><button class="btn btn-sm btn-danger btn-delete" type="submit" name="delete">Delete
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">

                            <span class="visually-hidden">selected items</span>
                        </span>
                    </button></div>
            </div>

        </form>
    </div>
</div>

<?php
include 'footer.php';
?>