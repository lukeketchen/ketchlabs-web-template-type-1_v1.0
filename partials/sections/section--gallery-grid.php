
<!-- Section Gallery Grid -->
<section class="section section--gallery-grid">
    <div class="section__background">
        <div class="section__container">

            <!-- Section Content goes here. -->
            <?php foreach($gallery_images as $images){ ?>
            
                <div class="img-wrapper">
                    <img class="img--cover" src="<?=  $images; ?>" alt="">
                </div>

            <?php } ?>

        </div>
    </div>
</section>