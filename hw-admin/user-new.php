<?php

/**
 * Users
 * 
 * Add new admin users
 */

include 'header.php';
?>

<div class="content-wrapper" id="page-content">
    <div class="container-fluid">

        <div class="mb-2 d-flex justify-content-between">
            <h5 class="">Add New User</h5>
        </div>
        <?php
        if ($row['user_role'] == 'Administrator') {
        ?>
            <div class="py-1"></div>
            <div class="row ">
                <div class="col-lg-5">
                    <?php
                    if (isset($_POST['add_user'])) {
                        $add = new newUser();
                    }
                    ?>
                </div>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class=" form-group">
                <div class="row ">
                    <div class="col-lg-5">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-lg-5">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email_phone" placeholder="Email">
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-lg-5">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="user_password" id="password" placeholder="Password">
                        <div class=" d-flex">
                            <div class="p-2 flex-grow-1 bd-highlight">
                                <div class="ps-result" id="ps-result"></div>
                            </div>
                            <div class="p-2 bd-highlight">
                                <button type="button" class="btn btn-sm btn-outline-secondary generate" onclick="gfg_Run()">Generate</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-lg-5">
                        <label class="form-label">Role</label>
                        <select class="form-select" name="user_role">
                            <option selected value="Administrator">Administrator</option>
                            <option value="Author">Author</option>
                            <option value="Editor">Editor</option>
                        </select>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-lg-5">
                        <label class="form-label">Tow step varification</label>
                        <select class="form-select" name="verification">
                            <option selected value="ON">ON</option>
                            <option value="OFF">OFF</option>
                        </select>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-lg-5">
                        <div class="d-flex bd-highlight">
                            <div class="p-2 flex-grow-1 bd-highlight">
                                <img src="" class="lb-img rounded-circle" id="lb-img" style="width:60px;height:60px;" />
                            </div>
                            <div class="p-2 bd-highlight">
                                Profile Picture
                            </div>
                            <div class=" p-2 bd-highlight">
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#MediaModal">
                                    Set Image
                                </button>
                            </div>
                        </div>
                        <button class="btn btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#hidden_input">
                            Show Image
                        </button>
                        <div class="collapse navbar-collapse" id="hidden_input">
                            <br />
                            <br />
                            <input type="text" id="result" class="form-control" name="img">
                        </div>
                    </div>
                </div>
                <br />
                <div class="row ">
                    <div class="col-lg-10">
                        <button class="btn btn-outline-secondary" type="submit" name="add_user">Add</button>
                    </div>
                </div>

            </form>

            <div class="py-5"></div>


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
        ?>
    </div>
</div>

<?php
include 'footer.php';
?>