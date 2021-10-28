import $ from 'jquery';

$(document).ready(function () {
    $('.flash-sale').slick({
        dots: false,
        infinite: false,
        speed: 300,
        autoplay: false,
        prevArrow:"<img class='a-left control-c prev slick-prev default-slick-arrow' src='/assets/images/logo/slide-arrow.svg' alt='prev'>",
        nextArrow:"<img class='a-right control-c next slick-next default-slick-arrow' src='/assets/images/logo/slide-arrow.svg' alt='next'>",
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
        prevArrow:"<img class='a-left control-c prev slick-prev default-slick-arrow' src='/assets/images/logo/slide-arrow.svg' alt='prev'>",
        nextArrow:"<img class='a-right control-c next slick-next default-slick-arrow' src='/assets/images/logo/slide-arrow.svg' alt='next'>",
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
        arrows: true,
        prevArrow:"<img class='a-left control-c prev slick-prev default-slick-arrow' src='/assets/images/logo/slide-arrow.svg' alt='prev'>",
        nextArrow:"<img class='a-right control-c next slick-next default-slick-arrow' src='/assets/images/logo/slide-arrow.svg' alt='next'>",
        fade: true,
        asNavFor: '.thumbnail-silde-nav'
    });
    $('.thumbnail-silde-nav').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.thumbnail-silde-for',
      prevArrow:"<img class='a-left control-c prev slick-prev' src='/assets/images/logo/chevron-up.svg' alt='prev'>",
      nextArrow:"<img class='a-right control-c next slick-next' src='/assets/images/logo/chevron-up.svg' alt='next'>",
      arrows: true,
      focusOnSelect: true
    });
    
    $('.slide-no-arrow').slick({
        dots: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 10000,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
    
    $('.dot-slide').slick({
        dots: true,
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 10000,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    $('.fixed-slide').slick({
        speed: 300,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow:"<img class='a-left control-c prev slick-prev' src='/assets/images/logo/chevron-up.svg' alt='prev'>",
        nextArrow:"<img class='a-right control-c next slick-next' src='/assets/images/logo/chevron-up.svg' alt='next'>",
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrow: false
                }
            },
        ]
    });

    $('.customer-picture-toggle').click(function () {
        $('.fixed-slide-container').addClass('show');
    });
    var mouse_is_inside;
    $('.fixed-slide-container .slick-arrow').hover(function(){ 
        mouse_is_inside=true; 
    }, function(){ 
        mouse_is_inside=false; 
    });

    $("body").mouseup(function(){ 
        if(! mouse_is_inside) {
            $('.fixed-slide-container').removeClass('show');
        } 
    });
});