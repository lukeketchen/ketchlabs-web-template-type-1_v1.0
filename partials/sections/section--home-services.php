
<!-- Section Home Services -->
<section class="section section--two-column section--home-services">
    <div class="section__background">
        <div class="section__container  inverted-layout">
            <div class="section__column">

                <!-- Section Content goes here. -->
                <img src="<?=  $homepage_service_image; ?>" alt="">

            </div>
            <div class="section__column ">
                <div class="section__content">

                    <h2><?=  $homepage_service_heading; ?></h2>
                    <h3><?=  $homepage_service_subheading; ?></h3>

                    <?php foreach($homepage_services as $text){ ?>

                        <h5><?=  $text["service_title"]; ?></h5>
                        <p><?=  $text["service_text"]; ?></p>

                    <?php } ?>

                    <button><?=  $homepage_about_button; ?></button>

                </div>
            </div>
        </div>
    </div>
</section>