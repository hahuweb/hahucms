<?php

/**
 * Media
 * 
 * Handle for add and delete media file
 */

class mediaHandling
{

    // values
    public $media;
    public $media_tmp;
    public $img;
    public $img_tmp;
    public $target_img;
    public $path;
    public $imgFileType;
    public $domain;
    public $error;


    public function values()
    {
        $this->img = $_FILES['img']['name'];
        $this->img_tmp = $_FILES['img']['tmp_name'];
        $this->target_img = "../media/";
        $this->path = $this->target_img . basename($this->img);
        $this->imgFileType = pathinfo($this->path, PATHINFO_EXTENSION);
        $this->error;
    }
    public function fullPath()
    {
        $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, strpos($_SERVER["SERVER_PROTOCOL"], '/'))) . '://';
        $server_name = $_SERVER["SERVER_NAME"];
        $this->domain = $protocol . $server_name . "/hahuweb/public/media/" .  $this->img;
        return $this->domain;
    }
    // Upload media file
    public function upload()
    {
        if (empty($this->error)) {
            $filesCount = count($_FILES['media']['name']);
            for ($i = 0; $i < $filesCount; $i++) {

                $this->media = $_FILES['media']['name'][$i];
                $this->media_tmp = $_FILES['media']['tmp_name'][$i];
                $this->target_img = "../media/";
                $this->path = $this->target_img . basename($this->media);
                $this->imgFileType = pathinfo($this->path, PATHINFO_EXTENSION);
                $this->error;
                $this->validat();
                $this->moveImg();
            }
        }
    }

    // validate
    public function validat()
    {
        if (empty($this->media)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please select image  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (
            $this->imgFileType != "jpg" &&
            $this->imgFileType != "png" &&
            $this->imgFileType != "jpeg" &&
            $this->imgFileType != "gif" &&
            $this->imgFileType != "mp4" &&
            $this->imgFileType != "wmv" &&
            $this->imgFileType != "mp3" &&
            $this->imgFileType != "wav" &&
            $this->imgFileType != "pdf" &&
            $this->imgFileType != "docx" &&
            $this->imgFileType != "pptx" &&
            $this->imgFileType != "accdb" &&
            $this->imgFileType != "xlsx" &&
            $this->imgFileType != "zip"

        ) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Sorry, only image, video, audio & document files are allowed.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }


    // move media
    public function moveImg()
    {
        if (empty($this->error)) {
            if (is_uploaded_file($this->media_tmp)) {
                if (file_exists($this->path)) {
                    $p = 1;
                    $new_path = $this->target_img;
                    while (file_exists($new_path)) {
                        $this->target_img;
                        $this->path;
                        $this->imgFileType;
                        $img_ne = pathinfo($this->path, PATHINFO_FILENAME);

                        $img_more = $img_ne . '-' . $p . '.' . $this->imgFileType;
                        $new_path = $this->target_img . $img_more;
                        $p++;

                        if (move_uploaded_file($this->media_tmp, $new_path)) {
                            redirect('media.php');
                        } else {
                            echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for uploading </b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }
                    }
                } else {
                    if (move_uploaded_file($this->media_tmp, $this->path)) {
                        redirect('media.php');
                    } else {
                        echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for uploading </b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                    }
                }
            }
        }
    }



    // Delete media file
    public function delete()
    {
        $filess = $_POST['checke'];
        $str = implode($filess);
        $dir =  '../media/';
        for ($i = 0; $i <= count($filess); $i++) {
            if (isset($filess[$i])) {
                if (unlink($dir . "" . $filess[$i])) {
                    redirect('media.php');
                }
            }
        }
    }


    // Upload only images
    public function imgUpload()
    {

        $this->values();
        $this->fullPath();

        if (empty($this->img)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please select image  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (
            $this->imgFileType != "jpg" &&
            $this->imgFileType != "png" &&
            $this->imgFileType != "jpeg" &&
            $this->imgFileType != "gif"
        ) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Sorry, only JPG, JPEG, PNG & GIF files are allowed.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }

        if (empty($this->error)) {
            if (is_uploaded_file($this->img_tmp)) {
                if (file_exists($this->path)) {
                    $p = 1;
                    $new_path = $this->target_img;
                    while (file_exists($new_path)) {
                        $this->target_img;
                        $this->path;
                        $this->imgFileType;
                        $img_ne = pathinfo($this->path, PATHINFO_FILENAME);

                        $img_more = $img_ne . '-' . $p . '.' . $this->imgFileType;
                        $new_path = $this->target_img . $img_more;
                        $p++;

                        if (move_uploaded_file($this->img_tmp, $new_path)) {
                            //echo "<meta http-equiv='refresh' content='0'>";
?>
                            <div class="card mb-3 md-card" style="max-width: 400px; float: left;">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <img src="../media/<?php echo $this->img; ?>" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">

                                            <div class="d-flex bd-highlight">
                                                <div class="me-auto p-2 bd-highlight">
                                                    <p class="card-title"><?php echo $this->img; ?> </p>
                                                </div>
                                                <div class="p-2 flex-shrink-1 bd-highlight">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="<?php echo $this->fullPath(); ?>" onclick="myCourseFunction(this.img)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }
                } else {
                    if (move_uploaded_file($this->img_tmp, $this->path)) {
                        //echo "<meta http-equiv='refresh' content='0'>";
                        ?>
                        <div class="card mb-3 md-card" style="max-width: 400px; float: left;">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="../media/<?php echo $this->img; ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">

                                        <div class="d-flex bd-highlight">
                                            <div class="me-auto p-2 bd-highlight">
                                                <p class="card-title"><?php echo $this->img; ?> </p>
                                            </div>
                                            <div class="p-2 flex-shrink-1 bd-highlight">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="<?php echo $this->fullPath(); ?>" onclick="myCourseFunction(this.value)">
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
    }
}
