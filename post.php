<?php

/**
 * Post
 * 
 * Display blog post
 */


/** header */
require 'header.php';
?>
<div class="content-wrapper page-content">
    <div class="container">
        <div class="py-4"></div>
        <div class="row g-4 post">
            <?php
            $count = $post->countPost('hw_post');

            // sort view
            if (isset($_GET['view'])) {
                $view = $post->sort_view('hw_post');

                // sort descending date
            } elseif (isset($_GET['descending'])) {
                $descending = $post->sort_descending('hw_post');
            } else {

                // all post
                $allPost = $post->allPost();
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