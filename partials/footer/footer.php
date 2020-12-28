
<!-- Footer -->
<footer>
    <div class="footer__background">
        <div class="footer__container">

            <div class="footer__top-container">

                <div class="img-wrapper">
                    <img class="img--contain" src="<?=  $logo_large; ?>" alt="">
                </div>

                <div class="section__content">

                    <h5>Site Navigation</h5>
                    <ul>
                        <?php foreach($page_navigation as $nav){ ?>
                                
                            <li><a href="<?=  $nav["nav_link"];  ?>"><?=  $nav["nav_title"];  ?></a></li>

                        <?php } ?>
                    </ul>

                </div>
            </div>
            <div class="footer__bottom-bar">
            
                <div class="footer__copyright">
                    Copyright © <?=  $copyright_details; ?>
                </div>

                <div class="footer__author">
                    <p>Made by <a href="<?=  $designer_address; ?>" target="_blank" rel="noopener noreferrer"><?=  $designer; ?></a> ☻</p>
                </div>

            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="./assets/js/vendor.js"></script> 
<script type="text/javascript" src="./assets/js/custom.js"></script>  

</body>
</html>