
<!-- Section Gallery Slider -->
<section class="section section--gallery-slider">

    <div class="section__background">

        <div class="section__container">

            <!-- Section Content goes here. -->
            <?php foreach($gallery_slides as $slides){ ?>
            
                    <img src="<?= $slides["slide_image"]; ?>" alt="">
                    <p><?=  $slides["slide_text"]; ?></p>

            <?php } ?>

        </div>

    </div>

</section>