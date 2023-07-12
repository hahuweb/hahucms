<?php

/**
 * Plugins
 * 
 * Handling for display and configure plugins data
 * 
 */

class plugins extends dbConnect
{
    public $plugin_path;

    // values
    public function values()
    {
        $this->plugin_path = '../hw-content/plugins/';
    }

    // Counting file
    public function countFile()
    {
        $this->values();
        $Plugins = array_filter(glob($this->plugin_path . '*', GLOB_ONLYDIR));

        if (count($Plugins) > 0) {
            $allPlugins =  count($Plugins);
            echo $allPlugins . " Plugins";
        }
    }


    /**
     * Public plugins
     */
    public function Plugins()
    {
        $this->values();
        $plugin = array_diff(scandir($this->plugin_path), [".", ".."]);
        $eol = PHP_EOL;

        foreach ($plugin as $f) {
            if (is_dir($this->plugin_path . $f)) {
?>
                <div class="col-lg-6">
                    <div class="card mb-3 md-card plugins">
                        <div class="row g-0">
                            <div class="col">
                                <div class="p-3 p-md-3 p-xl-3">
                                    <?php
                                    $this->logo($f);
                                    ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <?php
                                    $this->name($f);
                                    ?>
                                    <br />
                                    <br />
                                    <div class="d-flex bd-highlight">

                                        <div class="p-1 bd-highlight">
                                            <a class="btn btn-sm btn-outline-secondary" href="plugin-setting.php?public_plugin=<?php echo $f ?>">Setting</a>
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
 * plugins name
 */
    public function name($f)
    {
        if (file_exists($this->plugin_path . '/' . $f . "/plugin.json")) {
            $file = file_get_contents($this->plugin_path . '/' . $f . '/plugin.json');
            $data = json_decode($file);
            echo '<h5 class="card-title">' . $data->name . '</h5>';
            echo '<p class="card-title">' . $data->description . '</p>';
        } else {
            echo '<h5 class="card-title">' . $f . '</h5>';
        }
    }



    /**
     * plugins logo
     */
    public function logo($logo)
    {
        if (file_exists($this->plugin_path . $logo . "/logo.png")) {
            echo  '<img src="' . $this->plugin_path . $logo . "/logo.png" . '" class="card-img-top" alt="...">';
        } else if (file_exists($this->plugin_path . $logo . "/logo.jpg")) {
            echo  '<img src="' . $this->plugin_path . $logo . "/logo.jpg" . '" class="card-img-top" alt="...">';
        } else if (file_exists($this->plugin_path . $logo . "/logo.jpeg")) {
            echo  '<img src="' . $this->plugin_path . $logo . "/logo.jpeg" . '" class="card-img-top" alt="...">';
        } else if (file_exists($this->plugin_path . $logo . "/logo.ico")) {
            echo  '<img src="' . $this->plugin_path . $logo . "/logo.ico" . '" class="card-img-top" alt="...">';
        } else {
            echo '<div class="text-center ">
                <i class="fa-solid fa-image" style="font-size:40px"></i>
                </div>
                ';
        }
    }

}
