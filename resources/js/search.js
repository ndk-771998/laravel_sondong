import $ from 'jquery';

$(document).ready(function () {
    var url = window.location.href;
    var link = url.split("#").slice(1, 2).toString();

    if (link) {
        if (link == "pills-profile") {
            $('#pills-home').removeClass(['active', 'show']);
            $('#pills-profile').addClass(['active', 'show']);
            $('#pills-home-tab').removeClass('active');
            $('#pills-profile-tab').addClass('active');
        }
    }
    $('.product-slide').slick({
        dots: false,
        infinite: false,
        speed: 300,
        autoplay: false,
        arrows: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                }
            }
        ]
    });
});
