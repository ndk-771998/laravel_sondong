import $ from 'jquery';

$(document).ready(function () {
    var quantity = document.getElementById('quantity_product');
    var total    = document.getElementById('total');

    if(quantity){

        quantity.addEventListener('change', function (){

            var number        = quantity.value;
            var quantity_send = document.getElementsByClassName('productdetails-quantity');
            var price  =  document.getElementById('product_price');

            total.innerHTML = new Intl.NumberFormat().format(price.value * number);


            Array.from(quantity_send).forEach(input => {
                input.value = number;
            });
        });
    }



});
