
<!-- Section Projects -->
<section class="section section--two-column section--home-projects">
    <div class="section__background">
        <div class="section__container">
            <div class="section__column ">

                <!-- Section Content goes here. -->
                <div class="img-wrapper">
                    <img class="img--cover" src="<?=  $homepage_project_image; ?>" alt="">
                </div>
        
            </div>
            <div class="section__column">
                <div class="section__content">

                    <div class="content-header">
                        <h2><?=  $homepage_project_heading; ?></h2>
                        <h3><?=  $homepage_project_subheading; ?></h3>
                    </div>

                    <div class="content-text">

                        <h4><?=  $homepage_project_jobheading; ?></h4>

                        <?php foreach($homepage_project as $text){ ?>

                            <p><?=  $text; ?></p>

                        <?php } ?>

                    </div>
                    
                    <div class="content-action">
                        <a href="gallery.php"><button><?=  $homepage_project_button; ?></button></a>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</section>