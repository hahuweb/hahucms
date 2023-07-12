<?php

/**
 * Data
 * 
 * Handling for edit website and pages data.
 */


class dataValues extends dbConnect
{

    // values
    public $title;
    public $description;
    public $keyword;
    public $author;
    public $favicon;
    public $sitePath;

    public $header;
    public $home;
    public $footer;
    public $pagePath;

    public $blogHome;
    public $blogPath;
    public $error;
    public $conn;


    // get values
    public function getValue()
    {
        $this->title = filter_input(INPUT_POST, 'title');
        $this->description = filter_input(INPUT_POST, 'description');
        $this->keyword = filter_input(INPUT_POST, 'keyword');
        $this->author = filter_input(INPUT_POST, 'author');
        $this->favicon = str_replace("../", "", filter_input(INPUT_POST, 'favicon'));
        $this->sitePath = '../hw-includes/setting/site/site.json';

        $this->header = filter_input(INPUT_POST, 'header');
        $this->home = filter_input(INPUT_POST, 'home');
        $this->footer = filter_input(INPUT_POST, 'footer');
        $this->pagePath = '../hw-includes/setting/site/pages.json';

        $this->blogHome = filter_input(INPUT_POST, 'blogHome');
        $this->blogPath = '../hw-includes/setting/site/blog.json';

        $this->error;
    }


    /**
     * Validation
     */
    public function pagesVal()
    {
        if (empty($this->title)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please fill All fileds.  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }


    /**
     * Add website data
     */
    public function addSite()
    {

        $this->getValue();
        if (empty($this->error)) {

            $input_data = array(
                "title" => $this->title,
                "description" =>  trim($this->description),
                "keyword" =>  trim($this->keyword),
                "author" =>  trim($this->author),
                "favicon" =>  $this->favicon
            );
            $json = json_encode($input_data);
            if (file_put_contents($this->sitePath, $json)) {
                redirect('setting.php');
            } else {
                echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for editing</b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
        }
    }


    /**
     * add pages data
     */
    public function addPages()
    {
        $this->getValue();
        if (empty($this->error)) {

            $input_data = array(
                "header" => $this->header,
                "home" =>  $this->home,
                "footer" =>  $this->footer
            );
            $json = json_encode($input_data);
            if (file_put_contents($this->pagePath, $json)) {
                redirect('setting.php');
            } else {
                echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for editing</b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
        }
    }

    /**
     * add blog data
     */
    public function addBlog()
    {
        $this->getValue();
        if (empty($this->error)) {

            $input_data = array(
                "home" =>  $this->blogHome
            );
            $json = json_encode($input_data);
            if (file_put_contents($this->blogPath, $json)) {
                redirect('setting.php');
            } else {
                echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for editing</b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
        }
    }
}
