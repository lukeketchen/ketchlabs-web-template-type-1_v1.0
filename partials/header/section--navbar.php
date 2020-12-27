
<!-- Navbar section -->
<section class="section section__full section--navbar">
    <div class="section__background">
        <div class="section__container">

            <div class="logo-wrapper">
                <img src="<?= $logo_thin ?>" alt="">
            </div>

            <div class="nav-wrapper">
                <?php foreach($page_navigation as $nav){ ?>
                    
                    <a class="top-menu-item" href="<?=  $nav["nav_link"];  ?>"><?=  $nav["nav_title"];  ?></a>
        
                <?php } ?>
            </div>

            <div class="contact-wrapper">
                <p>Email: <?= $email_address; ?></p>
            </div>

        </div>
    </div>
</section>