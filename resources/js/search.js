import $ from 'jquery';

$(document).ready(function() {
    var tab_all = document.getElementById('pills-home-tab');
    var tab_products = document.getElementById('pills-profile-tab');
    var tab_posts = document.getElementById('pills-contact-tab');
    var form_all = document.getElementById('pills-home');
    var form_products = document.getElementById('pills-profile');
    var form_posts = document.getElementById('pills-contact');

    if (tab_all) {
        form_products.style.display = "none";
        form_posts.style.display = "none";
        form_all.style.display = "block";

        tab_all.onclick = function() {
            form_products.style.display = "none";
            form_posts.style.display = "none";
            form_all.style.display = "block";
        };
        tab_products.onclick = function() {
            form_products.style.display = "block";
            form_posts.style.display = "none";
            form_all.style.display = "none";
        };
        tab_posts.onclick = function() {
            form_products.style.display = "none";
            form_posts.style.display = "block";
            form_all.style.display = "none";
        };
    }
});
