// nav javascript
(function($) {

    // Slider Banner
    $('.hamburger').on("click", function(){
        let hamburger = $(this);
        let active = hamburger.hasClass("is-active");

        if(active){
            $(".section--mobile-nav").slideUp();
            hamburger.removeClass("is-active");
        } else {
            $(".section--mobile-nav").slideDown();
            hamburger.addClass("is-active");
        }
        
    });


}(jQuery));