<?php


/**
 * Load
 * 
 * configure php mailer & display plugins data
 */

// plugins & Data
$plugin = file_get_contents('../hw-content/plugins/' . $public . '/plugin.json');
$about = json_decode($plugin);
require '../hw-content/plugins/' . $public . '/data.php';

require 'setting.php';
$mailer = new phpMailer();

// save
if (isset($_POST['save'])) {
    $add = $mailer->add($public);
}

?>
<div class="d-flex bd-highlight">
    <div class="p-2 flex-grow-1 bd-highlight">
        <h5 class=""><?php echo $about->name ?></h5>
    </div>
    <div class="p-2 bd-highlight">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Setting</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">About</button>
            </div>
        </nav>
    </div>
</div>
<div class="py-3"></div>
<div class="tab-content" id="nav-tabContent">

    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <form action="" method="post" class="form-group">

            <div class="row">
                <div class="col-lg-6">
                    <label class="form-label">Company Name</label>
                    <input type="text" class="form-control" name="company_name" value="<?php echo $name ?>">
                    
                    <label class="form-label py-2">Host</label>
                    <input type="text" class="form-control" name="host" value="<?php echo $host ?>">
                    
                    <label class="form-label py-2">User</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $username ?>">
                    
                    <label class="form-label py-2">Password</label>
                    <input type="text" class="form-control" name="mailer_password" value="<?php echo $password ?>">
                   
                    <label class="form-label py-2">Port</label>
                    <input type="text" class="form-control" name="port" value="<?php echo $port ?>">
                    
                    <div class="py-2"></div>
                    <button type="submit" name="save" class="btn btn-outline-secondary">Save</button>
                </div>
                <div class="col-lg-6">

                </div>
            </div>
        </form>

    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="row">
            <div class="col-lg-10">
                <h4><?php echo $about->name ?></h4>
                <p>Version: <?php echo $about->version ?></p>
                <p>Author: <?php echo $about->author ?></p>
                <br />

                <p>A full-featured email creation and transfer class for PHP</p>
                <h4>Features</h4>
                <ul>
                    <li>Probably the world's most popular code for sending email from PHP!</li>
                    <li>Used by many open-source projects: WordPress, Drupal, 1CRM, SugarCRM, Yii, Joomla! and many more</li>
                    <li>Integrated SMTP support – send without a local mail server</li>
                    <li>Protects against header injection attacks</li>
                    <li>Validates email addresses automatically</li>
                    <li>Much more!</li>
                </ul>
                <br />
                
                <a href="<?php echo $about->homepage ?>" target="_blank">Visit Site</a>
            </div>
        </div>
    </div>
</div>