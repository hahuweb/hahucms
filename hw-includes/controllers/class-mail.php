<?php

/**
 * Mail
 * 
 * Handles sending message to admin users
 */


class mail
{

    public $subject;
    public $message;
    public $error;

    public function values()
    {
        $this->subject = filter_input(INPUT_POST, 'subject');
        $this->message = filter_input(INPUT_POST, 'message');
        $this->error;
    }

    public function validate()
    {
        if (empty($this->subject)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter subject  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->message)) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter message <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

    public function sendMailer($mail, $host, $user, $password, $smtp, $port, $sender, $reciver)
    {
        $this->values();
        $this->validate();
        if (empty($this->error)) {

            //$mail = new PHPMailer(true);
            $mail = $mail;
            $mail->isSMTP();
            $mail->Host       = $host;                      //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                       //Enable SMTP authentication
            $mail->Username   = $user;                      //SMTP username
            $mail->Password   = $password;                  //SMTP password
            //$mail->SMTPSecure = $secure; //PHPMailer::ENCRYPTION_SMTPS;    //Enable implicit TLS encryption
            $mail->SMTPSecure = $smtp;
            $mail->Port       = $port;

            //Recipients
            $mail->setFrom($reciver);
            $mail->FromName = 'Name';

            $mail->addAddress($sender);                          //Add a recipient
            $mail->addReplyTo($sender);

            //Content
            $mail->isHTML(true);                                         //Set email format to HTML
            $mail->Subject = $this->subject;
            $mail->Body    = $this->message;
            if ($mail->send()) {
?>
                <div class="model_overley">
                    <div class="modal_dialog ">
                        <div class="py-2"></div>
                        <div class="text-center">
                            <i class="fas fa-check-circle"></i>
                            <h4>Message sent successfully!</h4>
                        </div>
                        <div class="modal_footer">
                            <a href="users.php" class="btn btn-outline-secondary">ok</a>
                        </div>
                    </div>
                </div>
            <?php
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
                            <a href="users.php" class="btn btn-default">ok</a>
                        </div>
                    </div>
                </div>
<?php
            }
        }
    }
}
