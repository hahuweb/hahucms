<?php

/**
 * Pages
 * Displaying pages 
 * 
 */

class pages extends dbConnect
{
    public $pages_path;
    public $pages_folder;
    public $theme_pages;
    public $theme_pagesfolder;

    public function pagesPath()
    {
        $this->pages_path = glob("../hw-includes/pages/*.*");
        $this->pages_folder = '../hw-includes/pages/';
    }

    // Counting file
    public function countPages()
    {
        $this->pagesPath();
        echo "" . count($this->pages_path) . " pages";
    }

    public function pagesFolder() {
        return $this->pages_folder;
    }
    public function themePath($path)
    {
        $this->theme_pages = glob($path . "/*.*");
        $this->theme_pagesfolder = $path . '/';
    }
    public function themeFolder() {
        return $this->theme_pagesfolder;
    }
    // Counting file
    public function countThemePages($path)
    {
        $this->themePath($path);
        echo "" . count($this->theme_pages) . " pages";
    }

    // displaying all media files
    public function displayPages()
    {
        foreach ($this->pages_path as $key => $pages) {

            $supported_file = array(
                'html',
                'php'
            );
            $ext = strtolower(pathinfo($pages, PATHINFO_EXTENSION));
            $path_parts = pathinfo($pages, PATHINFO_EXTENSION);
            $pathInfo = pathinfo($pages);
            $filename = $pathInfo['filename'];
            if (in_array($ext, $supported_file)) {
?>
                <tr>
                    <td><input class="form-check-input checkbox" type="checkbox" name="checke[]" value="<?php echo $pages; ?>"></td>
                    <td><?php echo $filename; ?></td>
                    <td><?php
                        echo sizeFormat(filesize($pages));
                        ?></td>
                    <td>
                        <a href="../hw-content/plugins/vvveb/editor.php?page_name=<?php echo $filename ?>" target="_blank">Edit</a>
                    </td>
                    <td>
                        <button type="button" class="btn" data-bs-toggle="offcanvas" data-bs-target="#<?php echo $filename; ?>" aria-controls="offcanvasRight">Rename</button>
                    </td>
                </tr>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="<?php echo $filename; ?>" aria-labelledby="topOffcanvasLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Rename Page</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="container">
                        <hr />
                    </div>
                    <div class="offcanvas-body">
                        <form action="" method="post" class=" form-group">
                            <input type="text" class="form-control" name="page_name" value="<?php echo $filename; ?>" hidden>
                            <input type="text" class="form-control" name="new_page" value="<?php echo $filename; ?>">
                            <input type="text" class="form-control" name="type" value=".<?php echo $path_parts; ?>" hidden>
                            <br />
                            <button class="btn btn-outline-secondary" name="edit_page" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            <?php
            }
        }
    }

    public function displayThemePages()
    {
        foreach ($this->theme_pages as $key => $pages) {

            $supported_file = array(
                'html',
                'php'
            );
            $ext = strtolower(pathinfo($pages, PATHINFO_EXTENSION));
            $path_parts = pathinfo($pages, PATHINFO_EXTENSION);
            $pathInfo = pathinfo($pages);
            $filename = $pathInfo['filename'];

            if (in_array($ext, $supported_file)) {
            ?>
                <tr>
                    <td><input class="form-check-input checkbox" type="checkbox" name="checke[]" value="<?php echo $pages; ?>"></td>
                    <td><?php echo $filename; ?></td>
                    <td><?php
                        echo sizeFormat(filesize($pages));
                        ?></td>
                    <td>
                        <a href="../hw-content/plugins/vvveb/editor.php?page_name=<?php echo $filename ?>" target="_blank">Edit</a>
                    </td>
                    <td>
                        <button type="button" class="btn" data-bs-toggle="offcanvas" data-bs-target="#<?php echo $filename; ?>" aria-controls="offcanvasRight">Rename</button>
                    </td>
                </tr>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="<?php echo $filename; ?>" aria-labelledby="topOffcanvasLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Rename Page</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="container">
                        <hr />
                    </div>
                    <div class="offcanvas-body">
                        <form action="" method="post" class=" form-group">
                            <input type="text" class="form-control" name="page_name" value="<?php echo $filename; ?>" hidden>
                            <input type="text" class="form-control" name="new_page" value="<?php echo $filename; ?>">
                            <input type="text" class="form-control" name="type" value=".<?php echo $path_parts; ?>" hidden>
                            <br />
                            <button class="btn btn-outline-secondary" name="edit_themepage" type="submit">Save</button>
                        </form>
                    </div>
                </div>
<?php
            }
        }
    }

    // Select all pages 
    public function all_pages($table)
    {
        $this->db_connect();
        $tsql = "SELECT * FROM $table";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql);
        return $results;
    }


    // add setting data 
    public function pagesetting($name)
    {
        
        $this->pagesPath();
        foreach ($this->pages_path as $key => $pages) {
            $supported_file = array(
                'html',
                'php'
            );
            $ext = strtolower(pathinfo($pages, PATHINFO_EXTENSION));
            $path_parts = pathinfo($pages, PATHINFO_EXTENSION);
            $pathInfo = pathinfo($pages);
            $filename = $pathInfo['filename'];
            if (in_array($ext, $supported_file)) {
                if ($name != $filename) {
                    echo ' <option value="' . $filename . '">' . $filename . '</option>';
                }
            }
        }
    }


    // edit setting data 
    public function themeSetting($path, $status)
    {
        

        $this->themePath($path);

        foreach ($this->theme_pages as $key => $pages) {
            $supported_file = array(
                'html',
                'php'
            );
            $ext = strtolower(pathinfo($pages, PATHINFO_EXTENSION));
            $path_parts = pathinfo($pages, PATHINFO_EXTENSION);
            $pathInfo = pathinfo($pages);
            $filename = $pathInfo['filename'];
            if (in_array($ext, $supported_file)) {
                if ($status != $filename) {
                    echo ' <option value="' . $filename . '">' . $filename . '</option>';
                }
            }
        }
    }

    public function allPages()
    {
        $this->pagesPath();
        foreach ($this->pages_path as $key => $pages) {
            $supported_file = array(
                'html',
                'php'
            );
            $ext = strtolower(pathinfo($pages, PATHINFO_EXTENSION));
            $path_parts = pathinfo($pages, PATHINFO_EXTENSION);
            $pathInfo = pathinfo($pages);
            $filename = $pathInfo['filename'];
            if (in_array($ext, $supported_file)) {
                echo ' <option value="' . $filename . '">' . $filename . '</option>';
            }
        }
    }

    public function allTheme($path){
        $this->themePath($path);

        foreach ($this->theme_pages as $key => $pages) {
            $supported_file = array(
                'html',
                'php'
            );
            $ext = strtolower(pathinfo($pages, PATHINFO_EXTENSION));
            $path_parts = pathinfo($pages, PATHINFO_EXTENSION);
            $pathInfo = pathinfo($pages);
            $filename = $pathInfo['filename'];
            if (in_array($ext, $supported_file)) {
                    echo ' <option value="' . $filename . '">' . $filename . '</option>';
            }
        }
    }
    
}
