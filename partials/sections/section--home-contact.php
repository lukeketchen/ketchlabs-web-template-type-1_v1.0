
<!-- Section Contact -->
<section class="section section--two-column section--home-contact">
    <div class="section__background">
        <div class="section__container">
            <div class="section__column">
                <div class="section__content">

                    <!-- Section Content goes here. -->
                    <div class="content-header">
                        <h2><?=  $homepage_contact_heading; ?></h2>
                        <h3><?=  $homepage_contact_subheading; ?></h3>
                    </div>

                    <div class="contact-box">

                        <p class="contact-tagline"><?= $contact_tagline; ?></p>

                        <div class="contact-details">
                                <h4>Call</h4>
                                <h4><?= $phone_number; ?></h4>
                                <h4>Email</h4>
                                <h4><?= $email_address; ?></h4>
                        </div>

                    </div>

                    <div class="content-action">
                        <button><?=  $homepage_contact_button; ?></button>
                    </div>

                </div>
            </div>
            <div class="img-wrapper">

                <img class="img--cover" src="<?=  $homepage_contact_image; ?>" alt="">

            </div>
        </div>
    </div>
</section>