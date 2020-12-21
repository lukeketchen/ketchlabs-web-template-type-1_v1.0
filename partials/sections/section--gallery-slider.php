
<!-- Section Gallery Slider -->
<section class="section section--gallery-slider">

    <div class="section__background">

        <div class="section__container">

            <!-- Section Content goes here. -->
            <?php foreach($gallery_slides as $slider){ ?>
            
                <?php foreach($slider as $slides){ ?>
            
                    <p><?=  $slides; ?></p>

                <?php } ?>

            <?php } ?>

            

        </div>

    </div>

</section>