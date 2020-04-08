import $ from 'jquery';
import * as _ from 'lodash';

$(function() {
    const select = document.getElementById('orderProductsSelect');
    const url    = window.location.origin + window.location.pathname;

    if (select) {
        select.addEventListener('change', e => {
            e.preventDefault();
            const value          = _.split(select.value, '|');
            window.location.href = `${url}?order_by=${JSON.stringify({[value[0]]: value[1]})}`;

        });
    }
});
