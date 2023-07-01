<?php

/**
 * Send
 * 
 * Handling for send message.
 */


// php mailer api
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../../hw-content/plugins/phpmailer/Exception.php';
require '../../../hw-content/plugins/phpmailer/PHPMailer.php';
require '../../../hw-content/plugins/phpmailer/SMTP.php';

if (!empty($_REQUEST['email']) || !empty($_REQUEST['subject']) || !empty($_REQUEST['message']) || empty($_REQUEST['firstname'])) {
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    $firstname = $_REQUEST['firstname'];
    $error;

    // validate
    if (empty($email)) {
        echo $error =  'Email  is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo $error =  'Please enter valid email address.';
    } elseif (empty($subject)) {
        echo $error = 'Subject is required.';
    } elseif (empty($message)) {
        echo $error = 'Message is required.';
    } elseif (!empty($firstname)) {
        echo $error = 'Problem for sending message.';
    }

    // send
    if (empty($error)) {
        require '../../../hw-content/plugins/phpmailer/data.php';
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = $host;
            $mail->SMTPAuth = true;
            $mail->Username = $username;
            $mail->Password = $password;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = $port;

            $mail->setFrom($_REQUEST['email']);
            $mail->addAddress($username);
            $mail->addReplyTo($_REQUEST['email']);

            $mail->isHTML(false);

            $mail->Subject = $_REQUEST['subject'];
            $mail->Body    = $_REQUEST['message'];

            if (!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
               // echo 'Message has been sent';
                ?>
                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="..." class="rounded me-2" alt="...">
                            <strong class="me-auto"><?php echo $_SERVER['SERVER_NAME'];?></strong>
                            <small><?php echo date('h:i:sa');?></small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                        Thank you for contacting us. We will be in touch with you very soon.
                        </div>
                    </div>
                </div>
<?php
            }
        }
    }

