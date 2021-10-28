// Uncomment the next line if you want to use bootstrap, don't forget uncomment jQuery defination in webpack.common.js line 93
import 'bootstrap';
import "slick-carousel";
import $ from 'jquery';
import 'lazysizes';
import 'lazysizes/plugins/parent-fit/ls.parent-fit';
import './menu';
import './search';
import './zoomimg';
import './slick-slide';
// import { defaultsDeep } from 'lodash';

$(document).ready(function () {
    $('#orderSuccessfully').modal('show');
    $('#buyNowError').modal('show');
    $('#orderSuccessfullySubmit').click(function() {
        $('#orderSuccessfully').modal('fade');
    })

    var param_height = $('.product-parameter .parameter').height();
    $('.product-parameter').addClass('hide');
    $('.show-more-parameter a').click(function() {
        if ($(this).hasClass('hide')) {
            $('.product-parameter').removeClass('hide');
            $('.parameter').css('max-height', param_height);
            $(this).html('Ẩn bớt');
            $(this).removeClass('hide');
        } else {
            $('.product-parameter').addClass('hide');
            $('.parameter').css('max-height', '450px');
            $(this).html('Xem cấu hình chi tiết <i class="fa fa-chevron-down"></i>');
            $(this).addClass('hide');
        }
    });
});

