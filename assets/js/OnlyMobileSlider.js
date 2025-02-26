jQuery(document).ready(function ($) { // Ensure `$` is defined
    function checkSlider() {
        if (jQuery(window).width() <= 767) {
            if (!jQuery(".mySlider").hasClass("slick-initialized")) {
                jQuery(".mySlider").slick({
                    dots: true,
                    arrows: false,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    mobileFirst: true
                });
            }
        } else {
            if (jQuery(".mySlider").hasClass("slick-initialized")) {
                jQuery(".mySlider").slick("unslick");
            }
        }
    }

    checkSlider();
    jQuery(window).on("resize", checkSlider);
});
