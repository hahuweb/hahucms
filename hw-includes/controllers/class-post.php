<?php

/**
 * Post
 * 
 * Handle for add, edit  and delete post
 */

 
class addpost extends dbConnect
{

    // values
    public $post_title;
    public $post_category;
    public $post_description;
    public $post_author;
    public $img;
    public $img_url;
    public $post_date;
    public $error;
    public $conn;


    // get values
    public function getValue()
    {
        $this->post_title = filter_input(INPUT_POST, 'post_title');
        $this->post_category = filter_input(INPUT_POST, 'post_category');
        $this->post_description = filter_input(INPUT_POST, 'post_description');
        $this->post_author =  $_SESSION['ID'];
        $this->img = filter_input(INPUT_POST, 'img');
        $this->img_url = filter_input(INPUT_POST, 'img_url');
        $this->error;
        $this->post_date = date("y-m-d");
    }

    // validate
    public function validate()
    {
        if (empty($this->post_title)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter post title.  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }elseif(empty($this->post_category)){
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter post category.  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }elseif(empty($this->post_description)){
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter post description.  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

        }
    }

    // add
    public function addPost()
    {
        $this->db_connect();
        $this->getValue();
        $this->validate();
        if (empty($this->error)) {
            $tsql = "INSERT INTO hw_post (post_title, post_category, post_description, post_author, img, img_url, post_date) VALUES ('$this->post_title', '$this->post_category', '$this->post_description', '$this->post_author', '$this->img', '$this->img_url', '$this->post_date') ";
            mysqli_set_charset($this->conn, "utf8");
            $results = mysqli_query($this->conn, $tsql);
            if ($results == TRUE) {
                redirect('post.php');
            } else {
                echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for add post</b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
        }
        $this->db_close();
    }


    // edit
    public function editPost($post_id)
    {
        $this->db_connect();
        $this->getValue();
        $this->validate();
        if (empty($this->error)) {
            $tsql = "UPDATE hw_post SET post_title='$this->post_title', post_category='$this->post_category',  post_description='$this->post_description', img='$this->img', img_url='$this->img_url'"
                . " WHERE post_id='$post_id' ";
            mysqli_set_charset($this->conn, "utf8");
            $result = $this->conn->query($tsql);
            if ($result == TRUE) {
                redirect('post.php');
            } else {
                echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for editing</b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
        }
        $this->db_close();
    }

    // delete
    public function deletePost()
    {
        $this->db_connect();
        $this->getValue();
        if (!empty($_POST['check'])) {
            $all = implode(",", $_POST['check']);
            $tsql = "DELETE FROM hw_post WHERE post_id in ($all) ";
            $result = $this->conn->query($tsql);
            if ($result == TRUE) {
                redirect('post.php');
            } else {
                echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for deleting</b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

            }
            
        }
        $this->db_close();
    }
}

