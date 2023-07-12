<?php

/**
 * Profile
 * 
 * Admin user profile
 */
include 'header.php';
$today = date('y-m-d');
?>

<div class="content-wrapper" id="page-content">
    <div class="container-fluid">
        <h4>Profile</h4>
        <div class="py-3"></div>

        <?php

        /**
         * form
         */
        $forms = new edit();

        // profile 
        if (isset($_POST['edit_profile'])) {
            $userProfile = $forms->editAll($id);
        }

        // password 
        if (isset($_POST['edit_psss'])) {
            $userPass = $forms->editPass($id);
        }

        // picture 
        if (isset($_POST['edit_img'])) {
            $userImg = $forms->editImg($id);
        }
        ?>
        <div class="row">
            <div class="col-lg-6">
                <?php if ($row['user_img'] == true) {
                ?>
                    <img class="user_img" src="../<?php echo $row['user_img']; ?>" />
                <?php
                } else {
                ?>
                    <div class="profileImg"></div>
                <?php
                }
                ?>
                <br />
                <br />
                <h4><?php echo ucfirst($row['username']); ?></h4>
                <p><?php echo $row['email_phone']; ?></p>

            </div>
            <div class="col-lg-6">
                <p><b class="">Role:</b> <?php echo $row['user_role']; ?></p>
                <p><b class="">Tow step aut:</b> <?php echo $row['verification']; ?></p>
                <p><b class="">Last Login:</b>
                    <?php
                    if ($row['last_login'] == '0000-00-00') {
                    } else {
                        dateDeff($row['last_login'], $today);
                    }
                    ?>
                    </span>
                </p>
                <p><b class="">Location:</b>
                    <?php
                    if ($row['user_location'] == '127.0.0.1' or $row['user_location'] == 'localhost') {
                        echo $row['user_location'];
                    } else {
                        $ipdat = @json_decode(file_get_contents(
                            "http://www.geoplugin.net/json.gp?ip=" . $row['user_location']
                        ));
                        echo $ipdat->geoplugin_city;
                        echo ', &nbsp;';
                        echo $ipdat->geoplugin_countryName;
                    }
                    ?>
                </p>
                <p><b class="">Device:</b> <?php echo $row['user_device']; ?></p>

            </div>
        </div>


        <br />
        <div class="py-3"></div>
        <h4>Edit</h4>
        <br />
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#edit_all" aria-controls="offcanvasRight">Profile</button>
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#ps" aria-controls="offcanvasRight">Password</button>
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#user-img" aria-controls="offcanvasRight">Picture</button>


        <!-- profile -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="edit_all" aria-labelledby="topOffcanvasLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Edit Profile</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="container">
                <hr />
            </div>
            <div class="offcanvas-body">

                <form action="" method="post" class=" form-group">
                    <div class="row ">
                        <div class="col-lg-12">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" required="">
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-12">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email_phone" value="<?php echo $row['email_phone']; ?>">
                        </div>
                    </div>
                    <?php
                    if ($row['user_role'] == 'Administrator') {
                    ?>
                        <div class="row py-2">
                            <div class="col-lg-12">
                                <label class="form-label">Role</label>
                                <select class="form-select" name="user_role" required="">
                                    <?php
                                    switch ($row['user_role']) {

                                        case 'Administrator':
                                    ?>
                                            <option selected value="<?php echo $row['user_role']; ?>"><?php echo $row['user_role']; ?></option>
                                            <option value="Author">Author</option>
                                            <option value="Editor">Editor</option>
                                        <?php
                                            break;
                                        case 'Author':
                                        ?>
                                            <option selected value="<?php echo $row['user_role']; ?>"><?php echo $row['user_role']; ?></option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="Editor">Editor</option>
                                        <?php
                                            break;
                                        case 'Editor':
                                        ?>
                                            <option selected value="<?php echo $row['user_role']; ?>"><?php echo $row['user_role']; ?></option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="Author">Author</option>
                                    <?php
                                    }

                                    ?>
                                </select>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="row py-2">
                        <div class="col-lg-12">
                            <label class="form-label">Tow step varification</label>
                            <select class="form-select" name="verification" required="">
                                <?php
                                if ($row['verification'] == 'ON') {
                                ?>
                                    <option selected value="<?php echo $row['verification']; ?>"><?php echo $row['verification']; ?></option>
                                    <option value="OFF">OFF</option>

                                <?php
                                } else if ($row['verification'] == 'OFF') {
                                ?>
                                    <option selected value="<?php echo $row['verification']; ?>"><?php echo $row['verification']; ?></option>
                                    <option value="ON">ON</option>

                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <br />
                    <div class="row ">
                        <div class="col-lg-10">
                            <button type="submit" name="edit_profile" class="btn btn-outline-secondary">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end profile -->



        <!-- password  -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="ps" aria-labelledby="topOffcanvasLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Password</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="container">
                <hr />
            </div>
            <div class="offcanvas-body">
                <form action="" method="post" class=" form-group">
                    <input type="password" class="form-control" name="user_password" placeholder="Old Password" required=""> <br />

                    <input type="password" class="form-control" id="password" name="new_password" placeholder="New Password" required=""> <br />

                    <div class="p-2 text-center">
                        <div class="ps-result p-2" id="ps-result"></div>
                    </div>

                    <div class="mb-2 d-flex">
                        <div class="p-2 flex-grow-1 bd-highlight">
                            <button class="btn btn-md btn-outline-secondary" name="edit_psss" type="submit">Edit</button>
                        </div>
                        <div class="p-2 bd-highlight">
                            <button type="button" class="btn btn-sm btn-outline-secondary generate" onclick="genPassword()">Generate</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end password -->


        <!-- profile picture -->
        <div class="offcanvas offcanvas-end" id="user-img" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Profile Picture</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="container">
                <hr />
            </div>
            <div class="offcanvas-body">
                <div class="d-flex bd-highlight">
                    <div class="p-2 flex-shrink-1 bd-highlight">
                        <img src="" class="lb-img rounded-circle" id="lb-img" />
                    </div>
                    <div class="me-auto p-2 bd-highlight">
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#MediaModal">
                            Set Image <i class="fa-solid fa-edit"></i>
                        </button>
                    </div>
                </div>
                <br />
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <button class="btn float-end" type="button" data-bs-toggle="collapse" data-bs-target="#hidden_input">
                                Show
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="collapse navbar-collapse" id="hidden_input">
                                <br />
                                <input type="text" id="result" class="form-control" name="user_img">

                                <br />
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-md btn-outline-secondary" name="edit_img" type="submit">Save</button>
                </form>
            </div>
        </div>
        <!-- end picture -->


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
                                                <input type="file" class="form-control" name="img" id="img" required>
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
                            <button type="button" class="btn btn-outline-secondary save-btn" data-bs-dismiss="modal">Add selected</button>
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