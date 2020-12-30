// home banner javascript
(function($) {


    // Slider Banner
    $('.section--testimonials').each(() => { // Only run this code if a testimonials slider is present on the page

        $('.js-testimonials-slider').slick({
            dots: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 6000,
            infinite: true,

        });
    })


}(jQuery));