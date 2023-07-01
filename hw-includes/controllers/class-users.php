<?php


/**
 * Users
 * 
 * Handle for signup, login, create and delete admin users.
 */


/** 
 * Sign up 
 */
class signup extends values
{
    public function __construct()
    {
        $this->db_connect();
        $this->getValue();
        $this->signupVal();
        $this->role();
        $this->verify();
        $this->status();
        $this->getLocation();
        $this->get_device();
        $this->insert();

        $this->db_close();
    }
    public function insert()
    {
        if (empty($this->error)) {
            $this->user_status = 'active';
            $tsql = "INSERT INTO hw_users (username, email_phone, user_password, user_role, verification, user_location, user_device, user_status, reg_date) VALUES ('$this->username', '$this->email_phone', '$this->password_hash', '$this->user_role', '$this->verification', '$this->user_location', '$this->user_device', '$this->user_status',  '$this->reg_date') ";
            mysqli_set_charset($this->conn, "utf8");
            $result = mysqli_query($this->conn, $tsql);
            if ($result == TRUE) {
                $this->select();
            }
        }
    }

    public function select()
    {
        $tsql_in = "SELECT * FROM hw_users WHERE username = '$this->username'  ";
        mysqli_set_charset($this->conn, "utf8");
        $result_in = $this->conn->query($tsql_in);
        $row = mysqli_fetch_array($result_in);
        if (mysqli_num_rows($result_in) == 1) {
            $_SESSION['ID'] = $row['ID'];
            header("Location: ../index.php");
        }
    }

    public function role()
    {
        $this->user_role = 'Administrator';
        return $this->user_role;
    }
    public function verify()
    {
        $this->verification = 'OFF';
        return $this->verification;
    }
    public function status()
    {
        $this->user_status = 'active';
        return $this->user_status;
    }
}


/** 
 * Login
 */
class login extends values
{


    public function __construct()
    {

        $this->db_connect();
        $this->getValue();
        $this->loginVal();
        $this->getLocation();
        $this->get_device();
        $this->status();
        $this->login_time();
        $this->select();
        $this->db_close();
    }


    public function select()
    {
        if (empty($this->error)) {
            $tsql_in = "SELECT * FROM hw_users WHERE username =? ";
            $stmt = $this->conn->prepare($tsql_in);
            $stmt->bind_param("s", $this->username);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows == true) {
                $row = $result->fetch_assoc();
                if (password_verify($this->user_password, $row['user_password'])) {
                    if ($row['verification'] == 'ON') {
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['user_password'] = $row['user_password'];
                        header("Location: verify.php");
                    } elseif ($row['verification'] == 'OFF') {
                        $_SESSION['ID'] = $row['ID'];
                        $id = $row['ID'];
                        $this->update_active($id);
                        header("Location: ../index.php");
                    }
                } else {
                    echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Wrong  password<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                }
            } else {

                echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert"> Wrong login name or password<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

                echo $this->attempt();
            }
           
            $stmt->close();
        }
    }



    public function status()
    {
        $this->user_status = 'active';
        return $this->user_status;
    }

    public function login_time()
    {
        $this->login_at = date("y-m-d h:i:sa");
        return $this->login_at;
    }
    public function update_active($id)
    {
        $tsql = "UPDATE hw_users SET user_location='$this->user_location', user_device='$this->user_device', user_status='$this->user_status', login_at='$this->login_at' WHERE ID='$id' ";
        mysqli_set_charset($this->conn, "utf8");
        $result_update = $this->conn->query($tsql);
        if ($result_update == TRUE) {
        } else {
        }
    }
}


/**
 *  Add new users 
 */
class newUser extends values
{

    public function __construct()
    {

        $this->db_connect();
        $this->getValue();
        $this->signupVal();
        $this->record();
        $this->db_close();
    }


    public function record()
    {

        if (empty($this->error)) {
            $tsql_ps = "SELECT * FROM hw_users WHERE username = '$this->username' OR email_phone = '$this->email_phone' ";
            mysqli_set_charset($this->conn, "utf8");
            $result_ps = $this->conn->query($tsql_ps);
            if ($result_ps->num_rows == TRUE) {
                $row = $result_ps->fetch_assoc();
                if ($this->username == $row['username']) {
                    echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Username already exist   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                } elseif ($this->email_phone == $row['email_phone']) {
                    echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Email already exist   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                }
            } else {
                $tsql = "INSERT INTO hw_users (username, email_phone, user_password, user_role, verification, user_img, reg_date)  VALUES 
                ('$this->username', '$this->email_phone', '$this->password_hash', '$this->user_role', '$this->verification', '$this->user_img', '$this->reg_date') ";
                mysqli_set_charset($this->conn, "utf8");
                $results = mysqli_query($this->conn, $tsql);
                if ($results == TRUE) {
                    redirect('users.php');
                } else {
                    echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for add user </b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                }
            }
        }
    }
}


/**
 *  Log Out 
 */
class logout extends values
{

    public function userLogout($id)
    {

        $this->db_connect();
        $this->getValue();
        $this->status();
        $this->login_time();
        $this->otp();
        $this->getLocation();
        $this->get_device();
        $tsql = "UPDATE hw_users SET last_login='$this->last_login', user_location='$this->user_location', user_device='$this->user_device', user_status='$this->user_status', otp='$this->otp', login_at='$this->login_at' WHERE ID='$id' ";
        mysqli_set_charset($this->conn, "utf8");
        $result_update = $this->conn->query($tsql);
        if ($result_update == TRUE) {
        } else {
        }

        $this->db_close();
    }
    public function status()
    {
        $this->user_status = 'not_active';
        return $this->user_status;
    }
    public function login_time()
    {
        $this->login_at = '';
        return $this->login_at;
    }
    public function otp()
    {
        $this->otp = '';
        return $this->otp;
    }
}


/** 
 * Check email 
 */
class checkEmail extends values
{
    public function __construct()
    {
        $this->db_connect();
        $this->getValue();
        $this->emailVal();
        $this->select();
        $this->db_close();
    }

    public function select()
    {
        if (empty($this->error)) {
            $tsql = "SELECT * FROM hw_users WHERE email_phone =? ";
            $stmt = $this->conn->prepare($tsql);
            $stmt->bind_param("s", $this->email_phone);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows == true) {
                $row = $result->fetch_assoc();
                $_SESSION['email_phone'] = $row['email_phone'];
                header("Location: activated.php");
            } else {
                echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Email address not found <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                echo $this->attempt();
            }
            $stmt->close();
        }
    }
}


/** 
 * Verification 
 */
class verification extends values
{

    public function sentOTP($id, $otp)
    {
        $this->db_connect();
        $this->getValue();
        $tsql = "UPDATE hw_users SET otp='$otp' WHERE ID='$id' ";
        mysqli_set_charset($this->conn, "utf8");
        $result =  $this->conn->query($tsql);
        return $result;
        $this->db_close();
    }


    public function checkOTP()
    {
        $this->db_connect();
        $this->getValue();
        $tsql = "SELECT * FROM hw_users WHERE otp =? ";
        $stmt = $this->conn->prepare($tsql);
        $stmt->bind_param("s", $this->code);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == true) {
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['ID'];
            $this->update($row['ID']);
            header("Location: ../index.php");
        } else {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Wrong number <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            echo $this->attempt();
        }
        $stmt->close();


        $this->db_close();
    }

    public function lostPass()
    {
        $this->db_connect();
        $this->getValue();
        $tsql = "SELECT * FROM hw_users WHERE otp =?  ";
        $stmt = $this->conn->prepare($tsql);
        $stmt->bind_param("s", $this->code);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == true) {
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['ID'];
            $this->update($row['ID']);
            header("Location: recover.php");
        } else {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Wrong number <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            echo $this->attempt();
        }
        $stmt->close();
        $this->db_close();
    }

    public function update($id)
    {
        $this->getLocation();
        $this->get_device();
        $this->status();
        $this->login_time();
        $tsql = "UPDATE hw_users SET user_location='$this->user_location', user_device='$this->user_device', user_status='$this->user_status', login_at='$this->login_at' WHERE ID='$id' ";
        mysqli_set_charset($this->conn, "utf8");
        $result_update = $this->conn->query($tsql);
        if ($result_update == TRUE) {
        }
    }

    public function status()
    {
        $this->user_status = 'active';
        return $this->user_status;
    }

    public function login_time()
    {
        $this->login_at = date("y-m-d h:i:sa");
        return $this->login_at;
    }


    public function sendMailer($name, $host, $sender, $password, $port, $reciver, $mail, $smtp, $otp)
    {
        //$mail = new PHPMailer(true);
        $mail = $mail;
        $mail->isSMTP();
        $mail->Host       = $host;                      //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                       //Enable SMTP authentication
        $mail->Username   = $sender;                    //SMTP username
        $mail->Password   = $password;                  //SMTP password          
        $mail->SMTPSecure = $smtp;                      //Enable implicit TLS encryption
        $mail->Port       = $port;

        //Recipients
        $mail->setFrom($reciver);
        $mail->FromName = $name;

        $mail->addAddress($reciver);                      //Add a recipient
        $mail->addReplyTo($reciver);

        //Content
        $mail->isHTML(true);                              //Set email format to HTML
        $mail->Subject = "Your Verficetion Code";
        $mail->Body    = $otp;
        /*if ($mail->send()) {
            redirect('verification.php');
        }*/
    }
}


/**
 * Recover password 
 */
class recover extends values
{

    public function recoverPass($id)
    {
        $this->db_connect();
        $this->getValue();
        $this->recoverpassVal();
        if (empty($this->error)) {

            $tsql = "UPDATE hw_users SET user_password='$this->password_hash' WHERE ID='$id' ";
            mysqli_set_charset($this->conn, "utf8");
            $result_update = $this->conn->query($tsql);
            if ($result_update == TRUE) {
                redirect('../index.php');
            } else {
                echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert"><b>Problem for edit password </b> Try again later<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
        }
        $this->db_close();
    }
}


/**
 * Limit login attempt
 */
class limitLogin extends values
{

    public function setting()
    {
        $this->db_connect();

        if (file_exists('../../hw-content/plugins/limitlogin/data.php')) {
            require '../../hw-content/plugins/limitlogin/data.php';
            if($status == 'Enable'){
                $minutes = $minute * 60;
                $attempt = $this->limit_attempt('hw_login_attempt', $this->getLocation());
                $rows_attempt = ($attempt);
                if ($rows_attempt->num_rows == TRUE) {
                    $row_attempt = $attempt->fetch_assoc();
                    $diffrent = time() - $row_attempt['attempt_time'];
                    if ($diffrent > $minutes) {
                        if (isset($_SESSION['email_phone'])) {
                            unset($_SESSION["email_phone"]);
                        }
                        unset($_SESSION["login_attempt"]);
                        $delete = $this->delete_ip($this->getLocation());
                        return $delete;
                    } else {
                        header("Location: status.php");
                    }
                }
            }
        }
        $this->db_close();
    }

    public function limit_attempt($table, $ip)
    {
        $tsql = "SELECT * FROM $table WHERE ip='$ip' ";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql);
        return $results;
    }

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
