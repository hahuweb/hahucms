<?php

/**
 * Media
 * Displaying media file
 * 
 */

class medias
{
    public $files;
    public $folder_name;

    // values
    public function values()
    {
        
        $this->files = glob("../media/*.*");
        $this->folder_name = '../media/';
    }

    // Counting file
    public function countFile()
    {
        $this->values();
        echo "" . count($this->files) . " files";
    }

    // Folder name
    public function folderName()
    {
        return $this->folder_name;
    }

    // displaying all media files
    public function displayMedia()
    {
        foreach ($this->files as $key => $value) {

            $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png',
                'wmv',
                'mp4',
                'mp3',
                "wav",
                'pdf',
                'docx',
                'pptx',
                'accdb',
                'xlsx',
                'zip'
            );

            $ext = strtolower(pathinfo($value, PATHINFO_EXTENSION));
            //$path_parts = pathinfo($value);
            $path_parts = pathinfo($value, PATHINFO_EXTENSION);

            if (in_array($ext, $supported_file)) {
?>
                <div class="col-md-6">
                    <div class="card mb-3 md-card media-file">
                        <div class="row g-0">
                            <div class="col-md-6 bg-light">
                                <?php
                                if (
                                    $path_parts == "jpg" or
                                    $path_parts == "jpeg" or
                                    $path_parts == "png" or
                                    $path_parts == "gif"
                                ) {
                                ?>
                                    <img src="<?php echo $value; ?>" class="img-fluid rounded-start" alt="...">

                                <?php
                                } elseif (
                                    $path_parts == "mp4" or
                                    $path_parts == "wmv"
                                ) {
                                ?>
                                    <div class="text-center icons">
                                        <i class="fa fa-film"></i>
                                    </div>

                                <?php
                                } elseif (
                                    $path_parts == "mp3" or
                                    $path_parts == "wav"
                                ) {
                                ?>
                                    <div class="text-center icons">
                                        <i class="fa fa-music"></i>
                                    </div>
                                <?php
                                } elseif (
                                    $path_parts == "pdf" or
                                    $path_parts == "docx" or
                                    $path_parts == "pptx" or
                                    $path_parts == "accdb" or
                                    $path_parts == "xlsx" or
                                    $path_parts == "zip"
                                ) {
                                ?>
                                    <div class="text-center icons">
                                        <i class="fa fa-file"></i>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <div class="d-flex bd-highlight">
                                        <div class="me-auto p-2 bd-highlight">
                                            <p class="card-title"><?php echo basename($value); ?></p>

                                        </div>
                                        <div class="flex-shrink-1 bd-highlight">
                                            <input class="form-check-input checkbox" type="checkbox" name="checke[]" value="<?php echo basename($value); ?>">
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

    // displaying images  files
    public function mediaModel()
    {

        $this->values();
        foreach ($this->files as $key => $value) {

            $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png',
            );

            $ext = strtolower(pathinfo($value, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_file)) {
                $name = basename($value);
            ?>
                <div class="card mb-3 md-card media-img" style="max-width: 400px; float: left;">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="<?php echo $value; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="d-flex bd-highlight">
                                    <div class="me-auto p-2 bd-highlight">
                                        <p class="card-title "><?php echo basename($value); ?> </p>
                                        <p class="card-title">
                                            <?php
                                            $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,strpos( $_SERVER["SERVER_PROTOCOL"],'/'))).'://';
                                            $server_name = $_SERVER["SERVER_NAME"];
                                            $img_path = $protocol.$server_name . str_replace("../", "", $value);
                                            ?>
                                        </p>

                                    </div>
                                    <div class="p-2 flex-shrink-1 bd-highlight">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" class="user_img check_img" value="<?php echo $img_path; ?>" >
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
