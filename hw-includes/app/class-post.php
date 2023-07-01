<?php

/**
 * Blog Post
 * Displaying blog post
 * 
 */


class post extends dbConnect
{


    // All post
    public function all_posts($table)
    {
        $this->db_connect();
        $tsql_post = "SELECT * FROM $table ORDER BY post_date DESC";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql_post);
        return $results;
    }

    // Post for home page
    public function first_posts($table)
    {
        $this->db_connect();
        $tsql_post = "SELECT * FROM $table ORDER BY post_date DESC LIMIT 3";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql_post);
        return $results;
    }

    // View post
    public function view_post($table, $post_id)
    {
        $this->db_connect();
        $tsql_post = "SELECT * FROM $table WHERE post_id=$post_id";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql_post);
        return $results;
    }

    // Sort by view
    public function sort_view($table)
    {
        $this->db_connect();
        $tsql_post = "SELECT * FROM $table ORDER BY view DESC";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql_post);
        return $results;
    }

    // Sort by date
    public function sort_descending($table)
    {
        $this->db_connect();
        $tsql_post = "SELECT * FROM $table ORDER BY post_date ASC";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql_post);
        return $results;
    }

    
}
