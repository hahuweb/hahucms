<?php

/**
 * Pages
 * 
 * Handle for add, edit and delete web pages
 */


class pagesHandling extends dbConnect
{

    /**
     * Values 
     */
    public $page_name;
    public $type;
    public $new_page;
    public $full_page;
    public $rename_page;
    public $error;
    public $pages_path;
    public $theme_pagespath;


    public function values()
    {
        $this->page_name = filter_input(INPUT_POST, 'page_name');
        $this->type = filter_input(INPUT_POST, 'type');
        $this->new_page = filter_input(INPUT_POST, 'new_page');
        $this->error;
    }

    public function pagesValue()
    {
        $this->pages_path = '../hw-includes/pages/';
        $this->full_page = $this->page_name . $this->type;
        $this->rename_page = $this->new_page . $this->type;
    }

    public function themeValues($path)
    {
        $this->theme_pagespath = $path;
        $this->full_page = $this->page_name . $this->type;
        $this->rename_page = $this->new_page . $this->type;
    }

    /**
     * Validate
     */
    public function validatePage()
    {
        if (empty($this->page_name)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter page name  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }
    public function validateRename()
    {
        if (empty($this->new_page)) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter page name  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }


    /**
     * Add page
     */
    public function addPages()
    {
        $this->values();
        $this->pagesValue();
        $this->validatePage();
        if (empty($this->error)) {
            if (file_exists($this->pages_path . $this->full_page)) {
                echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">File already exists in  directory  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            } else {
                $createFile = fopen($this->pages_path . $this->full_page, "w") or die(" Problem with creating a page. Please check PHP create file permissions.");
                if ($createFile == true) {
                    redirect('pages.php');
                }
                fclose($createFile);
            }
        }
    }

    // rename page
    public function renamePages()
    {
        $this->values();
        $this->pagesValue();
        $this->validateRename();
        if (empty($this->error)) {
            if (file_exists($this->pages_path . $this->rename_page)) {
                echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">File already exists in  directory  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            } else {
                $rename = rename($this->pages_path . $this->full_page, $this->pages_path . $this->rename_page); //fopen($this->file_path . $this->full_page, "w") or die("There a problem");
                if ($rename == true) {
                    redirect('pages.php');
                }
            }
        }
    }

    public function deletePages()
    {
        $this->values();
        $this->pagesValue();
        $str = implode($_POST['checke']);
        for ($i = 0; $i <= count($_POST['checke']); $i++) {
            if (isset($_POST['checke'][$i])) {
                if (unlink($_POST['checke'][$i])) {
                    redirect('pages.php');
                }
            }
        }
    }

    /**
     * Add theme page
     */
    public function addThemePages($path)
    {
        $this->values();
        $this->themeValues($path);
        $this->validatePage();
        if (empty($this->error)) {
            if (file_exists($this->theme_pagespath . $this->full_page)) {
                echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">File already exists in  directory  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            } else {
                $createFile = fopen($this->theme_pagespath . $this->full_page, "w") or die(" Problem with creating a page. Please check PHP create file permissions.");
                if ($createFile == true) {
                    redirect('pages.php');
                }
                fclose($createFile);
            }
        }
    }

    // rename page
    public function renameTheme($path)
    {
        $this->values();
        $this->themeValues($path);
        $this->validateRename();
        if (empty($this->error)) {
            if (file_exists($this->theme_pagespath . $this->rename_page)) {
                echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">File already exists in  directory  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            } else {
                $rename = rename($this->theme_pagespath . $this->full_page, $this->theme_pagespath . $this->rename_page); //fopen($this->file_path . $this->full_page, "w") or die("There a problem");
                if ($rename == true) {
                    redirect('pages.php');
                }
            }
        }
    }

    public function deleteTheme($path)
    {
        $this->values();
        $this->themeValues($path);
        $str = implode($_POST['checke']);
        for ($i = 0; $i <= count($_POST['checke']); $i++) {
            if (isset($_POST['checke'][$i])) {
                if (unlink($this->theme_pagespath . $_POST['checke'][$i])) {
                    redirect('pages.php');
                }
            }
        }
    }

}
