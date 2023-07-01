<?php

/**
 * Admin User Page
 *
 * Handles authentication, registering, resetting passwords, forgot password,
 * and other user handling.
 *
 */

session_start();


// Include files
require 'load.php';

$value = new values();
$data = new data();
$tables = new users();
$limit = new limitLogin();

// Check table is created
$get_table = $tables->tables(DB_NAME);
$limit = $limit->setting();

?>

<div class="signin-modle">

    <?php

    // Check user registered 
    $all_users = $tables->all_users('hw_users');
    $rows_user = ($all_users);
    if ($rows_user->num_rows == true) {
    ?>
        <h6 class="display-6 text-center">Hahu Web</h6>

        <?php
        // Login users
        if (isset($_POST['signin'])) {
            $login = new login;
        }

        // Lost password
        if (isset($_GET['lostpassword'])) {
            if (isset($_POST['checkemail'])) {
                $emailClass = new checkEmail();
            }

        ?>

            <!--Lost password form-->
            <form action="<?php echo htmlspecialchars('login.php?lostpassword'); ?>" method="post" class="form-group" name="ulg">

                <label>Email</label>
                <input type="mail" name="email_phone" class="form-control" placeholder="Email" required />
                <br />
                <label class="firstname">First Name</label>
                <input type="text" name="firstname" class="form-control firstname" placeholder="First Name" tabindex="-1" autocomplete="nope" />
                <button type="submit" name="checkemail" class="btn btn-outline-secondary sf">Next</button>
                <br />
                <br />
            </form>
            <p class="text-muted p-2">
                You will receive an email message to reset your password.
            </p>
        <?php
        } else {

        ?>

            <!--Login form-->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-group" name="ulg">

                <label>User Name</label>
                <input type="text" name="username" class="form-control" placeholder="User Name" required/>
                <br />

                <label>Password</label>
                <input type="password" name="user_password" class="form-control" placeholder="Password" required/>
                <br />

                <label class="firstname">First Name</label>
                <input type="text" name="firstname" class="form-control firstname" placeholder="First Name" tabindex="-1" autocomplete="nope" />
                <div class="mb-4 d-flex justify-content-between">
                    <button type="submit" name="signin" class="btn btn-outline-secondary sf">Login</button>
                    <a href="login.php?lostpassword" class="text-end">Lost your password?</a>
                </div>

            </form>
        <?php
        }
    } else {
        ?>
        <h6 class="display-6 text-center">Hahu Web</h6>
        <?php

        // Signup users
        if (isset($_POST['signup'])) {
            $login = new signup;
        }
        ?>

        <!--Sign up form-->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-group" name="ulg">

            <label>User Name</label>
            <input type="text" name="username" class="form-control" placeholder="Login Name" required/>
            <br />

            <label>Email</label>
            <input type="email" name="email_phone" class="form-control" placeholder="Email" required/>
            <br />

            <label>Password</label>
            <input type="password" name="user_password" id="password" class="form-control" placeholder="Password" required/>
            <br />

            <label class="firstname">First Name</label>
            <input type="text" name="firstname" class="form-control firstname" placeholder="First Name" tabindex="-1" autocomplete="nope" />


            <div class="text-center">
                <div class="ps-result" id="ps-result"></div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="py-3">
                    <button type="submit" name="signup" class="btn btn-outline-secondary">Create</button>
                </div>
                <div class="py-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary generate" style="margin-top: 10px;" onclick="gfg_Run()">Generate Password</button>
                </div>
            </div>
            <br />
        </form>
    <?php
    }

    ?>
</div>

<?php
// footer
require 'script.php';
?>