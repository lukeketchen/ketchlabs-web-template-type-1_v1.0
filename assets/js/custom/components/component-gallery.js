//Gallery javascript
(function($) {

    // Slider gallery
    $('.section--gallery-slider').each(() => { // Only run this code if a banner slider is present on the page

        $('.js-gallery-slider').slick({
            dots: true,
            arrows: false,
        });
    })


}(jQuery));
