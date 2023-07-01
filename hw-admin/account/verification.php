<?php

session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['user_password'])) {
    header("Location: hw-login.php");
    exit();
}

// Include files
require 'load.php';

// Users table
$hw_users = new users();

// User verification 
$verify = new verification();

// values
$value = new values();

// data
$data = new data();

// db connect
$connect = $hw_users->db_connect();

// limit login attempt 
$limit = new limitLogin();
$limit = $limit->setting('hw_setting');
?>
<div class="signin-modle">

    <h6 class="display-6 text-center">Hahu Web</h6>

    <?php

    // email and password
    if (isset($_SESSION['username']) && isset($_SESSION['user_password'])) {
        $username = $_SESSION['username'];
        $user_password = $_SESSION['user_password'];

        // select user
        $get_email = $hw_users->verify('hw_users', $username, $user_password);
        $rows = ($get_email);
        if ($rows->num_rows == TRUE) {
            $row = $get_email->fetch_assoc();

            // check verification code
            if (isset($_POST['checkcode'])) {
                $check = $verify->checkOTP();
            }

    ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class=" form-group">

                <label>Activate</label>
                <input type="text" name="code" class="form-control" placeholder="Activate" required="" />
                <br />
                
                <label class="firstname">First Name</label>
                <input type="text" name="firstname" class="form-control firstname" placeholder="First Name" tabindex="-1" autocomplete="nope" />

                <button type="submit" name="checkcode" class="btn btn-outline-secondary">Next</button>
                <br />
                <br />

                <p class="text-muted p-2">Chack your email for varfication code. </p>
            </form>


    <?php
        }
    }
    ?>
</div>

<?php

// Script
require 'script.php';
?>