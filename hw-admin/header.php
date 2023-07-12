<?php

/**
 *  Header
 * 
 */

// Incluudes files
require 'load.php';

// users
$hw_users = new users();
//$connect = $hw_users->db_connect();

if (isset($_SESSION['ID'])) {
    $id = $_SESSION['ID'];
    $get_users = $hw_users->view_user('hw_users', $id);
    $rows = ($get_users);
    if ($rows->num_rows == TRUE) {
        $row = $get_users->fetch_assoc();
?>

        <!DOCTYPE html>

        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title>Hahu Web 
                <?php
                if (page_name() != 'Index') {
                    echo '- ' . page_name();
                }
                ?>
            </title>
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

            <!-- css -->
            <link rel="stylesheet" href="../hw-includes/assets/css/bootstrap.min.css" />
            <link rel="stylesheet" href="assets/css/style.css" />

            <!--icons-->
            <link rel="stylesheet" href="../hw-includes/assets/fontawesome/css/fontawesome.css" />
            <link rel="stylesheet" href="../hw-includes/assets/fontawesome/css/solid.css" />
            <link rel="stylesheet" href="../hw-includes/assets/fontawesome/css/brands.css" />

            <?php
            if (page_name() == 'post-new' or page_name() == 'post-edit') {
            ?>
                <!-- Trumbowyg -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.2/ui/trumbowyg.min.css" />
            <?php
            }
            ?>
        </head>

        <body>

            <!-- preloader 
            <div class="preloader">
                <div class="d-flex justify-content-center">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
            end preloader -->

            <nav class="navbar fixed-top navbar-expand-lg">
                <div class="container-fluid">
                    <button class="navbar-toggler side-toggler" type="button">
                        <span class="fa-solid fa-bars"></span>
                    </button>
                    <button class="side-toggle" type="button">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <button class="side-staggered" type="button">
                        </i><i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">Hahu<span class="navbar-web">Web</span></a>
                    <a class="nav-link sm-profile-picture" href="profile.php">
                        <?php
                        if ($row['user_img'] == TRUE) {
                        ?>
                            <img class="img-circle" src="<?php echo $row['user_img']; ?>" />
                        <?php
                        } else {
                        ?>
                            <div class="profileImg"></div>

                        <?php
                        }
                        ?>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav top-menu ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">
                                    <span class="fa-solid fa-home"></span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php
                                    if ($row['user_img'] == TRUE) {
                                    ?>
                                        <img class="img-circle" src="../<?php echo $row['user_img']; ?>" />
                                    <?php
                                    } else {
                                    ?>
                                        <div class="profileImg"></div>

                                    <?php
                                    }
                                    ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <div class="container text-center">
                                            <?php
                                            if ($row['user_img'] == TRUE) {
                                            ?>
                                                <img class="img-circle" src="../<?php echo $row['user_img']; ?>" />
                                            <?php
                                            } else {
                                            ?>
                                                <p class="profileImg"></p>
                                            <?php
                                            }
                                            ?>
                                            <h4 class="username"><?php echo $row['username']; ?></h4>
                                            <p><?php echo $row['email_phone']; ?></p>
                                        </div>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="profile.php"><i class="fa-solid fa-user"></i> Profile</a></li>
                                    <li><a class="dropdown-item" href="account/signout.php"><i class="fa-solid fa-sign-out-alt"></i> Log out</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php" title="Visit Site" target="_blank">
                                    <span class="fa-solid fa-globe"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="side-menu">
                <div class="py-1"></div>
                <div class="d-block d-lg-none d-xl-none">
                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-grow-1 bd-highlight">
                            <h4>HahuWeb</h4>
                        </div>
                        <div class="p-2 bd-highlight">

                        </div>
                    </div>
                    
                        <hr class="mb-1">
                    
                </div>
                <ul class="navbar-nav navbar-sidenav first-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="fa-solid fa-tachometer-alt"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <hr class="mt-2 mb-1">
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#postCollapse" data-bs-toggle="collapse" role="button" aria-expanded="true">
                            <i class="fa-solid fa-newspaper"></i>
                            <span class="nav-text">Posts</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                        <div class="collapse side-collapse" id="postCollapse">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="post.php" class="nav-link active">
                                        <span class="collapse-icon"><i class="fa-solid fa-list"></i></span>
                                        <span class="nav-text">All</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="post-new.php" class="nav-link">
                                        <span class="collapse-icon"><i class="fa-solid fa-plus"></i></span>
                                        <span class="nav-text">New</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <hr class="mt-2 mb-1">
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="activity.php">
                            <i class="fa-solid fa-history"></i>
                            <span class="nav-text">Activity</span>
                        </a>
                    </li>
                    <li>
                        <hr class="mt-2 mb-1">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#userCollapse" data-bs-toggle="collapse" role="button" aria-expanded="true">
                            <i class="fa-solid fa-fw fa-user"></i>
                            <span class="nav-text">Users</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                        <div class="collapse side-collapse" id="userCollapse">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="users.php" class="nav-link active">
                                        <span class="collapse-icon"><i class="fa-solid fa-list"></i></span>
                                        <span class="nav-text">All</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="user-new.php" class="nav-link ">
                                        <span class="collapse-icon"><i class="fa-solid fa-plus"></i></span>
                                        <span class="nav-text">New</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <hr class="mt-2 mb-1">
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pages.php">
                            <i class="fa-solid fa-file"></i>
                            <span class="nav-text">Pages</span>
                        </a>
                    </li>
                    <li>
                        <hr class="mt-2 mb-1">
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="themes.php">
                            <i class="fa-solid fa-brush"></i>
                            <span class="nav-text">Themes</span>
                        </a>
                    </li>
                    <li>
                        <hr class="mt-2 mb-1">
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="plugins.php">
                            <i class="fa-solid fa-plug"></i>
                            <span class="nav-text">Plugins</span>
                        </a>
                    </li>
                    <li>
                        <hr class="mt-2 mb-1">
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="media.php">
                            <i class="fa-solid fa-image"></i>
                            <span class="nav-text">Media</span>
                        </a>
                    </li>
                    <li>
                        <hr class="mt-2 mb-1">
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="setting.php">
                            <i class="fa-solid fa-cog"></i>
                            <span class="nav-text">Setting</span>
                        </a>
                    </li>
                    <li>
                        <hr class="mt-2 mb-1">
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="account/signout.php">
                            <span class="fa-solid fa-sign-out-alt"></span>
                            <span class="nav-text">Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="overlay"></div>


    <?php
    } else {
        redirect('account/signout.php');
    }
}
    ?>