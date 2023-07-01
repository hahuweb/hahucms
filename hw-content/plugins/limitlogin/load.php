<?php


/**
 * Load
 * 
 * Limit login attempt for admin user & display plugins data
 */

// plugins & Data
$plugin = file_get_contents('../hw-content/plugins/' . $public . '/plugin.json');
$about = json_decode($plugin);
require '../hw-content/plugins/' . $public . '/data.php';

require 'setting.php';
$limit_login = new loginLimit();

// save
if (isset($_POST['save'])) {
    $add = $limit_login->add($public);
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
                    <label class="form-label">Status</label>
                    <select class="form-select" name="status" required="">
                        <?php
                        switch ($status) {

                            case 'Disable':
                        ?>
                                <option value="<?php echo $status ?>"><?php echo $status ?></option>
                                <option value="Enable">Enable</option>
                            <?php
                                break;
                            case 'Enable':
                            ?>
                                <option value="<?php echo $status ?>"><?php echo $status ?></option>
                                <option value="Disable">Disable</option>
                            <?php
                                break;
                            case '':
                            ?>
                                <option value="Disable">Disable</option>
                                <option value="Enable">Enable</option>
                        <?php
                        }
                        ?>

                    </select>
                    <br />

                    <label class="form-label">Block After</label>
                    <input type="number" class="form-control" name="count" value="<?php echo $count ?>">
                    <br />

                    <label class="form-label">Blocking Minute</label>
                    <input type="number" class="form-control" name="minute" value="<?php echo $minute ?>">
                    <br />

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
                <p>Limit login attempt for your website admin users.</p>
            </div>
        </div>
    </div>
</div>