<?php

/**
 * Aactivity 
 * 
 * Admin users activity
 */


// header
include 'header.php';
?>

<div class="content-wrapper" id="page-content">
    <div class="container-fluid">
        <h4>Activity</h4>
        <div class="py-2"></div>
        <div class="row">
            <?php

            $all_users = $hw_users->all_users('hw_users');
            $rows_all = ($all_users);
            if ($rows_all->num_rows == TRUE) {
            ?>
                <div class="table-responsive">
                    <table class="table align-middle table-striped">
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Last login</th>
                            <th scope="col">Location</th>
                            <th scope="col">Device</th>
                        </tr>
                        <?php
                        while ($row_all = $all_users->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo ucfirst($row_all['username']); ?></td>
                                <td>
                                    <?php
                                    if ($row_all['last_login'] == '0000-00-00') {
                                    } else {
                                        dateDeff($row_all['last_login'], current_date());
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($row_all['user_location'] == true) {
                                        if ($row_all['user_location'] == '127.0.0.1' or $row_all['user_location'] == 'localhost') {
                                            echo $row_all['user_location'];
                                        } else {
                                            $ipdat = @json_decode(file_get_contents(
                                                "http://www.geoplugin.net/json.gp?ip=" . $row_all['user_location']
                                            ));
                                            echo $ipdat->geoplugin_city;
                                            echo ', &nbsp;';
                                            echo $ipdat->geoplugin_countryName;
                                        }
                                    }
                                    ?>
                                </td>
                                <td><?php echo $row_all['user_device']; ?></td>

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
</div>

<?php

// footer
include 'footer.php';
?>