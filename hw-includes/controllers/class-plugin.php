<?php

/**
 * Plugins
 * 
 * Handle upload plugins 
 */

class pluginHandling extends dbConnect
{

    // values
    public $plugin;
    public $plugin_tmp;
    public $plugin_path;
    public $upload_path;
    public $pathPlugin;
    public $pathUpload;
    public $pluginFileType;
    public $error;

    /**
     * Plugins path 
     */
    public function values()
    {
        $this->plugin = $_FILES['plugin']['name'];
        $this->plugin_tmp = $_FILES['plugin']['tmp_name'];
        $this->plugin_path = "../hw-content/plugins/";
        $this->pathPlugin = $this->plugin_path . basename($this->plugin);
        $this->upload_path = "../hw-content/uploads/";
        $this->pathUpload = $this->upload_path . basename($this->plugin);
        $this->pluginFileType = pathinfo($this->pathUpload, PATHINFO_EXTENSION);
        $this->error;
    }

    /**
     * validate 
     */
    public function validat()
    {
        if (empty($this->plugin)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please select theme  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (
            $this->pluginFileType != "zip"

        ) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Sorry, only zip file allowed.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }


    /**
     * Upload public plugins
     */
    public function pluginUpload()
    {

        $this->values();
        $this->validat();
        if (empty($this->error)) {
            if (is_uploaded_file($this->plugin_tmp)) {
                if (move_uploaded_file($this->plugin_tmp, $this->pathUpload)) {
                    $zip = new ZipArchive;
                    if ($zip->open($this->pathUpload) === TRUE) {
                        $zip->extractTo($this->plugin_path);
                        $zip->close();
                        redirect('plugins.php');
                    } else {
                        echo 'failed';
                    }
                    if (file_exists($this->pathUpload)) {
                        unlink($this->pathUpload);
                    }
                }
            }
        }
    }
}
