
<!-- Section Home About -->
<section class="section section--home-about">

    <div class="section__background">

        <div class="section__container">

            <!-- Section Content goes here. -->
            <img src="<?=  $homepage_about_image; ?>" alt="">

            <h2><?=  $homepage_about_heading; ?></h2>
            <h3><?=  $homepage_about_subheading; ?></h3>

            <?php foreach($homepage_about_text as $paragraph){ ?>
            
                <p><?=  $paragraph; ?></p>

            <?php } ?>

            <button><?=  $homepage_about_button; ?></button>

        </div>

    </div>

</section>