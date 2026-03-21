// タブ切り替え & Slick carousel
jQuery(document).ready(function($) {
    $(".tab_label").on("click", function() {
        var $th = $(this).index() + 1;
        $(".tab_label").removeClass("active");
        $(".tab_panel").removeClass("active");
        $(this).addClass("active");
        $("#panel" + $th).addClass("active").appendTo($("#cj_panelarea"));
    });

    $('.heroSlider').slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        speed: 1000,
        fade: true,
        cssEase: 'ease-in-out'
    });

    $('.responsive').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

// スマホメニュー
(function($) {
    var $nav  = $('#navArea');
    var $btn  = $('.toggle_btn');
    var $mask = $('#mask');
    var open  = 'open';
    $btn.on('click', function() {
        $nav.toggleClass(open);
    });
    $mask.on('click', function() {
        $nav.removeClass(open);
    });
})(jQuery);

// AOS
jQuery(window).on('load', function() {
    AOS.init();
});
