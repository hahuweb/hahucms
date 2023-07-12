<?php

/**
 * Post
 * 
 * View blog post
 */
include 'header.php';
?>

<div class="content-wrapper" id="page-content">
    <div class="container-fluid">
        <div class="py-2"></div>

        <?php
        if (isset($_GET['post_id'])) {
            $post_id = $_GET['post_id'];
            $hw_post = new post();
            $get_post = $hw_post->view_post('hw_post', $post_id);
            $rows_post = ($get_post);
            if ($rows_post->num_rows == TRUE) {
                $rows_post = $get_post->fetch_assoc();
        ?>

                <div class="row g-2 post-view">
                    <div class="col-lg-10">
                        <img src="../<?php echo $rows_post['img'] ?>" class="card-img-to" alt="...">
                        <div class="card-body align-items-center p-3 p-sm-4">
                            <h5><?php echo $rows_post['post_title'] ?></h5>
                            <br />
                            <p><?php echo $rows_post['post_description'] ?></p>
                            <br />
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
                                            } else {
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

                                <div class="bd-highlight">
                                    <a href="post-edit.php?post_id=<?php echo $rows_post['post_id'] ?>" class="btn">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-5"></div>

        <?php
            }
        }
        ?>

    </div>
</div>

<?php
include 'footer.php';
?>