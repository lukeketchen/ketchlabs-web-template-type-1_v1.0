
<!-- Section Projects -->
<section class="section section--projects section--two-column">
    <div class="section__background">
        <div class="section__container">
            <div class="section__column ">

                <!-- Section Content goes here. -->
                <img src="<?=  $homepage_project_image; ?>" alt="">

            </div>
            <div class="section__column">
                <div class="section__content">

                    <h2><?=  $homepage_project_heading; ?></h2>
                    <h3><?=  $homepage_project_subheading; ?></h3>
                    <h4><?=  $homepage_project_jobheading; ?></h4>

                    <?php foreach($homepage_project as $text){ ?>

                        <p><?=  $text; ?></p>

                    <?php } ?>

                    <button><?=  $homepage_project_button; ?></button>

                </div>
            </div>
        </div>
    </div>
</section>