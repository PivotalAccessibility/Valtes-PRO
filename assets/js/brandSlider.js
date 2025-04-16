jQuery(document).ready(function ($) {
    function manageSlider($slider) {
      var imageCount = $slider.find('img').length;
      var isMobile = window.innerWidth <= 768;
      var shouldInit = (!isMobile && imageCount > 4) || (isMobile && imageCount > 2);
  
      if (shouldInit && !$slider.hasClass('slick-initialized')) {
        $(".re-container").removeClass('container');
  
        // Initialize slider
        $slider.slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          accessibility: true,
          autoplay: true,
          autoplaySpeed: 0,
          speed: 4000,
          cssEase: 'linear',
          infinite: true,
          centerMode: true,
          arrows: false,
          pauseOnHover: true,
          pauseOnFocus: true,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                speed: 2000
              }
            }
          ]
        });
  
       
      } else if (!shouldInit && $slider.hasClass('slick-initialized')) {
        // Destroy slider
        $slider.slick('unslick');
        $(".re-container").addClass("container");
      }
    }
  
    // Initial check
    $('.imageSlider').each(function () {
      manageSlider($(this));
    });
  
    // Re-check on resize
    $(window).on('resize', function () {
      $('.imageSlider').each(function () {
        manageSlider($(this));
      });
    });
  });
  