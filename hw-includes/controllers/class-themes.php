<?php

/**
 * Themes
 * 
 * Handle upload themes 
 */

class themeHandling extends dbConnect
{

    /**
     * Values
     */
    public $theme;
    public $theme_tmp;
    public $theme_path;
    public $upload_path;
    public $pathTheme;
    public $pathUpload;
    public $themeFileType;
    public $error;

    public function values()
    {
        $this->theme = $_FILES['theme']['name'];
        $this->theme_tmp = $_FILES['theme']['tmp_name'];
        $this->theme_path = "../hw-content/themes/";
        $this->pathTheme = $this->theme_path . basename($this->theme);
        $this->upload_path = "../hw-content/uploads/";
        $this->pathUpload = $this->upload_path . basename($this->theme);
        $this->themeFileType = pathinfo($this->pathUpload, PATHINFO_EXTENSION);
        $this->error;
    }


    /**
     * Validate
     */
    public function validat()
    {
        if (empty($this->theme)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please select theme  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (
            $this->themeFileType != "zip"

        ) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Sorry, only zip file allowed.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }


    /**
     * Upload theme
     */
    public function themeUpload()
    {

        $this->values();
        $this->validat();
        if (empty($this->error)) {
            if (is_uploaded_file($this->theme_tmp)) {
                if (move_uploaded_file($this->theme_tmp, $this->pathUpload)) {
                    $zip = new ZipArchive;
                    if ($zip->open($this->pathUpload) === TRUE) {
                        $zip->extractTo($this->theme_path);
                        $zip->close();
                        redirect('themes.php');
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


