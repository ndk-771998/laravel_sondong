import $ from 'jquery';

$(document).ready(function() {
    var url = window.location.pathname;
    var menuItems = document.getElementsByClassName('menu-item');
    Array.from(menuItems).forEach(menu => {
        var active = menu.dataset.name;
        var id = menu.dataset.id;
        if (active == url) {
            $('#menu-' + id).addClass("active");
        }
    });
});
