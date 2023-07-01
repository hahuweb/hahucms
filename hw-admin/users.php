<?php

/**
 * Users
 * 
 * All admin users
 */
include 'header.php';

?>

<div class="content-wrapper" id="page-content">
    <div class="container-fluid">
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight">
                <h4>Admin Users</h4>
            </div>
            <?php
            if ($row['user_role'] == 'Administrator') {
            ?>
                <div class="p-2 bd-highlight">
                    <a href="user-new.php" class="btn btn-outline-secondary btn-sm"> <i class="fa-solid fa-plus"></i> Add New</a>
                </div>
            <?php
            }
            ?>
        </div>
        <?php
        if (isset($_POST['add_user'])) {
            $add_user = new newUser();
        }
        ?>
        <div class="py-2"></div>
        <?php
        $get_users = $hw_users->all_users('hw_users');
        $row_users = ($get_users);
        if ($row_users->num_rows == TRUE) {
        ?>
            <div class="table-responsive">
                <table class="table align-middle table-striped">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Tow-Step Verification</th>
                        <th scope="col">Register Date</th>
                        <th scope="col">Edit</th>
                    </tr>
                    <?php
                    while ($row_users = $get_users->fetch_assoc()) {

                    ?>
                        <tr>
                            <td><?php echo $row_users['username']; ?></td>
                            <td><?php echo $row_users['email_phone']; ?></td>
                            <td><?php echo $row_users['user_role']; ?></td>
                            <td><?php echo $row_users['verification']; ?></td>
                            <td>
                                <?php
                                 dateDeff($row_users['reg_date'], current_date());
                                  ?>
                            </td>

                            <td>
                                <?php
                                if ($row['user_role'] == 'Administrator') {
                                ?>
                                    <a href="user-edit.php?id=<?php echo $row_users['ID']; ?>" class="text-muted">Edit </a>

                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
include 'footer.php';
?>