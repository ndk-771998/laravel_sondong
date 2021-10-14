import $ from 'jquery';


$(document).ready(function() {
    var url = window.location.href;
    let order_by;
    $(".filter-price-submit").each(function(i, obj) {
        var filter_rq = url.slice(url.indexOf("price=")+6); // index of parameter= string + its length, this line will cut ur url to your parameter.
        var price;
        if(filter_rq.indexOf('&') == -1) {
            price = filter_rq;
        } else {
            price = filter_rq.slice(0, filter_rq.indexOf('&'));
        }
        if (price === $(obj).attr("value")) {
            $(obj).attr("checked", "checked");
        }
        $(obj).click(function() {
            filter("");
        });
    });

    $(".filter-manufacturer-submit").each(function(i, obj) {
        var filter_rq = url.slice(url.indexOf("manufacturer="), url.indexOf("&"));
        if (filter_rq.replace("manufacturer=", "") === $(obj).attr("value")) {
            $(obj).attr("checked", "checked");
        }
        $(obj).click(function() {
            if ($(obj).attr('value') == "") {
                $('.filter-manufacturer-submit').not(obj).prop('checked', false);
            } else {
                $('.filter-manufacturer-submit[value=""]').prop('checked', false);
            }
            filter("");
        });
    });

    $(document).on("click", ".ajax-pagination .page-link", function(event) {
        event.preventDefault();
        var page = $(this)
            .attr("href")
            .split("page=")[1];
        order_by = document.getElementById('filter_order_by').value;
        filter("", "", order_by , page);
    });

    $('#filter_order_by').on('change',function(){
        filter("", "", this.value);
    });

    function filter(price = "", manufacturer = "", order_by = "", page = 1) {
        price = $("form#filter-price-form").serialize();
        manufacturer = $("form#filter-manufacturer-form").serialize();
        var url = "/ajax-filter";
        var val = "";
        var category_url = "";
        var search = new URLSearchParams(window.location.search).get('search');
        var product_type = $("#product_type").attr('value');
        var product_category = $("#product_category").attr('value');
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });

        $.ajax({
            type: "GET",
            url: url,
            data: {
                price: price,
                order_by: order_by,
                category_url: category_url,
                page: page,
                search: search,
                product_type: product_type,
                manufacturer: manufacturer,
                product_category: product_category
            },
            success: function(data) {
                $("#viewProductDefault").html(data);
                const element = document.querySelector('#anchor-name');
                element.scrollIntoView({
                    behavior: "smooth",
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
            }
        });
    }

    $('#search-form-input').focusin(function() {
        if ( $('#type-hint-list').children().length > 0) {
            $('#type-hint-list').addClass('show');
        }
        $('.header-search-wrap').css('box-shadow', '0 0 0 0.2rem rgba(0, 123, 255, 20%)');
    })
    $('#search-form-input').focusout(function() {
        $('#type-hint-list').removeClass('show');
        $('.header-search-wrap').css('box-shadow', 'rgba(255, 255, 255, 100%) 0px 0px 0px 0');
    })

    $('#search-form-input').on('input',function() {
        if($(this).val().length >= 3) {
            typeHint($(this).val());
            $('#type-hint-list').addClass('show');
        }
    });
    function typeHint(search = "") {
        var url = "/ajax-search";
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });

        $.ajax({
            type: "GET",
            url: url,
            data: {
                search: search,
            },
            success: function(data) {
                $("#type-hint-list").html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
            }
        });
    }
});