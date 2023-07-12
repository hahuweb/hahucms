<?php

/**
 *  App
 * 
 *  User, pages & theme data
 */

session_start();
if (!isset($_SESSION['ID'])) {
    header("Location: ../../../hw-admin/account/login.php");
    exit();
}

/** Define ABSPATH as this file's directory */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

// config
require_once ABSPATH . '../../../hw-includes/config/config.php';

// db
require_once ABSPATH . '../../../hw-includes/config/class-db.php';

// data
require_once ABSPATH . '../../../hw-includes/app/class-pages.php';

require_once ABSPATH . '../../../hw-includes/app/class-users.php';
require_once ABSPATH . '../../../hw-includes/controllers/class-values.php';
require_once ABSPATH . '../../../hw-includes/function.php';


$pages = new pages();

function getAsset()
{

    if (file_exists('../../../hw-includes/setting/site/theme.json')) {
        $theme = '../../../hw-includes/setting/site/theme.json';
        $file = file_get_contents($theme);
        $data = json_decode($file);
        if ($data->theme_url == true) {
            return $asset = site_url() . '/'. $data->theme_url . '/css/main.css';
        }
    } else {
        return $asset = site_url() . "'../../../hw-includes/assets/css/style.css'";
    }
}

function allPages($filename)
{
    $allFolder = glob('../../../hw-includes/pages/*.*');
    foreach ($allFolder as $key => $allPages) {
        $allsupported_file = array(
            'html'
        );
        $allext = strtolower(pathinfo($allPages, PATHINFO_EXTENSION));
        $allpath_parts = pathinfo($allPages, PATHINFO_EXTENSION);
        $allpathInfo = pathinfo($allPages);
        $allfilename = $allpathInfo['filename'];
        if (in_array($allext, $allsupported_file)) {
            if ($filename != $allfilename) {
?>
                <li class="nav-item">
                    <a class="nav-link" href="editor.php?page_name=<?php echo $allfilename ?>">
                        <label for="<?php echo $allfilename ?>">
                            <span><?php echo $allfilename ?></span>
                        </label>
                    </a>
                </li>
            <?php
            }
        }
    }
}

function themePages($filename, $path)
{
    $allFolder = glob($path . '/*.*');
    foreach ($allFolder as $key => $allPages) {
        $allsupported_file = array(
            'html'
        );
        $allext = strtolower(pathinfo($allPages, PATHINFO_EXTENSION));
        $allpath_parts = pathinfo($allPages, PATHINFO_EXTENSION);
        $allpathInfo = pathinfo($allPages);
        $allfilename = $allpathInfo['filename'];
        if (in_array($allext, $allsupported_file)) {
            if ($filename != $allfilename) {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="editor.php?page_name=<?php echo $allfilename ?>">
                        <label for="<?php echo $allfilename ?>">
                            <span><?php echo $allfilename ?></span>
                        </label>
                    </a>
                </li>
<?php
            }
        }
    }
}
