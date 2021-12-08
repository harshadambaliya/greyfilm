jQuery(document).ready(function($) {
    $('.gf-our-service-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
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
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.gf-client-say-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
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
                    dots: true,
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    var vid = document.getElementById("archival_footage_video");

    $('.gf-video-icon.play').on('click', function() {
        vid.play();
        $(this).addClass('pause');
        $(this).removeClass('play');
        $('.gf-video-icon img').attr('src', '/wp-content/themes/wp-bootstrap-starter-child/assets/images/pause-icon.png');
    });
    $('.gf-video-icon.pause').on('click', function() {
        vid.pause();
        $(this).addClass('play');
        $(this).removeClass('pause');
        $('.gf-video-icon img').attr('src', '/wp-content/themes/wp-bootstrap-starter-child/assets/images/play-icon.png');
    });

    $('.navbar-toggler').on('click', function() {
        $('.gf-site-header-menu').removeClass('menu-close');
    });
    $('.gf-site-menu-close-icon').on('click', function() {
        $('.gf-site-header-menu').addClass('menu-close');
    });

});