
<!-- Section Home Banner -->
<section class="section section--home-banner">
    <div class="section__background">
        <div class="section__container">
            <div class="js-banner-slider section-slider"> 

                <?php foreach($home_banner_slides as $slides){ ?>
                
                    <div class="banner-slide" >

                        <img class="img--cover slide-img" src="<?= $slides["banner_image"]; ?>" alt="">
                
                        <div class="slide-content">

                            <p><?=  $slides["banner_title"]; ?></p>
                            <p><?=  $slides["banner_subtitle"]; ?></p>
                            <p><?=  $slides["banner_text"]; ?></p>
                            
                            <div class="content-action">
                                <button><?=  $slides["banner_button"]; ?></button>
                            </div>

                        </div>

                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>