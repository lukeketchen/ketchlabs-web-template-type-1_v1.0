
<!-- Section Service One -->
<section class="section section--services-card">
    <div class="section__background">
        <div class="section__container">

            <!-- Section Content goes here. -->
            <?php foreach($services as $service){ ?>
                <div class="service-card">
            
                        <h2><?=  $service["service_title"]; ?></h2>

                        <div class="card-content  <?= ($service["display_backwards"] ? "display-backwards" :  "" )?>">

                            <div class="slide-content">
                                <?php foreach($service["service_text"] as $paragrph){ ?>
                                    <p><?=  $paragrph; ?></p>
                                <?php } ?>
                            </div>
                            <div class="img-wrapper">
                                <img class="img--cover" src="<?= $service["service_image"]; ?>" alt="">
                            </div>

                        </div>

                </div>

            <?php } ?>

        </div>
    </div>
</section>