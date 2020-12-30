
<!-- Section Gallery Slider -->
<section class="section section--gallery-slider">
    <div class="section__background">
        <div class="section__container">
        <div class="js-gallery-slider gallery-slider">
        
                <!-- Section Content goes here. -->
                <?php foreach($gallery_slides as $slides){ ?>
                    <div class="gallery-slide" >

                        <div class="img-wrapper">
                            <img class="img--cover" src="<?= $slides["slide_image"]; ?>" alt="">
                        </div>
                        <div class="slide-content">
                            <p><?=  $slides["slide_text"]; ?></p>
                        </div>

                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>