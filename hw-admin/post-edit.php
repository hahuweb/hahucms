<?php
/**
 * Post
 * 
 * Editing blog post
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
            $connect = $hw_post->db_connect();
            $get_post = $hw_post->view_post('hw_post', $post_id);
            $rows_post = ($get_post);
            if ($rows_post->num_rows == TRUE) {
                $rows_post = $get_post->fetch_assoc();

                $forms = new addpost();

                if (isset($_POST['post_edit'])) {
                    $post = $forms->editPost($post_id);
                }
        ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <label class="form-label">Title</label>
                            <input type="text" name="post_title" class="form-control" id="title" value="<?php echo $rows_post['post_title'] ?>" required>

                        </div>
                        <div class="col-lg-5">

                            <label class="form-label">Catagory</label>
                            <input type="text" name="post_category" class="form-control" id="category" value="<?php echo $rows_post['post_category'] ?>">

                        </div>
                        <div class="col-lg-10">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="post_description" id="trumbowyg-demo" rows="6">
                            <?php echo $rows_post['post_description'] ?>
                            </textarea>

                        </div>
                        <div class="col-lg-5">
                            <label class="form-label">Cover Image</label>
                            <div class="d-flex bd-highlight">
                                <div class="me-auto p-2 bd-highlight">
                                    <button type="button" class="btn btn-sm  btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#MediaModal">
                                        Set Image
                                    </button>
                                </div>
                                <div class="p-2 flex-shrink-1 bd-highlight">
                                    <img src="<?php echo $rows_post['img'] ?>" id="lb-img" class="lb-img"/>
                                </div>
                            </div>
                            <button class="btn float-end" type="button" data-bs-toggle="collapse" data-bs-target="#hidden_input">
                                Show Image
                            </button>
                            <div class="collapse navbar-collapse" id="hidden_input">
                                <br />
                                <br />
                                <input type="text" name="img" id="result" class="form-control" value="<?php echo $rows_post['img'] ?>">
                                <p></p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <label class="form-label">Image URL</label>
                            <p></p>
                            <input type="text" name="img_url" class="form-control" id="img_url" value="<?php echo $rows_post['img_url'] ?>">

                        </div>
                        <div class="col-lg-10">
                            <button class="btn btn-secondary" type="submit" name="post_edit">Edit</button>
                        </div>
                    </div>
                </form>



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
        <?php
            }
        }
        ?>
    </div>
</div>


<?php
include 'footer.php';
?>