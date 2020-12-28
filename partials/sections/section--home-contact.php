
<!-- Section Contact -->
<section class="section section--two-column section--home-contact">
    <div class="section__background">
        <div class="section__container">
            <div class="section__column">
                <div class="section__content">

                    <!-- Section Content goes here. -->
                    <h2><?=  $homepage_contact_heading; ?></h2>
                    <h3><?=  $homepage_contact_subheading; ?></h3>


                    <h5><?= $contact_tagline; ?></h5>
                        <ul>
                            <li>Call</li>
                            <li><?= $phone_number; ?></li>
                            <li>Email</li>
                            <li><?= $email_address; ?></li>
                        </ul>

                    <button><?=  $homepage_contact_button; ?></button>

                </div>
            </div>
            <div class="img-wrapper">

                <img class="img--cover" src="<?=  $homepage_contact_image; ?>" alt="">

            </div>
        </div>
    </div>
</section>