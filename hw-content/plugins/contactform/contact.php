<?php

/**
 * Contact
 * 
 * 
 */
/*
// php mailer api
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require_once 'class-mail.php';
$mailer = new mail();

// php mailer 
require '../resources/venders/phpmailer/Exception.php';
require '../resources/venders/phpmailer/PHPMailer.php';
require '../resources/venders/phpmailer/SMTP.php';


if (isset($_POST['send'])) {

    if (file_exists('../resources/venders/phpmailer/data.json')) {
        $data = file_get_contents('../resources/venders/phpmailer/data.json');
        $plugin_data = json_decode($data);
        $mail = new PHPMailer(true);
        $smtp = PHPMailer::ENCRYPTION_SMTPS;
        $send_mail = $mailer->sendMailer(
            $plugin_data->name,
            $plugin_data->host,
            $plugin_data->username,
            $plugin_data->password,
            $plugin_data->port,
            $mail,
            $smtp,
        );
    } else {
?>
        <div class="model_overley">
            <div class="modal_dialog">
                <div class="py-2"></div>
                <div class="text-center">
                    <i class="fas fa-exclamation-circle"></i>
                    <h4>Message could not be sent</h4>
                </div>
                <div class="modal_footer">
                    <p>Try again later</p>
                    <a href="<?php echo site_url(); ?>" class="btn btn-default">ok</a>
                </div>
            </div>
        </div>
<?php
    }
}
*/
require 'content.php'
?>
<div class="py-4"></div>
<div class="container contact">
    <div class="row">
        <div class="col-sm-12 col-lg-5 contact-text">
            <div class="p-4 p-md-4 p-xl-3 text-center">
                <br />
                <i class="fa-solid fa-envelope"></i>

            </div>
        </div>
        <div class="col-sm-12 col-lg-7">
            <form method="post" class="form-group" name="uc" id="uc">
                <h4>Contact Us</h4>
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <input type="text" name="firstname" id="firstname" class="form-control firstname" placeholder="First Name" tabindex="-1" autocomplete="nope" />
                    </div>
                    <div class="col-sm-12 col-lg-6 form-group" id="email-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" tabindex="-1" autocomplete="nope" required>
                    </div>
                    <div class="col-sm-12 col-lg-6 form-group" id="subject-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" tabindex="-1" autocomplete="nope" required>
                    </div>
                </div>
                <div class="py-1"></div>
                <div class="form-group" id="message-group">
                    <textarea class="form-control" name="message" placeholder="Leave a comment here" rows="8" style="margin-top: 10px;" id="message" autocomplete="nope" tabindex="-1"></textarea>
                </div>
                <br />

                <button class="btn submit" name="send" type="submit">Submit</button>
                <button class="btn" type="button" id="loader" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Sending...
                </button>
            </form>
        </div>
    </div>
    <div class="contact-msg">
        
    </div>
</div>
<div class="py-4"></div>

</div>
<?php
//require 'script.php'
?>