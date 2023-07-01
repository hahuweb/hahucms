<?php

/**
 * Users
 * 
 * Editing admin users
 */

include 'header.php';
$forms = new edit();

?>

<div class="content-wrapper" id="page-content">
    <div class="container-fluid">
        <h4>Edit Profile</h4>
        <?php

        ?>
        <div class="py-3"></div>
        <?php

        if (isset($_GET['id'])) {
            $user_id = $_GET['id'];
            $get_users = $hw_users->view_user('hw_users', $user_id);

            $rows = ($get_users);
            if ($rows->num_rows == TRUE) {
                $row_users = $get_users->fetch_assoc();

                if (isset($_POST['edit_role'])) {
                    $name = $forms->editRole($user_id);
                }
        
                if (isset($_POST['delete_user'])) {
                    $name = $forms->deleteUser($user_id);
                }
        ?>
                <div class="row">
                    <div class="col-lg-6">
                        <?php if ($row_users['user_img'] == true) {
                        ?>
                            <img class="user_img" src="<?php echo $row_users['user_img']; ?>" />
                        <?php
                        } else {
                        ?>
                            <div class="profile_Img"></div>
                        <?php
                        }
                        ?>
                        <br />
                        <br />
                        <h4 class="user_name"><?php echo $row_users['username']; ?></h4>
                        <p><?php echo $row_users['email_phone']; ?></p>
                    </div>
                    <div class="col-lg-6 p-3">

                        <p>Role: <?php echo $row_users['user_role']; ?></p>
                        <p>Tow step verfication: <?php echo $row_users['verification']; ?></p>
                    </div>
                </div>

                <br />
                <div class="py-3"></div>
                <?php
                if ($row['user_role'] == 'Administrator') {
                ?>
                    <h4>Edit</h4>
                    <br />
                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#edit_role" aria-controls="offcanvasRight">Role</button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Delete
                    </button>
                <?php
                }
                ?>
            
                <div class="offcanvas offcanvas-end" tabindex="-1" id="edit_role" aria-labelledby="topOffcanvasLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Role</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <hr />
                    <div class="py-2"></div>
                    <div class="offcanvas-body">
                        <form action="" method="post" class=" form-group">
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
                            <br />
                            <button class="btn btn-outline-secondary" name="edit_role" type="submit">Save</button>
                        </form>
                    </div>
                </div>

                <!-- delete user modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want delete?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><?php echo $row_users['username']; ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
                                <form action="" method="post" class="form-group">
                                    <button class="btn btn-md btn-danger" name="delete_user" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }

        ?>
        <div class="py-5"></div>

    </div>
</div>


<?php
include 'footer.php';
?>