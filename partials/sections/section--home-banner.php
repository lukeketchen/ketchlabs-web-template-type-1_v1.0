
<!-- Section Home Banner -->
<section class="section section--home-banner">

    <div class="section__background">

        <div class="section__container">

            <!-- Section Content goes here. -->
            <?php foreach($home_banner_slides as $slides){ ?>
            
                <div class="banner-slider">
            
                    <img src="<?= $slides["banner_image"]; ?>" alt="">
                    <p><?=  $slides["banner_title"]; ?></p>
                    <p><?=  $slides["banner_subtitle"]; ?></p>
                    <p><?=  $slides["banner_text"]; ?></p>
                    <button><?=  $slides["banner_button"]; ?></button>

                </div>
            <?php } ?>

        </div>

    </div>

</section>