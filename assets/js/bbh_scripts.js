"use strict";

(function ($) {


  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop(); //console.log(scrollTop);

    if (scrollTop > 150) {
      $('#fixed-header').addClass('sticky-nav');
      $('body').addClass('sticky-nav');
    } else {
      $('#fixed-header').removeClass('sticky-nav');
      $('body').removeClass('sticky-nav');
    }
  });
  

  /*===============================================
  =          REVIEW - ANMELDELSER - SLICK           =
  ===============================================*/
  $(document).on('ready', initReviewSlider);

  function initReviewSlider() {
    if (typeof $.fn.slick !== 'function') {
      return;
    }

  $('.review-container').slick({
    accessibility: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    lazyLoad: 'ondemand',
    centerMode: true,
    responsive: [{
      breakpoint: 1650,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: false
      }
    }, {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true
      }
    }]
  });

}


})(jQuery);

lazySizes.init(); //fallback if img is above-the-fold
