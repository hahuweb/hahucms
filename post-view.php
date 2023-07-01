<?php

/**
 * Post
 * 
 * View blog post
 */


/** header */
require 'header.php';
?>
<div class="content-wrapper page-content">
    <div class="container">
        <div class="py-4"></div>
        <div class="row g-4 post">
            <?php
            /** view post */
            if (isset($_GET['post_id'])) {
                $post_id = $_GET['post_id'];
                $viewPost = $post->viewPost('hw_post', $post_id);
                $relatedPost = $post->relatedPost('hw_post', $post_id);
            }
            ?>
        </div>
        <div class="py-4"></div>
    </div>
</div>

<?php

/** footer*/
require 'footer.php';
?>