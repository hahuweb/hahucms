<?php

/**
 * db connection 
 * 
 */


class dbConnect
{

    public $conn;

    // db connect
    public function db_connect()
    {
        $this->conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

        if (!$this->conn) {
            die("Connect filed:");
        }
    }

    // db close
    public function db_close()
    {
        mysqli_close($this->conn);
    }
}
