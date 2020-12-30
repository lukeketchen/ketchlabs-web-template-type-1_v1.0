
<!-- Section About -->
<section class="section section--about">
    <div class="section__background">
        <div class="section__container">
            <div class="section__row ">

                <!-- Section Content goes here. -->
                <div class="img-wrapper">
                    <img class="img--cover" src="<?= $about_image ?>" alt="">
                </div>

                <div class="section--about__column">

                    <div class="content-header">
                        <h2><?= $about_title ?></h2>
                    </div>

                    <div class="section__content">

                        <?php foreach($about_text as $about){ ?>
                        
                                <p><?=  $about; ?></p>
                            
                    
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="section__row ">
                <div class="">
                    <?php foreach($about_text as $about){ ?>
                            
                        <p><?=  $about; ?></p>
    
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>