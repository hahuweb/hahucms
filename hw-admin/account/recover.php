<?php

/**
 * Recover
 *
 * Handles for recover lost password.
 *
 */

session_start();
if (!isset($_SESSION['ID'])) {
    header("Location: login.php");
    exit();
}

// Include files
require 'load.php';

?>
<div class="signin-modle">

    <h6 class="display-6 text-center">Recover Password</h6>
    <?php
    $recover = new recover;
    if (isset($_POST['save'])) {
        $form = $recover->recoverPass($_SESSION['id']);
    }
    ?>
    <form action="" method="post" class=" form-group">

        <label>Password</label>
        <input type="password" name="user_password" class="form-control" id="password" placeholder="Password" required/>
        <br />

        <label>Rename Password</label>
        <input type="password" name="rename_password" class="form-control" id="re-password" placeholder="Password" required/>
        <br />
        <div class="text-center">
            <div class="ps-result p-2" id="ps-result"></div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="py-3">
                <button type="submit" name="save" class="btn btn-outline-secondary btn-md ">Save</button>
            </div>
            <div class="py-2">
                <button type="button" class="btn btn-md btn-outline-secondary generate" style="margin-top: 10px;" onclick="genPassword()">Generate</button>
                <a class="btn btn-md text-muted" href="../index.php">Skip</a>
            </div>
        </div>

        <br />
</div>

<?php

// Script
require 'script.php';
?>