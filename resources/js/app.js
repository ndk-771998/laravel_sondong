// Uncomment the next line if you want to use bootstrap, don't forget uncomment jQuery defination in webpack.common.js line 93
import 'bootstrap';
import "slick-carousel";
import $ from 'jquery';
import './order/cart';
import './order/order-info';
import './menu';
import './product-list';
import './product-detail';
import './account';
import './search';
import './user/user';
import './zoomimg';
import './zoom-image';
import './paginate';

$(document).ready(function () {

    $('.product-thumbnail').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.product-thumbnail-child'
    });
    $('.product-thumbnail-child').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.product-thumbnail',
        dots: false,
        focusOnSelect: true,
        arrows: false
    });

});

