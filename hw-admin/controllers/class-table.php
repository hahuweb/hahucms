<?php


class tables extends dbConnect
{


    public function createTable()
    {
        $this->db_connect();
        $query = file_get_contents('../../../resources/sql/table.sql');
        if ($this->conn->multi_query($query) === true) {
           //$this->pageData();
           //$this->settingData();
           redirect('welcome.php');
        } else {
           echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for install hahu CMS </b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
        $this->db_close();

    }  
    
}
