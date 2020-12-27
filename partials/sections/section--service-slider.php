
<!-- Section Service Slider -->
<section class="section section--service-Slider">

    <div class="section__background">

        <div class="section__container">

            <!-- Section Content goes here. -->
            <h2>Slider</h2>
            <?php foreach($services as $slides){ ?>
            
                <img src="<?= $slides["service_image"]; ?>" alt="">
                <p><?=  $slides["service_text"]; ?></p>
                <h2><?=  $slides["service_title"]; ?></h2>

            <?php } ?>

        </div>

    </div>

</section>