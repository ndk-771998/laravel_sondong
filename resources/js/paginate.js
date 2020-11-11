import $ from 'jquery';

$(document).ready(function () {
    var url = window.location.href;
    $('li.page-item').each(function () {
        var link_paginate = $(this).find('a.page-link').attr('href');
        var new_link_paginate;
        console.log(link_paginate);
        if(checkLinkPaginate(link_paginate) == true ){
            new_link_paginate = editLinkPaginate(link_paginate);
            $(this).find('a.page-link').attr('href', new_link_paginate);
        }
    })


    function checkLinkPaginate($string) {
        if($string !== undefined){
            if ($string.includes('%7B%22') && $string.includes('%22%3A%22') && $string.includes('%22%7D')) {
               return true;
            } else {
                return false;
            }
        }
    }
    function editLinkPaginate($string){
        return $string.replace('%7B%22', '{"').replace('%22%3A%22', '":"').replace('%22%7D', '"}');
    }
});

