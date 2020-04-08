import $ from 'jquery';

$(document).ready(function() {
    var url       = window.location.pathname;
    var menuItems = document.getElementsByClassName('menu-item');

    Array.from(menuItems).forEach(menu => {
        var active = menu.dataset.name;
        var id     = menu.dataset.id;
        var link   = '/' + (url.split("/").slice(1,2).toString());

        if (active == link) {
            $('#menu-' + id).addClass("active");
        }
    });
});
