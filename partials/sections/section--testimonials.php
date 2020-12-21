
<!-- Section Home Testimonials -->
<section class="section section--testimonials">

    <div class="section__background">

        <div class="section__container">

            <!-- Section Content goes here. -->
            <?php foreach($testimonials_slides as $testimonials){ ?>
            
                <img src="<?= $testimonials["testimonial_icon"]; ?>" alt="">
                <h3><?=  $testimonials["testimonial_title"]; ?></h3>
                <h4><?=  $testimonials["testimonial_subtitle"]; ?></h4>
                <p><?=  $testimonials["testimonial_text"]; ?></p>

            <?php } ?>

        </div>

    </div>

</section>