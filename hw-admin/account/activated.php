<?php

/**
 * Activated 
 *
 * Send verification code.
 *
 */


session_start();
if (!isset($_SESSION['email_phone'])) {
    header("Location: login.php");
    exit();
}

// php mailer api
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include files
require 'load.php';

// php mailer 
require '../../hw-content/plugins/phpmailer/Exception.php';
require '../../hw-content/plugins/phpmailer/PHPMailer.php';
require '../../hw-content/plugins/phpmailer/SMTP.php';


// values
$values = new values();

// admin users
$hw_users = new users();

// mailer data
$mailer = new data();

// form
$verify = new verification();

// user db
//$connect = $hw_users->db_connect();

// data db
//$connectml = $mailer->db_connect();

// mailer data
//$mail_data = $mailer->phpMailer("hw_mailer");


// get user
if (isset($_SESSION['email_phone'])) {
    $email_phone = $_SESSION['email_phone'];
    $get_email = $hw_users->lost_pass('hw_users', $email_phone);
    $rows = ($get_email);
    if ($rows->num_rows == TRUE) {
        $row = $get_email->fetch_assoc();

        // rand numbers
        $code = rand(100000, 999999);
        $otp = $code;

        // send otp
        $get_otp = $verify->sentOTP($row['ID'], $otp);

        if ($get_otp == true) {
            if (file_exists('../../hw-content/plugins/phpmailer/data.php')) {
                require '../../hw-content/plugins/phpmailer/data.php';
                $mail = new PHPMailer(true);
                $smtp = PHPMailer::ENCRYPTION_SMTPS;
                $send_mail = $verify->sendMailer(
                    $name,
                    $host,
                    $username,
                    $password,
                    $port,
                    $row['email_phone'],
                    $mail,
                    $smtp,
                    $otp
                );
                if ($mail->send()) {
                    redirect('activate.php');
                }
            } else {
?>
                <div class="welcome">
                    <div class="text-center">
                        <h4>Problem for Sending Code</h4>
                        <br />
                        <p>Please configure php mailer to receive verification code.</p>
                    </div>
                    <br />
                    <br />
                    <div class="d-flex justify-content-between">
                        <div>
                            <a class="btn btn-md btn-outline-secondary" href="login.php">ok</a>
                        </div>
                    </div>
                </div>
<?php
            }
        }
    }
}

require_once 'script.php';
