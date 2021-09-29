import $ from 'jquery';

$(document).ready(function () {
    $('.flash-sale').slick({
        dots: false,
        infinite: false,
        speed: 300,
        autoplay: false,
        prevArrow:"<img class='a-left control-c prev slick-prev' src='/assets/images/logo/slide-arrow.svg'>",
        nextArrow:"<img class='a-right control-c next slick-next' src='/assets/images/logo/slide-arrow.svg'>",
        arrows: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
            {
                breakpoint: 978,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false
                }
            }
        ]
    });

    $('.product-slide').slick({
        dots: false,
        infinite: false,
        speed: 300,
        autoplay: false,
        prevArrow:"<img class='a-left control-c prev slick-prev' src='/assets/images/logo/slide-arrow.svg'>",
        nextArrow:"<img class='a-right control-c next slick-next' src='/assets/images/logo/slide-arrow.svg'>",
        arrows: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
            {
                breakpoint: 978,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false
                }
            }
        ]
    });

    $('.thumbnail-silde-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.thumbnail-silde-nav'
    });
    $('.thumbnail-silde-nav').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.thumbnail-silde-for',
      prevArrow:"<img class='a-left control-c prev slick-prev' src='/assets/images/logo/chevron-up.svg'>",
      nextArrow:"<img class='a-right control-c next slick-next' src='/assets/images/logo/chevron-up.svg'>",
      arrows: true,
      focusOnSelect: true
    });
});