<?php

/**
 * Welcome  Page
 *
 * Handles for createing tables.
 *
 */


// Include files
require 'load.php';

// Show tables
$tables = new users();
$data = new tables();
$get_table = $tables->createTable(DB_NAME);
$result_tb = ($get_table);
if ($result_tb->num_rows == true) {

?>
    <div class="welcome">
        <div class="p-3 m-3 mb-3">
            <h4 class="text-muted">Success!</h4>
            <hr />
            <p>Hahu CMS has been installed. Thank you, and enjoy!</p>
        
        <br />
        <br />
        <a class="btn btn-md btn-outline-secondary" href="login.php">Create Account</a>
        </div>
    </div>
<?php
} else {

    // Create all tables
    $query = file_get_contents('../../hw-includes/sql/table.sql');
    if ($conn->multi_query($query) === true) {
        redirect('welcome.php');
    } else {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for install hahu CMS </b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
    //$create = $data->createTable();
}

?>


<?php

// Secript
require 'script.php';
?>