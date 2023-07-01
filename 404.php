<?php

/**
 * 404
 * 
 * 
 */

require 'hw-includes/site/load.php';
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>404</title>

    <!-- css -->
    <link rel="stylesheet" href="hw-includes/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="hw-includes/assets/css/style.css" />

    <!-- icons -->
    <link rel="stylesheet" href="hw-includes/assets/fontawesome/css/fontawesome.css" />
    <link rel="stylesheet" href="hw-includes/assets/fontawesome/css/solid.css" />
    <link rel="stylesheet" href="hw-includes/assets/fontawesome/css/brands.css" />

</head>

<body>

    <section class="pb-5 pg-lib-item pt-5 text-center">
        <div class="container pb-5 pt-5">
            <div class="pb-5 pt-5 row">
                <div class="col-lg-9 col-xl-8 ms-auto me-auto pb-5 pt-5">
                    <h1 class="display-4 fw-bold mb-3 text-dark">404</h1>
                    <p class="fw-light lead mb-4">Page not found</p>
                        <a href="<?php echo site_url()?>" class="btn btn-outline-secondary pe-3 ps-3">Back to home page</a>
                </div>
            </div>
        </div>
    </section>
    <script src="hw-includes/assets/js/jquery-3.1.0.min.js"></script>
    <script src="hw-includes/assets/js/bootstrap.bundle.min.js"></script>
    <script src="hw-includes/assets/js/main.js"></script>
</body>

</html>