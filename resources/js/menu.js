import $ from 'jquery';

$(document).ready(function() {
    // var url       = window.location.pathname;
    // var menuItems = document.getElementsByClassName('menu-item');

    // Array.from(menuItems).forEach(menu => {
    //     var active = menu.dataset.name;
    //     var id     = menu.dataset.id;
    //     var link   = '/' + (url.split("/").slice(1, 2).toString());

    //     if (active == link) {
    //         $('#menu-' + id).addClass("active");
    //     }

    //     if (link == '/pages') {
    //         if (active == url) {
    //             $('#menu-' + id).addClass("active");
    //         }
    //     }
    // });

    var nav_pos_left = $('.nav').offset().left;
    var nav_pos_top = $('.nav').offset().top;

    $('.nav .dropdown-menu').each(function (i, obj) {
        $(obj).hover(function () {
            $(obj).addClass('show');
        }, function() {
            $(obj).removeClass("show");
        });
        $('.menu-item').hover(function(){
            var pos_left = $(this).offset().left - nav_pos_left;
            var pos_top = $(this).offset().top - nav_pos_top + $(this).outerHeight() - 1;
            if ($(this).attr('id') == $(obj).attr('aria-labelledby')) {
                $(obj).addClass('show');
                $(obj).css({
                    'position': 'absolute',
                    'transform': 'translate('+pos_left+'px, '+pos_top+'px)', 
                    'top': '0px', 
                    'left': '0px', 
                    'will-change': 'transform'
                });
            }
        }, function(){
            if ($(this).attr('id') == $(obj).attr('aria-labelledby')) {
                $(obj).removeClass("show");
            }
        });

        $(obj).find('.custom-dropdown-toggle').hover(function(){
            if ($(".dropdown-menu-broad").attr('custom-data-toggle') == $(this).attr('id')) {
                $(".dropdown-menu-broad").toggleClass("show");
            }
        });
    
        $(obj).find('.dropdown-menu-broad').hover(function(){
            $(this).toggleClass("show");
        });
    });

    $('.nav-mini-icon').click(function () {
        $('.menu-mini').addClass("show");
        $('.faded-menu-mini').addClass("show");
    });

    $('.faded-menu-mini').click(function () {
        $('.menu-mini').removeClass("show");
        $('.faded-menu-mini').removeClass("show");
    });

    $('.menu-mini-item-toggle').click(function(){
        if ($(".dropdown-menu-mini").attr('data-mini-toggle') == $(this).attr('id')) {
            $(".dropdown-menu-mini").toggleClass("show");
        }
    });
});
