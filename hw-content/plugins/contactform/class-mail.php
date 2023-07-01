<?php

/**
 * Class Mail
 * 
 * Handles sending message 
 */


class mail
{
    public $email;
    public $subject;
    public $message;
    public $firstname;
    public $error;

    public function values()
    {
        $this->email = filter_input(INPUT_POST, 'email');
        $this->subject = filter_input(INPUT_POST, 'subject');
        $this->message = filter_input(INPUT_POST, 'message');
        $this->firstname = filter_input(INPUT_POST, 'firstname');
        $this->error;
    }

    public function validate()
    {
        if (empty($this->email)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Email  is required.  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->subject)) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Subject is required. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->message)) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Message is required. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }elseif (!empty($this->firstname)) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Problem for sending message <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

    public function sendMailer($name, $host, $sender, $password, $port, $mail, $smtp)
    {
        $this->values();
        $this->validate();
        if (empty($this->error)) {

            $mail = $mail;
            $mail->isSMTP();
            $mail->Host       = $host;                      //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                       //Enable SMTP authentication
            $mail->Username   = $sender;                    //SMTP username
            $mail->Password   = $password;                  //SMTP password          
            $mail->SMTPSecure = $smtp;                      //Enable implicit TLS encryption
            $mail->Port       = $port;

            //Recipients
            $mail->setFrom($this->email);
            $mail->FromName = $name;

            $mail->addAddress($sender);                          //Add a recipient
            $mail->addReplyTo($sender);

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
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
                            <a href="<?php echo site_url();?>" class="btn btn-outline-secondary">ok</a>
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
                            <a href="<?php echo site_url();?>" class="btn btn-default">ok</a>
                        </div>
                    </div>
                </div>
<?php
            }
        }
    }
}
