// Uncomment the next line if you want to use bootstrap, don't forget uncomment jQuery defination in webpack.common.js line 93
import 'bootstrap';
import "slick-carousel";
import $ from 'jquery';
import './order/cart';
import './order/order-info';
import './menu';
import './product-list';

console.log("My Kit is ready :)");

$(document).ready(function () {
    const slideTime = document.getElementById('slide_time_interval');

    if(slideTime.value == ''){
        slideTime.value = 6;
    }

    console.log(slideTime.value);
    $('.product-thumbnail').slick({
        slidesToShow: slideTime.value,
        slidesToScroll: slideTime.value,
        arrows: false,
        fade: true,
        focusOnSelect: true,
        asNavFor: '.product-thumbnail-child'
      });
      $('.product-thumbnail-child').slick({
        slidesToShow: slideTime.value,
        slidesToScroll: slideTime.value,
        asNavFor: '.product-thumbnail',
        dots: false,
        focusOnSelect: true
      });
});
