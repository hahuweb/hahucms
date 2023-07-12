<?php

/**
 * Values
 * 
 * 
 * values and validation 
 */


class values extends dbConnect
{

    // values
    public $username;
    public $user_password;
    public $password_hash;
    public $hash;
    public $email_phone;
    public $user_role;
    public $verification;
    public $last_login;
    public $user_location;
    public $user_device;
    public $user_img;
    public $user_status;
    public $login_at;
    public $otp;
    public $code;
    public $reg_date;
    public $agent = "";
    public $new_password;
    public $rename_password;
    public $login_attempt;
    public $locked;
    public $firstname;

    public $error;
    public $conn;


    // get values
    public function getValue()
    {
        $this->username = filter_input(INPUT_POST, 'username');
        $this->email_phone = filter_input(INPUT_POST, 'email_phone', FILTER_VALIDATE_EMAIL);
        $this->user_password = filter_input(INPUT_POST, 'user_password');
        $this->new_password = filter_input(INPUT_POST, 'new_password');
        $this->rename_password = filter_input(INPUT_POST, 'rename_password');
        $this->password_hash = password_hash($this->user_password, PASSWORD_DEFAULT);
        $this->hash = password_hash($this->new_password, PASSWORD_DEFAULT);
        $this->user_role = filter_input(INPUT_POST, 'user_role');
        $this->verification = filter_input(INPUT_POST, 'verification');
        $this->last_login = date("Y-m-d");
        // $this->user_location;
        //$this->user_device;
        $this->user_img = str_replace("../", "", filter_input(INPUT_POST, 'user_img'));
        
        // $this->user_status;
        //$this->login_at = date("h:i:sa");
        //$this->otp;
        $this->code = filter_input(INPUT_POST, 'code');
        $this->reg_date = date("y-m-d");
        $this->login_attempt;
        //$this->locked =  $_SESSION['locked'];
        $this->firstname = filter_input(INPUT_POST, 'firstname');
        $this->error;
    }


    // get operating system
    public $os = array(
        'windows nt 10.0'   => 'Windows 10',
        'windows nt 6.3'    => 'Windows 8.1',
        'windows nt 6.2'    => 'Windows 8',
        'windows nt 6.1'    => 'Windows 7',
        'windows nt 6.0'    => 'Windows Vista',
        'windows nt 5.2'    => 'Windows 2003',
        'windows nt 5.1'    => 'Windows XP',
        'windows nt 5.0'    => 'Windows 2000',
        'windows nt 4.0'    => 'Windows NT 4.0',
        'winnt4.0'          => 'Windows NT 4.0',
        'winnt 4.0'         => 'Windows NT',
        'winnt'             => 'Windows NT',
        'windows 98'        => 'Windows 98',
        'win98'             => 'Windows 98',
        'windows 95'        => 'Windows 95',
        'win95'             => 'Windows 95',
        'windows phone'     => 'Windows Phone',
        'windows'           => 'Unknown Windows OS',
        'android'           => 'Android',
        'blackberry'        => 'BlackBerry',
        'BB'                => 'BlackBerry',
        'iphone'            => 'iOS',
        'ipad'              => 'iOS',
        'ipod'              => 'iOS',
        'os x'              => 'Mac OS X',
        'ppc mac'           => 'Power PC Mac',
        'freebsd'           => 'FreeBSD',
        'ppc'               => 'Macintosh',
        'Linux'             => 'Linux',
        'debian'            => 'Debian',
        'sunos'             => 'Sun Solaris',
        'beos'              => 'BeOS',
        'apachebench'       => 'ApacheBench',
        'aix'               => 'AIX',
        'irix'              => 'Irix',
        'osf'               => 'DEC OSF',
        'hp-ux'             => 'HP-UX',
        'netbsd'            => 'NetBSD',
        'bsdi'              => 'BSDi',
        'openbsd'           => 'OpenBSD',
        'gnu'               => 'GNU/Linux',
        'unix'              => 'Unknown Unix OS',
        'symbian'           => 'Symbian OS',
        'Nokia'             => 'Nokia Mobile',
    );

    /**
     *  Validate
     */
    public function loginVal()
    {
        if (empty($this->username)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter username <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->user_password)) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter password  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (strlen(trim($this->user_password)) < 8) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Password must Have 8 characters <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }elseif (!empty($this->firstname)) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Problem for login <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

    public function signupVal()
    {
        if (empty($this->username)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter username <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->user_password)) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter password  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->email_phone)) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter email address <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (!filter_var($this->email_phone, FILTER_VALIDATE_EMAIL)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter valid email <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (strlen(trim($this->user_password)) < 8) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Password must Have 8 characters <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }elseif (!empty($this->firstname)) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Problem for login <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

    public function emailVal()
    {
        if (empty($this->email_phone)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter email address   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (!filter_var($this->email_phone, FILTER_VALIDATE_EMAIL)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter valid email address <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }elseif (!empty($this->firstname)) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Problem for login <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

    public function passVal()
    {
        if (empty($this->user_password)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter password   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->new_password)) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter password again  characters <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (strlen(trim($this->user_password)) < 8) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Password must Have 8 characters <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (strlen(trim($this->new_password)) < 8) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Password must Have 8 characters <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

    public function recoverpassVal()
    {
        if (empty($this->user_password)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter password   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->rename_password)) {
            echo $this->error =  "<div class='alert alert-warning alert-dismissible fade show' role='alert'>Please enter password again <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
        } elseif (strlen(trim($this->user_password)) < 8) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Password must Have 8 characters <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (strlen(trim($this->rename_password)) < 8) {
            echo $this->error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Password must Have 8 characters <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif ($this->user_password != $this->rename_password) {
            echo $this->error =  "<div class='alert alert-warning alert-dismissible fade show' role='alert'>Passwod did't match <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
        }
    }

    public function allVal()
    {
        if (empty($this->username)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter user name   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (empty($this->email_phone)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter email address  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } elseif (!filter_var($this->email_phone, FILTER_VALIDATE_EMAIL)) {
            echo $this->error =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Please enter valid email <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

    public function imgVal()
    {
        if (empty($this->user_img)) {
            echo $this->error  =  '<div class="alert alert-warning alert-dismissible fade show" role="alert">Select profile picture <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }

    /**
     * get os information
     */

    function user_agent()
    {
        $this->agent = $_SERVER['HTTP_USER_AGENT'];
        return $this->agent;
    }

    public function get_os()
    {
        $device_name = "Unknown Platform";
        foreach ($this->os as $key => $val) {
            if (preg_match('|' . preg_quote($key) . '|i', $this->user_agent())) {
                $device_name = $val;
                break;
            }
        }
        return $device_name;
    }

    public function device()
    {
        $tablet_browser = 0;
        $mobile_browser = 0;
        if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($this->agent))) {
            $tablet_browser++;
        }
        if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($this->agent))) {
            $mobile_browser++;
        }
        if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
            $mobile_browser++;
        }
        $mobile_ua = strtolower(substr($this->agent, 0, 4));
        $mobile_agents = array(
            'w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi', 'avan', 'benq', 'bird', 'blac',
            'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno',
            'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-',
            'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-',
            'newt', 'noki', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox',
            'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar',
            'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-',
            'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp',
            'wapr', 'webc', 'winw', 'winw', 'xda ', 'xda-'
        );
        if (in_array($mobile_ua, $mobile_agents)) {
            $mobile_browser++;
        }
        if (strpos(strtolower($this->agent), 'opera mini') > 0) {
            $mobile_browser++;
            //Check for tablets on opera mini alternative headers
            $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA']) ? $_SERVER['HTTP_X_OPERAMINI_PHONE_UA'] : (isset($_SERVER['HTTP_DEVICE_STOCK_UA']) ? $_SERVER['HTTP_DEVICE_STOCK_UA'] : ''));
            if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
                $tablet_browser++;
            }
        }
        if ($tablet_browser > 0) {
            return 'Tablet';
        } else if ($mobile_browser > 0) {
            return 'Mobile';
        } else {
            return 'Desktop';
        }
    }

    public function get_device()
    {
        $this->user_device = $this->get_os() . ',&#160;' . $this->device();
        return $this->user_device;
    }


    /**
     * Get user location
     */
    public function getLocation()
    {
        $this->user_location = '';
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            // to get shared ISP IP address
            $this->user_location = $_SERVER['HTTP_CLIENT_IP'];
        } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            // check for IPs passing through proxy servers
            // check if multiple IP addresses are set and take the first one
            $ipAddressList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            foreach ($ipAddressList as $ip) {
                if (!empty($ip)) {
                    // if you prefer, you can check for valid IP address here
                    $this->user_location = $ip;
                    break;
                }
            }
        } else if (!empty($_SERVER['HTTP_X_FORWARDED'])) {
            $this->user_location = $_SERVER['HTTP_X_FORWARDED'];
        } else if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
            $this->user_location = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
        } else if (!empty($_SERVER['HTTP_FORWARDED_FOR'])) {
            $this->user_location = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if (!empty($_SERVER['HTTP_FORWARDED'])) {
            $this->user_location = $_SERVER['HTTP_FORWARDED'];
        } else if (!empty($_SERVER['REMOTE_ADDR'])) {
            $this->user_location = $_SERVER['REMOTE_ADDR'];
        }
        return  $this->user_location;
    }


    /**
     * Limit login attempt
     */
    public function insert_attempt($attempt_time, $device)
    {
        $ip = $this->getLocation();
        $tsql = "INSERT INTO hw_login_attempt (ip, attempt_time, device)  VALUES  ('$ip', '$attempt_time', '$device') ";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql);
        if ($results == TRUE) {
            refresh($_SERVER["PHP_SELF"]);
        }
    }


    public function attempt()
    {
        $this->db_connect();
        if (file_exists('../../hw-content/plugins/limitlogin/data.php')) {
            require '../../hw-content/plugins/limitlogin/data.php';
            if ($status == 'Enable') {
                if (isset($_SESSION['login_attempt']))
                    $_SESSION['login_attempt'] = $_SESSION['login_attempt'] + 1;
                else
                    $_SESSION['login_attempt'] = 1;
                if ($_SESSION['login_attempt'] > $count) {
                    $time = time();
                    $this->insert_attempt($time, $this->get_device());
                }
            }
        }

    }
}
