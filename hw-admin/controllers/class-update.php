<?php

/**
 * Updates 
 * 
 * Handle for updates  
 */


class updateHandling extends dbConnect
{

    // values
    public $update;
    public $update_tmp;
    public $update_path;
    public $upload_path;
    public $pathUpdate;
    public $pathUpload;
    public $updateFileType;

    public $publicPath;
    public $resourcesPath;
    public $settingPath;
    public $pluginPath;

    public $error;

    public function values()
    {
        $this->update = $_FILES['update']['name'];
        $this->update_tmp = $_FILES['update']['tmp_name'];
        $this->update_path = "../hw-content/updates/";
        $this->pathUpdate = $this->update_path . basename($this->update);
        $this->upload_path = "../hw-content/uploads/";
        $this->pathUpload = $this->upload_path . basename($this->update);
        $this->updateFileType = pathinfo($this->pathUpload, PATHINFO_EXTENSION);

        $this->publicPath = "../";
        $this->resourcesPath = "../hw-includes/";
        $this->settingPath = "../hw-includes/setting/";
        /*$this->pluginPath = "../../resources/venders/";*/

        $this->error;
    }

    // validate
    public function validat()
    {
        if (empty($this->update)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please select update file  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (
            $this->updateFileType != "zip"
        ) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Sorry, only zip file allowed.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

    public function update()
    {

        $this->values();
        $this->validat();
        if (empty($this->error)) {
            if (is_uploaded_file($this->update_tmp)) {
                if (move_uploaded_file($this->update_tmp, $this->pathUpload)) {
                    $zip = new ZipArchive;
                    if ($zip->open($this->pathUpload) === TRUE) {
                        $zip->extractTo($this->update_path);
                        $zip->close();
                        redirect('plugins.php');
                    } else {
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for update</b> try again later.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                    }
                    if (file_exists($this->pathUpload)) {
                        unlink($this->pathUpload);
                    }
                }
            }

            $this->publicFile();
            $this->resourceFile();
            $this->setting();
            $this->remove();
        }
    }

    public function publicFile()
    {
        $public_file = array_diff(scandir($this->update_path .'public/'), [".", ".."]);
        $eol = PHP_EOL;
        foreach ($public_file as $pf) {
            if (is_dir($this->update_path .'public/'  . $pf)) {
                if (file_exists($this->publicPath . $pf)) $this->delete($this->publicPath . $pf);
                rename($this->update_path .'public/' . $pf, $this->publicPath . $pf);
            }

            if (is_file($this->update_path .'public/'  . $pf)) {
                rename($this->update_path .'public/' . $pf, $this->publicPath . $pf);
            }
        }
    }

    public function resourceFile()
    {
        $resource_file = array_diff(scandir($this->update_path .'resources/'), [".", ".."]);
        $eol = PHP_EOL;
        foreach ($resource_file as $rf) {
            if (is_dir($this->update_path .'resources/'  . $rf)) {
                if (file_exists($this->resourcesPath . $rf)) $this->delete($this->resourcesPath . $rf);
                rename($this->update_path .'resources/' . $rf, $this->resourcesPath . $rf);
            }

            if (is_file($this->update_path .'resources/'  . $rf)) {
                rename($this->update_path .'resources/' . $rf, $this->resourcesPath . $rf);
            }
        }
    }

    public function plugins()
    {
        $plugins = array_diff(scandir($this->update_path .'plugins/'), [".", ".."]);
        $eol = PHP_EOL;
        foreach ($plugins as $pup) {
            if (is_dir($this->update_path .'plugins/'  . $pup)) {
                if (!file_exists($this->pluginPath . $pup)) {
                    rename($this->update_path .'plugins/' . $pup, $this->pluginPath . $pup);
                }
            }
        }
    }


    public function setting()
    {
        $setting = array_diff(scandir($this->update_path . 'setting/'), [".", ".."]);
        $eol = PHP_EOL;
        foreach ($setting as $set) {
            if (is_dir($this->update_path . 'setting/'  . $set)) {
                if (!file_exists($this->settingPath . $set)) {
                    rename($this->update_path . 'setting/' . $set, $this->settingPath . $set);
                }
            }
        }
    }

    public function remove()
    {
        if (file_exists($this->update_path . 'resources')) {
            $this->delete($this->update_path . 'resources');
        }
        if (file_exists($this->update_path . 'public')) {
            $this->delete($this->update_path . 'public');
        }
        /*if (file_exists($this->update_path . 'plugins')) {
            $this->delete($this->update_path . 'plugins');
        }
        if (file_exists($this->update_path . 'venders')) {
            $this->delete($this->update_path . 'venders');
        }*/
        if (file_exists($this->update_path . 'setting')) {
            $this->delete($this->update_path . 'setting');
        }
    }


    public function delete($folderName)
    {

        if (is_dir($folderName))

            $folderHandle = opendir($folderName);


        if (!$folderHandle)

            return false;


        while ($file = readdir($folderHandle)) {

            if ($file != "." && $file != "..") {

                if (!is_dir($folderName . "/" . $file))

                    unlink($folderName . "/" . $file);

                else

                    $this->delete($folderName . '/' . $file);
            }
        }

        closedir($folderHandle);

        rmdir($folderName);

        return true;
    }
}
