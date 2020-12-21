<!-- Header -->
<?php include "header.php";

    $page_title = "Gallery"; 

?>

<!-- Navbar -->
<?php include "partials/header/section--navbar.php" ?>


<div id="gallery-page">
    <!-- Set page title above-->
    <?php include "partials/header/section--breadcrumb.php" ?>

    <?php include "partials/sections/section--gallery-slider.php" ?>

    <?php include "partials/sections/section--gallery-grid.php" ?>

</div>

<!-- Footer -->
<?php include "partials/footer/footer.php" ?>