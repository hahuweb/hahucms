<?php

/**
 * Setting
 * 
 * Configure contact form
 */

class contactForm
{


    public $status;
    public $page;
    public $error;

    // value
    public function value()
    {
        $this->status = filter_input(INPUT_POST, 'status');
        $this->page = filter_input(INPUT_POST, 'page');
        $this->error;
    }

    // validate
    public function val()
    {
        if (empty($this->status)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter company name.  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->page)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter host name.  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

    // add php mailer 
    public function add($private)
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

// page 
$page = "' . $this->page . '";
';
            if (file_put_contents('../hw-content/plugins/' . $private . '/data.php', $content)) {
                redirect('plugin-setting.php?public_plugin='.$private);
            }
        }
    }
}
