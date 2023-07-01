<?php

/**
 * Post
 * 
 * Display blog post
 */

class blog extends dbConnect
{


    /**
     * Hw users
     */
    public function view_user($table, $id)
    {
        $this->db_connect();
        $tsql = "SELECT * FROM $table WHERE id='$id' ";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql);
        return $results;
    }

    /**
     * Post
     */
    public function post($table)
    {
        $this->db_connect();
        $tsql = "SELECT * FROM $table ORDER BY post_date DESC";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql);
        return $results;
    }
    
    /**
     * Count post
     */
    public function countPost($table)
    {
        $results =  $this->post('hw_post');
        $rows = $results;
        $count_post = mysqli_num_rows($results);
        if ($rows->num_rows == TRUE) {
?>
            <div class="mb-2 d-flex">
                <div class="p-2 flex-grow-1 bd-highlight">
                    <h5 class="">Post</h5>
                </div>
                <div class="p-2 bd-highlight">
                    <div class="py-1"></div>
                    <?php
                    if ($count_post > 0) {
                        echo '<span>' . $count_post . ' post</span>';
                    }
                    ?>
                </div>
                <div class="p-2 bd-highlight">
                    <div class="pe-6 my-1">
                        <div class="dropdown">
                            <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Sort by
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="post.php?view">View</a></li>
                                <li><a class="dropdown-item" href="post.php?descending">Date <span class="small text-muted">Descending</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2"></div>

            <?php
            while ($row = $results->fetch_assoc()) {
            ?>

            <?php
            }
            ?>

        <?php
        }
    }


    public function allPost()
    {
        $results = $this->post('hw_post');
        while ($row = $results->fetch_assoc()) {
            $post_id = $row['post_id'];
            $today = date('y-m-d');
        ?>
            <div class="col-lg-6">
                <div class="card">
                    <a href="view.php?post_id=<?php echo $row['post_id'] ?>" style="width:100%">
                        <img src="<?php echo $row['img'] ?>" class="card-img-to" alt="..." style="width:100%">
                    </a>
                    <div class="card-body align-items-center p-3 p-sm-4">
                        <h5 class="card-title"><?php echo $row['post_title'] ?></h5>
                        <br />
                        <div class="d-flex bd-highlight mb-3">
                            <div class="me-auto bd-highlight">
                                <span class="text-muted small m-1">

                                    <?php
                                    $post_users = $this->view_user('hw_users', $row['post_author']);
                                    $user_post = ($post_users);
                                    if ($user_post->num_rows == TRUE) {
                                        $user_post = $post_users->fetch_assoc();
                                        if ($user_post['user_img'] == true) {
                                    ?>
                                            <img src="<?php echo $user_post['user_img'] ?>" style="width: 40px;height:40px; border-radius:50px">

                                        <?php
                                        }
                                        ?>
                                </span>
                                <span class="text-muted small m-2">
                                <?php

                                        echo $user_post['username'];
                                    }
                                ?>
                                </span>
                                <span class="text-muted small m-2">
                                    <?php
                                    if ($row['view']  > 0) {
                                        echo countViews($row['view']);
                                    }
                                    ?>
                                </span>
                                <span class="text-muted small m-2">
                                    <?php
                                    if ($row['post_date'] == '0000-00-00') {
                                    } else {
                                        dateDeff($row['post_date'], current_date());
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
    }


    /**
     * View post
     */
    public function countView($id)
    {
        $this->db_connect();
        $tsql = "SELECT * FROM hw_post WHERE post_id = '$id'";
        $results = mysqli_query($this->conn, $tsql);
        $rows = ($results);
        if ($rows->num_rows == TRUE) {
            $row = $results->fetch_assoc();
            $view = $row['view'];
            $new_view = $view + 1;

            $update = "UPDATE hw_post SET view=$new_view WHERE post_id='$id' ";
            if ($this->conn->query($update) === TRUE) {
                header("Location:  post-view.php?post_id=" . $row["post_id"]);
            } else {
                echo "Page Error: " . $this->conn->error;
            }
        }
    }


    /**
     * First post
     */
    public function firstPost($table)
    {
        $this->db_connect();

        $tsql_post = "SELECT * FROM $table ORDER BY post_date DESC LIMIT 6";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql_post);
        $rows_post = $results;
        if ($rows_post->num_rows == TRUE) {
        ?>
            <section class="post">
                <div class="container">
                    <div class="mb-4">
                        <div class="d-flex bd-highlight">
                            <div class="p-2 flex-grow-1 bd-highlight">
                                <h5 class="section-title">Post</h5>
                            </div>
                            <div class="p-2 bd-highlight">
                                <a class="text-muted small" href="post.php">More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiffy-slider slider-item-show3 slider-nav-visible slider-nav-autohide slider-item-first-visible slider-nav-dark slider-nav-square">
                        <div class="slider-container">
                            <?php
                            while ($row_post = $results->fetch_assoc()) {
                                $post_id = $row_post['post_id'];
                            ?>
                                <div class="slide-visible">
                                    <a href="view.php?post_id=<?php echo $row_post['post_id'] ?>" style="width:100%">
                                        <div class="card">
                                            <img src="<?php echo $row_post['img'] ?>" alt="..." style="width:100%">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $row_post['post_title'] ?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <button type="button" class="slider-nav"></button>
                        <button type="button" class="slider-nav slider-nav-next"></button>
                    </div>
                </div>
            </section>
            <div class="py-4"></div>
            <?php
        }
    }

    /**
     *  Sort by view
     */
    public function sort_view($table)
    {
        $tsql = "SELECT * FROM $table ORDER BY view DESC";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql);
        $rows = $results;
        if ($rows->num_rows == TRUE) {
            while ($row = $results->fetch_assoc()) {
                $today = date('y-m-d');
            ?>
                <div class="col-lg-6">
                    <div class="card">
                        <a href="view.php?post_id=<?php echo $row['post_id'] ?>" style="width:100%">
                            <img src="<?php echo $row['img'] ?>" class="card-img-to" alt="..." style="width:100%">
                        </a>
                        <div class="card-body align-items-center p-3 p-sm-4">
                            <h5 class="card-title"><?php echo $row['post_title'] ?></h5>
                            <br />
                            <div class="d-flex bd-highlight mb-3">
                                <div class="me-auto bd-highlight">
                                    <span class="text-muted small m-1">

                                        <?php
                                        $post_users = $this->view_user('hw_users', $row['post_author']);
                                        $user_post = ($post_users);
                                        if ($user_post->num_rows == TRUE) {
                                            $user_post = $post_users->fetch_assoc();
                                            if ($user_post['user_img'] == true) {
                                        ?>
                                                <img src="<?php echo $user_post['user_img'] ?>" style="width: 40px;height:40px; border-radius:50px">

                                            <?php
                                            }
                                            ?>
                                    </span>
                                    <span class="text-muted small m-2">
                                    <?php

                                            echo $user_post['username'];
                                        }
                                    ?>
                                    </span>
                                    <span class="text-muted small m-2">
                                        <?php
                                        if ($row['view']  > 0) {
                                            echo countViews($row['view']);
                                        }
                                        ?>
                                    </span>
                                    <span class="text-muted small m-2">
                                        <?php
                                        if ($row['post_date'] == '0000-00-00') {
                                        } else {
                                            dateDeff($row['post_date'], current_date());
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
        }
    }

    public function sort_descending($table)
    {
        $tsql = "SELECT * FROM $table ORDER BY post_date ASC";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql);
        $rows = $results;
        if ($rows->num_rows == TRUE) {
            while ($row = $results->fetch_assoc()) {
                $today = date('y-m-d');
            ?>
                <div class="col-lg-6">
                    <div class="card">
                        <a href="view.php?post_id=<?php echo $row['post_id'] ?>" style="width:100%">
                            <img src="<?php echo $row['img'] ?>" class="card-img-to" alt="..." style="width:100%">
                        </a>
                        <div class="card-body align-items-center p-3 p-sm-4">
                            <h5 class="card-title"><?php echo $row['post_title'] ?></h5>
                            <br />
                            <div class="d-flex bd-highlight mb-3">
                                <div class="me-auto bd-highlight">
                                    <span class="text-muted small m-1">

                                        <?php
                                        $post_users = $this->view_user('hw_users', $row['post_author']);
                                        $user_post = ($post_users);
                                        if ($user_post->num_rows == TRUE) {
                                            $user_post = $post_users->fetch_assoc();
                                            if ($user_post['user_img'] == true) {
                                        ?>
                                                <img src="<?php echo $user_post['user_img'] ?>" style="width: 40px;height:40px; border-radius:50px">

                                            <?php
                                            }
                                            ?>
                                    </span>
                                    <span class="text-muted small m-2">
                                    <?php

                                            echo $user_post['username'];
                                        }
                                    ?>
                                    </span>
                                    <span class="text-muted small m-2">
                                        <?php
                                        if ($row['view']  > 0) {
                                            echo countViews($row['view']);
                                        }
                                        ?>
                                    </span>
                                    <span class="text-muted small m-2">
                                        <?php
                                        if ($row['post_date'] == '0000-00-00') {
                                        } else {
                                            dateDeff($row['post_date'], $today);
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
        }
    }

    public function viewPost($table, $post_id)
    {
        $this->db_connect();

        $tsql_post = "SELECT * FROM $table WHERE post_id=$post_id";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql_post);
        $rows = $results;
        if ($rows->num_rows == TRUE) {
            $row = $results->fetch_assoc();
            $today = date('y-m-d');

            ?>
            <div class="col-lg-8 post-view">
                <div class="card">
                    <img src="<?php echo $row['img'] ?>" class="card-img-to" alt="..." style="width:100%">
                    <div class="card-body align-items-center p-3 p-sm-4">
                        <h5 class="card-title"><?php echo $row['post_title'] ?></h5>
                        <br />
                        <?php echo $row['post_description'] ?>
                        <div class="py-3"></div>
                        <div class="d-flex bd-highlight mb-3">
                            <div class="me-auto bd-highlight ">
                                <span class="text-muted small m-2">

                                    <?php
                                    $post_users = $this->view_user('hw_users', $row['post_author']);
                                    $user_post = ($post_users);
                                    if ($user_post->num_rows == TRUE) {
                                        $user_post = $post_users->fetch_assoc();
                                        if ($user_post['user_img'] == true) {
                                    ?>
                                            <img src="<?php echo $user_post['user_img'] ?>" style="width: 40px;height:40px; border-radius:50px">

                                        <?php
                                        }
                                        ?>
                                </span>
                                <span class="text-muted small m-2">
                                <?php

                                        echo $user_post['username'];
                                    }
                                ?>
                                </span>
                                <span class="text-muted small m-2">
                                    <?php
                                    if ($row['view']  > 0) {
                                        echo countViews($row['view']);
                                    }
                                    ?>
                                </span>
                                <span class="text-muted small m-2">
                                    <?php
                                    if ($row['post_date'] == '0000-00-00') {
                                    } else {
                                        dateDeff($row['post_date'], current_date());
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
    }

    public function relatedPost($table, $id)
    {
        $this->db_connect();

        $tsql_post = "SELECT * FROM $table WHERE NOT post_id='$id' ORDER BY post_date DESC LIMIT 10 /*NOT post_id='$id'*/";
        mysqli_set_charset($this->conn, "utf8");
        $results = mysqli_query($this->conn, $tsql_post);
        $rows_post = $results;
        if ($rows_post->num_rows == TRUE) {
        ?>
            <div class="col-lg-4 col-sm-12">
                <h4>Related Post</h4>
                <div class="py-2 related-post ">
                    <?php
                    while ($row_post = $results->fetch_assoc()) {
                    ?>

                        <a href="view.php?post_id=<?php echo $row_post['post_id'] ?>">
                            <div class="d-flex  menu-flex">
                                <img src="<?php echo $row_post['img'] ?>" alt="..." style="width:100%">
                                <div class="w-100 d-flex flex-column text-start ps-4 menu-flex-text">
                                    <h5 class=""><?php echo $row_post['post_title'] ?></h5>
                                </div>
                            </div>
                        </a>
                        <br />
                    <?php
                    }
                    ?>
                </div>
            </div>
<?php
        }
    }
}
