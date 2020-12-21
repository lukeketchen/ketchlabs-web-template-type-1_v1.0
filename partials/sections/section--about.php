
<!-- Section About -->
<section class="section section--about">

    <div class="section__background">

        <div class="section__container">

            <!-- Section Content goes here. -->
            <h2><?= $about_title ?></h2>

            <img src="<?= $about_image ?>" alt="">

            <?php foreach($about_text as $about){ ?>
            
                <h1><?=  $about; ?></h1>

            <?php } ?>

        </div>

    </div>

</section>