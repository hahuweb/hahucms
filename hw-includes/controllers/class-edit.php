<?php

/**
 * Edit
 * 
 * Handle for edit user profile, password, profile picture, role and delete.
 */

class edit extends values
{


    // Edit password
    public function editPass($id)
    {
        $this->db_connect();
        $this->getValue();
        $this->passVal();
        if (empty($this->error)) {
            $tsql_ps = "SELECT * FROM hw_users WHERE id = '" . $_SESSION['id'] . "' ";
            mysqli_set_charset($this->conn, "utf8");
            $result_ps = $this->conn->query($tsql_ps);

            if ($result_ps->num_rows == TRUE) {
                $row_ps = $result_ps->fetch_assoc();
                if (password_verify($this->user_password, $row_ps['user_password'])) {
                    $tsql = "UPDATE hw_users SET user_password='$this->hash' WHERE id='$id' ";
                    mysqli_set_charset($this->conn, "utf8");
                    $result = $this->conn->query($tsql);
                    if ($result == TRUE) {
                        redirect('profile.php');
                    }
                } else {
                    echo  "<div class='alert alert-warning alert-dismissible fade show' role='alert'>Wrong password <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                }
            }
        }
        $this->db_close();
    }


    // Edit role
    public function editRole($id)
    {
        $this->db_connect();
        $this->getValue();
        if (empty($this->error)) {
            $tsql = "UPDATE hw_users SET user_role='$this->user_role' WHERE id='$id' ";
            mysqli_set_charset($this->conn, "utf8");
            $this->result($tsql);
        }
        $this->db_close();
    }


    // Edit profile picture
    public function editImg($id)
    {
        $this->db_connect();
        $this->getValue();
        $this->imgVal();
        if (empty($this->error)) {
            $tsql = "UPDATE hw_users SET user_img='$this->user_img' WHERE id='$id' ";
            $this->result($tsql);
        }

        $this->db_close();
    }


     // Edit profile
    public function editAll($id)
    {
        $this->db_connect();
        $this->getValue();
        $this->allVal();
        if (empty($this->error)) {
            $tsql = "UPDATE hw_users SET username='$this->username', email_phone='$this->email_phone', verification='$this->verification' "
                . " WHERE id='$id' ";
            $this->result($tsql);
        }
        $this->db_close();
    }


     // Delete user
    public function deleteUser($id)
    {
        $this->db_connect();
        $this->getValue();
        $tsql = "DELETE FROM hw_users WHERE id='$id' ";
        $result = $this->conn->query($tsql);
        if ($result == TRUE) {
            redirect('users.php');
        } else {
            echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for editing</b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
        $this->db_close();
    }

    public function recoverPass($id)
    {
    }

    // get result
    public function result($tsql)
    {
        mysqli_set_charset($this->conn, "utf8");
        $result = $this->conn->query($tsql);
        if ($result == TRUE) {
            redirect('profile.php');
        } else {
            echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for editing</b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }
}
