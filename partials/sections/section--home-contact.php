
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
                                <h4><a href="tel:+<?= $phone_number; ?>"><?= $phone_number; ?></a></h4>
                                <h4>Email</h4>
                                <h4><a href="mailto:<?= $email_address; ?>"><?= $email_address; ?></a></h4>
                        </div>

                    </div>

                    <div class="content-action">
                        <a href="contact.php"><button><?=  $homepage_contact_button; ?></button></a>
                    </div>

                </div>
            </div>
            <div class="img-wrapper">

                <img class="img--cover" src="<?=  $homepage_contact_image; ?>" alt="">

            </div>
        </div>
    </div>
</section>