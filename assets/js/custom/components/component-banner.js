// home banner javascript
(function($) {

    // Slider Banner
    $('.section--home-banner').each(() => { // Only run this code if a banner slider is present on the page

        $('.js-banner-slider').slick({
            dots: true,
            arrows: false,
        });
    })


}(jQuery));
