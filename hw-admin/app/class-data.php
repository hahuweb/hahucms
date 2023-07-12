<?php

/**
 * Data
 * 
 * Display website and pages data.
 */

class data extends dbConnect
{

    public $siteInfo;
    public $pagesInfo;
    public $blogInfo;

     // values 
    public function values()
    {
        $this->siteInfo = '../hw-includes/setting/site/site.json';
        $this->pagesInfo = '../hw-includes/setting/site/pages.json';
        $this->blogInfo = '../hw-includes/setting/site/blog.json';
    }

    /**
     * site info
     */
    public function siteInfo()
    {
        $this->values();
        $file = file_get_contents($this->siteInfo);
        $data = json_decode($file);
        return $data;
    }

    /**
     * pages info
     */
    public function pagesInfo()
    {
        $this->values();
        $file = file_get_contents($this->pagesInfo);
        $data = json_decode($file);
        return $data;
    }

    /**
     * blog info
     */
    public function blogInfo()
    {
        $this->values();
        $file = file_get_contents($this->blogInfo);
        $data = json_decode($file);
        return $data;
    }

    /**
     * limit login attempt
     */
    public function limit_attempt($table, $ip)
    {
        $this->db_connect();
        $tsql = "SELECT * FROM $table WHERE ip='$ip' ";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql);
        return $results;
    }


    /**
     * delete ip address 
     */
    public function delete_ip($ip)
    {
        $tsql = "DELETE FROM hw_login_attempt WHERE ip='$ip' ";
        mysqli_set_charset($this->conn, "utf8");
        $result = $this->conn->query($tsql);
        if ($result == TRUE) {
            refresh($_SERVER["PHP_SELF"]);
        } else {
            echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for login</b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

}
