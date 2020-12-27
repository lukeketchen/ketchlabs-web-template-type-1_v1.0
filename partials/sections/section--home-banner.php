
<!-- Section Home Banner -->
<section id="foo" class="section section--home-banner">
    <div class="section__background">
        <div class="section__container">
            <div class="js-banner__slider"> 

                <?php foreach($home_banner_slides as $slides){ ?>
                
                    <div class="banner-slide">
                
                        <img src="<?= $slides["banner_image"]; ?>" alt="">
                        <p><?=  $slides["banner_title"]; ?></p>
                        <p><?=  $slides["banner_subtitle"]; ?></p>
                        <p><?=  $slides["banner_text"]; ?></p>
                        <button><?=  $slides["banner_button"]; ?></button>

                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>