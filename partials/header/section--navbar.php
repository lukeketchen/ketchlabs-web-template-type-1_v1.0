
<!-- Navbar section -->
<section class="section section__full section--navbar">
    <div class="section__background">
        <div class="section__container">

            <div class="logo-wrapper">
                <a class="" href="index.php"><img src="<?= $logo_thin ?>" alt=""></a>
            </div>

            <div class="nav-wrapper">
                <?php foreach($page_navigation as $nav){ ?>
                    
                    <a class="top-menu-item" href="<?=  $nav["nav_link"];  ?>"><?=  $nav["nav_title"];  ?></a>
        
                <?php } ?>
            </div>

            <div class="mobile-nav-wrapper">
                <div class="hamburger hamburger--collapse">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </div>

            <div class="contact-wrapper">
                <p>Email: <a href="mailto:<?= $email_address; ?>"><?= $email_address; ?></a></p>
            </div>

        </div>
    </div>
</section>


<section class="section section__full section--mobile-nav">
    <div class="section__background">
        <div class="section__container">

            <?php foreach($page_navigation as $nav){ ?>
                    
                <h2><a class="top-menu-item" href="<?=  $nav["nav_link"];  ?>"><?=  $nav["nav_title"];  ?></a></h2>
        
            <?php } ?>

        </div>
    </div>
</section>