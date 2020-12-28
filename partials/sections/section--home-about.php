
<!-- Section Home About -->
<section class="section section--two-column section--home-about">
    <div class="section__background">
        <div class="section__container">
            <div class="section__column ">

                <!-- Section Content goes here. -->
                <div class="img-wrapper">
                    <img class="img--contain" src="<?=  $homepage_about_image; ?>" alt="">
                </div>

            </div>
            <div class="section__column">
                <div class="section__content">

                    <div class="content-header">
                        <h2><?=  $homepage_about_heading; ?></h2>
                        <h3><?=  $homepage_about_subheading; ?></h3>
                    </div>

                    <div class="content-text">
                        <?php foreach($homepage_about_text as $paragraph){ ?>
                        
                            <p><?=  $paragraph; ?></p>

                        <?php } ?>
                    </div>

                    <div class="content-action">

                        <button><?=  $homepage_about_button; ?></button>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>