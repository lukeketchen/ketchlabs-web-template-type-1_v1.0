
<!-- Navbar section -->
<section class="section section--navbar">

    <div class="section__background">

        <div class="section__container">

            <img src="<?= $logo_thin ?>" alt="">

            <?php foreach($page_navigation as $nav){ ?>
                
                <a href="<?=  $nav["nav_link"];  ?>"><?=  $nav["nav_title"];  ?></a>
    
            <?php } ?>
            

        </div>

    </div>

</section>