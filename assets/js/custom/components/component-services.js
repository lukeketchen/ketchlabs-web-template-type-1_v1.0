//Gallery javascript
(function($) {

    // Slider gallery
    $('.section--service-slider').each(() => { // Only run this code if a banner slider is present on the page

        $('.js-service-slider').slick({
            dots: true,
            arrows: false,
        });
    })


}(jQuery));
