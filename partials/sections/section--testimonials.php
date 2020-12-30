
<!-- Section Home Testimonials -->
<section class="section section--testimonials">
    <div class="section__background">
        <div class="section__container">
            <div class="testimonials-slider js-testimonials-slider"> 

                <!-- Section Content goes here. -->
                <?php foreach($testimonials_slides as $testimonials){ ?>

                    <div class="testimonials-slide">
                        <div class="slide-content">
                        
                            <div class="img-wrapper">
                                <img class="img--contain" src="<?= $testimonials["testimonial_icon"]; ?>" alt="">
                            </div>
                            <div class="content-header">
                            <h3><?=  $testimonials["testimonial_title"]; ?></h3>
                                <h4><?=  $testimonials["testimonial_subtitle"]; ?></h4>
                            </div>
                            <div class="content-text">
                                <p><?=  $testimonials["testimonial_text"]; ?></p>
                            </div>
                        
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>
</section>