<?php

/**
 * Editor
 * 
 * Edit web pages
 */


// site data
require 'hw-includes/site/load.php';
$data = new site();

$pages = new pages();

if (isset($_GET['page_name'])) {
    $page_name = $_GET['page_name'];
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Editor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="icon" href="" type="image/x-icon">

        <!-- css -->
        <link rel="stylesheet" href="hw-includes/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="hw-includes/assets/css/swiffy-slider.min.css" />
        <link rel="stylesheet" href="hw-includes/assets/css/style.css" />

        <?php
        // theme js
        $css = $data->css();
        ?>
        <!--icons-->
        <link rel="stylesheet" href="hw-includes/assets/fontawesome/css/fontawesome.css" />
        <link rel="stylesheet" href="hw-includes/assets/fontawesome/css/solid.css" />
        <link rel="stylesheet" href="hw-includes/assets/fontawesome/css/brands.css" />


        <script src="hw-includes/assets/js/jquery-3.1.0.min.js"></script>
        <script src="hw-includes/assets/js/bootstrap.bundle.min.js"></script>
        <script src="hw-includes/assets/js/swiffy-slider.min.js"></script>
        <script src="hw-includes/assets/js/swiffy-slider-extensions.js"></script>
        <script src="hw-content/plugins/vvveb/js/main.js"></script>

        <?php
        // theme js
        $js = $data->js();
        ?>

        <style>
            html,
            body {
                width: 100%;
                height: 100%;
            }
        </style>
        <style id="vvvebjs-styles"></style>
    </head>

    <body>
        <?php
            $theme = file_get_contents('hw-includes/setting/site/theme.json');
            $theme_data = json_decode($theme);
            if ($theme_data->theme_url == true) {
                $file = glob($theme_data->theme_url . '/*.*');
                foreach ($file as $key => $page) {
                    $supported_file = array(
                        'html',
                        'php'
                    );
                    $ext = strtolower(pathinfo($page, PATHINFO_EXTENSION));
                    $path_parts = pathinfo($page, PATHINFO_EXTENSION);
                    $pathInfo = pathinfo($page);
                    $filename = $pathInfo['filename'];
                    if (in_array($ext, $supported_file)) {
                        if ($filename == $page_name) {
                            $url = $theme_data->theme_url.'/'.$filename.'.'.$path_parts;
                            require $url;

                        }
                    }
                }
            }else{
                $file = glob("hw-includes/pages/*.*");
                foreach ($file as $key => $page) {
                    $supported_file = array(
                        'html',
                        'php'
                    );
                    $ext = strtolower(pathinfo($page, PATHINFO_EXTENSION));
                    $path_parts = pathinfo($page, PATHINFO_EXTENSION);
                    $pathInfo = pathinfo($page);
                    $filename = $pathInfo['filename'];
                    if (in_array($ext, $supported_file)) {
                        if ($filename == $page_name) {
                            $url ='hw-includes/pages/'.$filename.'.'.$path_parts;
                            require $url;
                        }
                    }
                } 
            }
        ?>
    </body>

    </html>
<?php

}
?>