<?php

/**
 * Setting
 * 
 * Configure php mailer
 */

class phpMailer{


    public $company_name;
    public $host;
    public $username;
    public $mailer_password;
    public $port;
    public $error;

  // value
    public function value()
    {
        $this->company_name = filter_input(INPUT_POST, 'company_name');
        $this->host = filter_input(INPUT_POST, 'host');
        $this->username = filter_input(INPUT_POST, 'username');
        $this->mailer_password = filter_input(INPUT_POST, 'mailer_password');
        $this->port = filter_input(INPUT_POST, 'port');
        $this->error;
    }
    // validate
    public function val()
    {
        if (empty($this->company_name)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter company name.  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->host)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter host name.  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->username)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter username or sender name.  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->mailer_password)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter company password. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->port)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter port. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

     // add php mailer 
     public function add($public)
     {
         $this->value();
         $this->val();
         if (empty($this->error)) {
          $content = '
          <?php

          /**
          * Data
          * 
          * Plugins data.
          */
          
          // company_name 
          $name = "' . $this->company_name . '";
          
          // host 
          $host = "' . $this->host . '";

          // host 
          $username = "' . $this->username . '";

          // password 
          $password = "' . $this->mailer_password . '";

          // port 
          $port = "' . $this->port . '";

          ';
            if (file_put_contents('../hw-content/plugins/' . $public . '/data.php', $content)) {
                redirect('plugin-setting.php?public_plugin='.$public);
            }
         }
     }
}
