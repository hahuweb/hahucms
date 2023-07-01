<?php

/**
 * Setup
 * 
 * Retrieves and creates the config.php file.
 */

require '../function.php';
require 'content.php';

class start
{
    public $file;
    public $server_name;
    public $user_name;
    public $user_password;
    public $db;
    public $error;

    public function values()
    {
        $this->file = '../../hw-includes/config/config.php';
        $this->server_name = filter_input(INPUT_POST, 'server_name');
        $this->user_name = filter_input(INPUT_POST, 'user_name');
        $this->user_password = filter_input(INPUT_POST, 'user_password');
        $this->db = filter_input(INPUT_POST, 'db');
        $this->error;
    }

    public function validate()
    {
        if (empty($this->server_name)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter server name <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->user_name)) {
            echo  $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter user name<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            //} elseif (empty($this->user_password)) {
            //    echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter password <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->db)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter database <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

    public function add()
    {
        $this->values();
        $this->validate();
        if (empty($this->error)) {
            $content = '
<?php

/**
 * Configuration
 *
 * 
 */


 // ** Database settings - You can get this info from your web host ** //
 /**  Database name */
 define("DB_NAME", "' . "$this->db" . '");

/** Database username */
define("DB_USER", "' . "$this->user_name" . '");

/** Database password */
define("DB_PASS", "' . "$this->user_password" . '");

/** Database hostname */
define("DB_SERVER", "' . "$this->server_name" . '");

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
  die("Connect filed:" . $conn->connect_error);
} 
';

            if (file_put_contents($this->file, $content)) {
                redirect('welcome.php');
            }
        }
    }

    
}

$start = new start();

if (file_exists('../../hw-includes/config/config.php')) {
?>
    <div class="config-content">
        <p>The file config.php already exists.
            If you need to reset any of the configuration items in this file, please delete it first.
            You may try <a href="welcome.php">installing now.</a></p>
    </div>
<?php
} else {
?>
    <div class="config-content">

        <?php
        if (isset($_POST['save'])) {
            $add = $start->add();
        }
        ?>
        <div class="p-1 m-1">
            <h4>Hahu Web</h4>
            <p class="small">Below you should enter your database connection details. If you are not sure about these, contact your host.</p>
        </div>

        <form action="" method="post" class="form-group">
            <div class="row g-2">
                <div class="col-sm-12 col-md-6">
                    <label>Database Name</label>
                    <input type="text" name="db" class="form-control" value="hahuweb" />
                </div>
                <div class="col-sm-12 col-md-6">
                    <p class="text-muted">The name of the database you want to use with Hahuweb.</p>
                </div>
            </div>
            <div class="py-1"></div>

            <div class="row g-2">
                <div class="col-sm-12 col-md-6">
                    <label>Username</label>
                    <input type="text" name="user_name" class="form-control" value="username" />
                </div>
                <div class="col-sm-12 col-md-6">
                    <p class="text-muted">Your database user name.</p>
                </div>
            </div>
            <div class="py-1"></div>

            <div class="row g-2">
                <div class="col-sm-12 col-md-6">
                    <label>Password</label>
                    <input type="text" name="user_password" class="form-control" value="password" />
                </div>
                <div class="col-sm-12 col-md-6">
                    <p class="text-muted">Your database user password.</p>
                </div>
            </div>
            <div class="py-1"></div>

            <div class="row g-2">
                <div class="col-sm-12 col-md-6">
                    <label>Database Host</label>
                    <input type="text" name="server_name" class="form-control" value="localhost" />
                </div>
                <div class="col-sm-12 col-md-6">
                    <p class="text-muted"> You should be able to get this info from your web host, if localhost does not work. </p>
                </div>
            </div>
            <div class="py-3"></div>

            <button type="submit" name="save" class="btn btn-outline-secondary">Submit</button>
        </form>
    </div>
<?php
}
?>

<style>
    .config-content {
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 96%;
        height: auto;
        margin: 50px auto;
        padding: 20px 10px 10px 20px;
        content: "";
        display: table;
        clear: both;
        background: #fff;
        border: 1px solid #ccc;
    }

    body {
        background: #f9f9f9;
    }

    .form-control {
        background: none;
    }

    .signin-modle a {
        color: #222;
        text-decoration: none;
        margin-top: 10px;
    }

    @media only screen and (min-width: 768px) {
        .config-content .row p {
            margin: 30px 0px 0px 10px;
        }
    }


    @media only screen and (min-width: 992px) {
        .config-content {
            width: 60%;
        }

    }
</style>
<?php
//} else {
//  redirect('welcome.php');
//}
?>



<?php

require 'script.php';
?>