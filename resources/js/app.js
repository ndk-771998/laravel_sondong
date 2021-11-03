// Uncomment the next line if you want to use bootstrap, don't forget uncomment jQuery defination in webpack.common.js line 93
import 'bootstrap';

$('document').ready(function() {
    let category_list_width = $('.post-list-categories ul').width();
    let total_categories_item_width = $('.post-list-categories ul .show-more-categories').width();
    $('.post-list-categories .default-item-category').each(function (i, obj) {
        total_categories_item_width += $(obj).width() + 20;
        if (total_categories_item_width >= category_list_width) {
            $(obj).hide();
            $('.show-more-categories').show();
            $('.show-more-categories .item-category').eq(i).show();
        }
    });
});