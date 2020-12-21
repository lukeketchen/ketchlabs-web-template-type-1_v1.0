
<!-- Section Gallery Grid -->
<section class="section section--gallery-grid">

    <div class="section__background">

        <div class="section__container">

            <!-- Section Content goes here. -->
            <?php foreach($gallery_images as $images){ ?>
            
                <img src="<?=  $images; ?>" alt="">

            <?php } ?>

        </div>

    </div>

</section>