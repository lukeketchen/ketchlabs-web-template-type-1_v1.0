<!-- Header -->
<?php include "header.php" ?>




<div id="home-page">
    <!-- Navbar -->
    <?php include "partials/header/section--navbar.php" ?>
    
    <!-- If a page title is set above it will show the breadcrumbs section -->
    <?php ($page_title=="" ? "" : include "partials/header/section--breadcrumb.php" ) ?>

    <?php include "partials/sections/section--home-banner.php" ?>

    <?php include "partials/sections/section--home-about.php" ?>

    <?php include "partials/sections/section--testimonials.php" ?>

    <?php include "partials/sections/section--home-services.php" ?>

    <?php include "partials/sections/section--home-projects.php" ?>

    <?php include "partials/sections/section--home-contact.php" ?>

</div>

<!-- Footer -->
<?php include "partials/footer/footer.php" ?>
