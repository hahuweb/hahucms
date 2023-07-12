<?php

/**
 * Setting
 * 
 * Facebook Messenger
 */

class loginLimit
{


    public $status;
    public $code;
    public $error;

    // value
    public function value()
    {
        $this->status = filter_input(INPUT_POST, 'status');
        $this->code = filter_input(INPUT_POST, 'code');

        $this->error;
    }
    // validate
    public function val()
    {
        if (empty($this->status)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please choose status.  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }elseif(empty($this->code)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter your code.  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

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

// status 
$status = "' . $this->status . '";

// code 
$code = <<<"EOD"
 '.trim($this->code).' 
 EOD;

            ';
            if (file_put_contents('../hw-content/plugins/' . $public . '/data.php', $content)) {
                redirect('plugin-setting.php?public_plugin=' . $public);
            }
        }
    }
}
