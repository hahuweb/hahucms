<?php

/**
 * Site
 * 
 * Site, pages and theme data
 */


require 'load.php';

class plugins
{

    public $contactPath;
    public $mailerPath;
    public $fbPath;

    // values
    public function values()
    {
        $this->contactPath = 'hw-content/plugins/contactform/';
        $this->mailerPath = 'hw-content/plugins/phpmailer/';
        $this->fbPath = 'hw-content/plugins/facebookmessenger/';
    }

    public function contactForm($name)
    {
        $this->values();
        require $this->contactPath . 'data.php';
        if ($status == 'Enable') {
            if ($page == $name) {
                require_once $this->contactPath . 'contact.php';
            }
        }
    }

    public function contact_js()
    {
        $this->values();
        require $this->contactPath . 'data.php';
        if ($status == 'Enable') {
            require_once $this->contactPath . 'script.php';
        }
    }

    /**
     * Php mailer
     */
    public function mailer()
    {
        $this->values();
        if (file_exists($this->mailerPath)) {
            $mailer = file_get_contents($this->mailerPath);
            $mailer_data = json_decode($mailer);
        }
    }

    /**
     * Facebook messenger
     */

    public function facebookMessenger()
    {
        $this->values();
        if (file_exists($this->fbPath . 'data.php')) {
            require $this->fbPath . 'data.php';
            if ($status == 'Enable') {
                echo $code;
            }
        }
    }
}
