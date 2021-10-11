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
import { defaultsDeep } from 'lodash';

$(document).ready(function () {
    $('#orderSuccessfully').modal('show');
    $('#buyNowError').modal('show');
    $('#orderSuccessfullySubmit').click(function() {
        $('#orderSuccessfully').modal('fade');
    })
});
