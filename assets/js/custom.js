
!function(e){e(".section--home-banner").each((()=>{e(".js-banner-slider").slick({dots:!0,arrows:!1})}))}(jQuery);
!function(e){e(".section--gallery-slider").each((()=>{e(".js-gallery-slider").slick({dots:!0,arrows:!1})}))}(jQuery);
!function(i){i(".hamburger").on("click",(function(){let s=i(this);s.hasClass("is-active")?(i(".section--mobile-nav").slideUp(),s.removeClass("is-active")):(i(".section--mobile-nav").slideDown(),s.addClass("is-active"))}))}(jQuery);
!function(e){e(".section--service-slider").each((()=>{e(".js-service-slider").slick({dots:!0,arrows:!1})}))}(jQuery);
!function(i){i(".section--testimonials").each((()=>{i(".js-testimonials-slider").slick({dots:!0,arrows:!1,autoplay:!0,autoplaySpeed:6e3,infinite:!0})}))}(jQuery);