<?php

/**
 * Themes
 * 
 * Handle for add, remove and delete theme
 * 
 */


class themes extends dbConnect
{

    public $theme_folder;
    public $pagesInfo;
    public $themeInfo;


    // values
    public function values()
    {
        $this->theme_folder = '../hw-content/themes/';
        $this->pagesInfo = '../hw-includes/setting/site/pages.json';
        $this->themeInfo = '../hw-includes/setting/site/theme.json';
    }

// theme data
    public function themeData()
    {
        $this->values();
        $themeFile = file_get_contents($this->themeInfo);
        $themeData = json_decode($themeFile);
        return $themeData;
    }


    // Counting file
    public function countFile()
    {
        $this->values();
        $theme = array_filter(glob($this->theme_folder . '*', GLOB_ONLYDIR));
        if (count($theme) > 0) {
            echo "" . count($theme) . " Themes";
        }
    }


    /**
     * Active theme
     */
    public function activeTheme($themeName)
    {
        $this->values();
        $theme = array_diff(scandir($this->theme_folder), [".", ".."]);
        $eol = PHP_EOL;

        foreach ($theme as $f) {
            if (is_dir($this->theme_folder . $f)) {
                if ($themeName == $f) {
                    $delName = $f;
                    $remove = $f . 'remo';
?>
                    <div class="col-md-6">
                        <div class="card mb-3 md-card media-file">
                            <?php
                            $this->screenshot($f);

                            ?>
                            <div class="card-body">
                                <div class="d-flex bd-highlight">
                                    <div class="me-auto p-2 bd-highlight">

                                        <h5 class="card-title">
                                            <?php
                                            $this->themeName($f);
                                            ?>
                                        </h5>

                                    </div>
                                    <div class="flex-shrink-1 bd-highlight">
                                        <?php
                                        if (isset($_POST[$remove])) {
                                            $this->removeThemes();
                                        }
                                        ?>
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="installTheme">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#<?php echo $delName; ?>">More</button>
                                            <button type="submit" name="<?php echo $remove ?>" class="btn btn-sm btn-outline-secondary">Remove</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="<?php echo $delName; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" style="background: none;border:none">
                            <div class="modal-content">
                                <div class="card mb-3" style="background: none;border:none">
                                    <div class="row g-2">
                                        <div class="col-lg-7 bg-light">
                                            <?php
                                            $this->screenshot($f);

                                            ?>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="m-3">
                                                <?php
                                                $this->themeFullName($f);
                                                ?>
                                                <div class="p-2 bd-highlight">

                                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="deleteTheme">
                                                        <input type="text" name="theme_name" value="<?php echo $delName ?>" hidden />
                                                        <button type="submit" name="<?php echo $remove ?>" class="btn btn-sm btn-outline-secondary">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <?php
                }
            }
        }
    }

    /**
     * Other themes
     * 
     */
    public function othersThemes($themeName)
    {
        $this->values();
        $theme = array_diff(scandir($this->theme_folder), [".", ".."]);
        $eol = PHP_EOL;

        foreach ($theme as $f) {
            if (is_dir($this->theme_folder . $f)) {
                if ($themeName != $f) {
                    $delName = $f . 'rand';
                    $activate = $f . 'acti';
                    $folder_path = $this->theme_folder . $f;

                ?>
                    <div class="col-md-6">
                        <div class="card mb-3 md-card media-file">
                            <?php
                            $this->screenshot($f);
                            ?>
                            <div class="card-body">
                                <div class="d-flex bd-highlight">
                                    <div class="p-2 flex-grow-1 bd-highlight">
                                        <?php
                                        $this->themeName($f);
                                        ?>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#<?php echo $delName; ?>">More</button>
                                    </div>
                                    <div class="p-2 bd-highlight">

                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="installTheme">
                                            <button type="submit" name="<?php echo $activate ?>" class="btn btn-sm btn-outline-secondary">Activate</button>
                                        </form>
                                    </div>
                                </div>

                                <?php
                                if (isset($_POST[$activate])) {
                                    if (file_exists($this->theme_folder . $f . "/data/data.php")) {
                                        require_once $this->theme_folder  . $f . "/data/data.php";
                                        $path = 'hw-content/themes/' . $f;
                                        $today = date('y-m-d');
                                        $this->addTheme($f, $path, $today);
                                        $this->addPages($header, $home, $footer);
                                    } else {
                                        echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Theme file corrupt </b> Reinstall again <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                                    }
                                }
                                if (isset($_POST[$delName])) {
                                    $this->deleteTheme($folder_path);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="<?php echo $delName; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" style="background: none;border:none">
                            <div class="modal-content">
                                <div class="card mb-3" style="background: none;border:none">
                                    <div class="row g-2">
                                        <div class="col-lg-7 bg-light">
                                            <?php
                                            $this->screenshot($f);
                                            ?>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="m-3">
                                                <?php
                                                $this->themeFullName($f);
                                                ?>
                                                <div class="p-2 bd-highlight">
                                                    <form action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); 
                                                                    ?>" method="post" id="deleteTheme">
                                                        <button type="submit" name="<?php echo $delName ?>" class="btn btn-sm btn-outline-secondary">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                            </div>
                <?php
                }
            }
        }
    }


    /**
     * All themes
     */
    public function displayThemes()
    {
        $this->values();

        $theme = array_diff(scandir($this->theme_folder), [".", ".."]);
        $eol = PHP_EOL;

        foreach ($theme as $f) {
            if (is_dir($this->theme_folder . $f)) {
                $delName = $f . 'rand';
                $folder_path = $this->theme_folder . $f;
                ?>
                <div class="col-md-6">
                    <div class="card mb-3 md-card media-file">
                        <?php
                        $this->screenshot($f);

                        ?>
                        <div class="card-body">
                            <div class="d-flex bd-highlight">
                                <div class="p-2 flex-grow-1 bd-highlight">
                                    <?php
                                    $this->themeName($f);
                                    ?>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#<?php echo $delName; ?>">More</button>
                                </div>
                                <div class="p-2 bd-highlight">

                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="installTheme">
                                        <button type="submit" name="<?php echo $f ?>" class="btn btn-sm btn-outline-secondary">Activate</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                            if (isset($_POST[$f])) {
                                if (file_exists($this->theme_folder  . $f . "/data/data.php")) {
                                    require_once $this->theme_folder  . $f . "/data/data.php";
                                    $path = 'hw-content/themes/' . $f;
                                    $today = date('y-m-d');
                                    $this->addTheme($f, $path, $today);
                                    $this->addPages($header, $home, $footer);
                                    redirect('themes.php');
                                } else {
                                    echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Theme file corrupt </b> Reinstall again <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                                }
                            }

                            if (isset($_POST[$delName])) {
                                $this->deleteTheme($folder_path);
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="<?php echo $delName; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" style="background: none;border:none">
                        <div class="modal-content">
                            <div class="card mb-3" style="background: none;border:none">
                                <div class="row g-2">
                                    <div class="col-lg-7 bg-light">
                                        <?php
                                        $this->screenshot($f);
                                        ?>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="m-3">
                                            <?php
                                            $this->themeFullName($f);
                                            ?>
                                            <div class="p-2 bd-highlight">
                                                <form action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); 
                                                                ?>" method="post" id="deleteTheme">
                                                    <button type="submit" name="<?php echo $delName ?>" class="btn btn-sm btn-outline-secondary">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </div>
            <?php

            }
        }
    }


    /**
     * Theme name
     */
    public function themeName($f)
    {
        $this->values();
        if (file_exists($this->theme_folder . $f . "/data/theme.json")) {

            $file = file_get_contents($this->theme_folder . $f . '/data/theme.json');
            $data = json_decode($file);

            ?>
            <h5 class="card-title">
            <?php
            echo $data->name;
        } else {
            echo $f;
        }
            ?>
            </h5>
            <?php
        }


        /**
         * Full theme name
         */
        public function themeFullName($f)
        {
            $this->values();
            if (file_exists($this->theme_folder . $f . "/data/theme.json")) {
                $file = file_get_contents($this->theme_folder . $f . '/data/theme.json');
                $data = json_decode($file);
            ?>
                <h5><?php echo $data->name; ?></h5>
                <p>Version: <?php echo $data->version; ?></p>
                <p>Author: <?php echo $data->author; ?></p>
                <p><?php echo $data->description; ?></p>
                <br />
                <br />
                <div class="d-flex bd-highlight">
                    <div class="p-2 bd-highlight">
                        <a href="<?php echo $data->homepage; ?>" class="btn btn-sm btn-outline-secondary" target="_blank">Visite</a>
                    </div>

        <?php
            } else {
                echo '<h5>' . $f . '</h5>';
            }
        }


        /**
         * Screen shoot
         */
        public function screenshot($screenshot)
        {
            $this->values();
            if (file_exists($this->theme_folder . $screenshot . "/data/screenshot.png")) {
                echo  '<img src="' . $this->theme_folder . $screenshot . "/data/screenshot.png" . '" class="card-img-top" alt="...">';
            } else if (file_exists($this->theme_folder . $screenshot . "/data/screenshot.jpg")) {
                echo  '<img src="' . $this->theme_folder . $screenshot . "/data/screenshot.jpg" . '" class="card-img-top" alt="...">';
            } else if (file_exists($this->theme_folder . $screenshot . "/data/screenshot.jpeg")) {
                echo  '<img src="' . $this->theme_folder . $screenshot . "/data/screenshot.jpeg" . '" class="card-img-top" alt="...">';
            } else {
                echo  '<img src="assets/img/img.png"  class="card-img-top" alt="...">';
            }
        }


        /**
         * Add theme name, url and date
         */
        public function addTheme($themeName, $themeURL, $date)
        {

            $input_data = array(
                "theme_name" => $themeName,
                "theme_url" =>  $themeURL,
                "create_date" =>  $date
            );
            $json = json_encode($input_data);
            if (file_put_contents($this->themeInfo, $json)) {
                //refresh('themes.php');
            }
        }




        /**
         * Add theme header, home and footer page
         */
        public function addPages($header, $home, $footer)
        {
            $input_data = array(
                "header" => $header,
                "home" =>  $home,
                "footer" =>  $footer
            );
            $json = json_encode($input_data);
            if (file_put_contents($this->pagesInfo, $json)) {
               // echo '<meta http-equiv="refresh" content="0" >';
            }
        }


        /**
         * remove theme name, url and date
         */
        public function removePages()
        {
            $input_data = array(
                "header" => '',
                "home" =>  '',
                "footer" =>  ''
            );
            $json = json_encode($input_data);
            if (file_put_contents($this->pagesInfo, $json)) {
                //echo '<meta http-equiv="refresh" content="0" >';
            }
        }


         /**
         * Remove theme header, home and footer page
         */
        public function removeTheme()
        {
            $input_data = array(
                "theme_name" => '',
                "theme_url" =>  '',
                "create_date" =>  ''
            );
            $json = json_encode($input_data);
            if (file_put_contents($this->themeInfo, $json)) {
                redirect('themes.php');
            }
        }
        public function removeThemes()
        {
            $this->removePages();
            $this->removeTheme();
        }


      


        /**
         * delete theme folder
         */
        public function deleteTheme($folderName)
        {

            if (is_dir($folderName))

                $folderHandle = opendir($folderName);


            if (!$folderHandle)

                return false;


            while ($file = readdir($folderHandle)) {

                if ($file != "." && $file != "..") {

                    if (!is_dir($folderName . "/" . $file)) {

                        unlink($folderName . "/" . $file);
                        redirect('themes.php');
                    } else {

                        $this->deleteTheme($folderName . '/' . $file);
                        redirect('themes.php');
                    }
                }
            }

            closedir($folderHandle);

            rmdir($folderName);

            return true;
        }
    }
