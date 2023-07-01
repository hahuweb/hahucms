<?php

/**
 * Users
 * 
 * Displaying users and activity 
 */

class users extends dbConnect
{

    // Show table
    public function tables($db)
    {
        $this->db_connect();
        $tb = "SHOW TABLES FROM $db";
        $results = mysqli_query($this->conn, $tb);
        if ($results->num_rows == false) {
            redirect('welcome.php');
        }
    }

    // Create table
    public function createTable($db) {
        $this->db_connect();
        $tb = "SHOW TABLES FROM $db";
        $results = mysqli_query($this->conn, $tb);
        return $results;
    }
    
    // Select all admin users
    public function all_users($table)
    {
        $this->db_connect();
        $tsql_user = "SELECT * FROM $table";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql_user);
        return $results;
    }

    // Select active admin users
    public function active_users($table)
    {
        $this->db_connect();
        $tsql_user = "SELECT * FROM $table where user_status='active' ";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql_user);
        return $results;
    }

    // View user info
    public function view_user($table, $id)
    {
        $this->db_connect();
        $tsql = "SELECT * FROM $table WHERE ID='$id' ";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql);
        return $results;
    }

    // Lost password
    public function lost_pass($table, $email_phone)
    {
        $this->db_connect();
        $tsql = "SELECT * FROM $table WHERE email_phone='$email_phone' ";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql);
        return $results;
    }

    // verification
    public function verify($table, $username, $password)
    {
        $this->db_connect();
        $tsql = "SELECT * FROM $table WHERE username='$username' AND user_password='$password'";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql);
        return $results;
    }
 
}
