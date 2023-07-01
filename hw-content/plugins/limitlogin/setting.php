<?php

/**
 * Setting
 * 
 * Limit login
 */

class loginLimit{


    public $status;
    public $count;
    public $minute;
    public $error;

  // value
    public function value()
    {
        $this->status = filter_input(INPUT_POST, 'status');
        $this->count = filter_input(INPUT_POST, 'count');
        $this->minute = filter_input(INPUT_POST, 'minute');
        $this->error;
    }
    // validate
    public function val()
    {
        if (empty($this->status)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please choose status.  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->count)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter attempt limit.  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->minute)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter  Blocking Minute .  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
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

// count 
$count = "' . $this->count . '";

// minute 
$minute = "' . $this->minute . '";
            ';
            if (file_put_contents('../hw-content/plugins/' . $public . '/data.php', $content)) {
                redirect('plugin-setting.php?public_plugin='.$public);
            }
         }
     }
}
