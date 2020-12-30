
<!-- Section Service Slider -->
<section class="section section--service-slider">
    <div class="section__background">
        <div class="section__container">
            <div class="js-service-slider service-slider">

                <?php foreach($services_slides as $slides){ ?>
                    <div class="service-slide" >
                
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