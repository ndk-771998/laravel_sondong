import $ from 'jquery';

$(document).ready(function () {
    var quantity = document.getElementById('quantity_product');
    if(quantity){

        quantity.addEventListener('change', function (){

            var number = quantity.value;
            var quantity_send = document.getElementsByClassName('productdetails-quantity');
            Array.from(quantity_send).forEach(input => {
                input.value = number;
            });
        });
    }

});
