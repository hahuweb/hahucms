<?php

/**
 *  Active admin users
 * 
 */

include 'header.php';


?>
<div class="content-wrapper" id="page-content">
    <div class="container-fluid">
        <h4>Active Users</h4>
        <div class="py-2"></div>
        <?php
        $active_users = $hw_users->active_users('hw_users');
        $row_users = ($active_users);
        if ($row_users->num_rows == TRUE) {
        ?>
            <div class="table-responsive">
                <table class="table align-middle table-striped">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Login</th>
                        <th scope="col">Location</th>
                        <th scope="col">Device</th>
                    </tr>
                    <?php
                    while ($row_users = $active_users->fetch_assoc()) {

                    ?>
                        <tr>
                            <td><?php echo ucfirst($row_users['username']); ?></td>
                            <td>
                                <?php
                               // echo $row_users['login_at'];

                                ?>
                                <?php
                                if ($row['login_at'] == '0000-00-00 00:00:00') {
                                } else {
                                    timeDeff($row_users['login_at'], current_datetime());
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                    if ($row_users['user_location'] == '127.0.0.1' or $row_users['user_location'] == 'localhost') {
                                    echo $row_users['user_location'];
                                } else {
                                    $ipdat = @json_decode(file_get_contents(
                                        "http://www.geoplugin.net/json.gp?ip=" . $row_users['user_location']
                                    ));
                                    echo $ipdat->geoplugin_city;
                                    echo ', &nbsp;';
                                    echo $ipdat->geoplugin_countryName;
                                }
                                ?>
                            </td>
                            <td><?php echo $row_users['user_device']; ?></td>

                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
include 'footer.php';
?>