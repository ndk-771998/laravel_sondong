import $ from 'jquery';


$(document).ready(function() {

    $('.tile')
        // tile mouse actions
        .on('mouseover', function() {
            $(this).children('.photo').css({ 'transform': 'scale(' + $(this).attr('data-scale') + ')' });
        })
        .on('mouseout', function() {
            $(this).children('.photo').css({ 'transform': 'scale(1)' });
        })
        .on('mousemove', function(e) {
            $(this).children('.photo').css({ 'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 + '%' });
        })

        .each(function() {
            $(this)
                .append('<div class="photo"></div>')

                // .append('<div class="txt"><div class="x">'+ $(this).attr('data-scale') +'x</div>ZOOM ON<br>HOVER</div>')

                .children('.photo').css({ 'background-image': 'url(' + $(this).attr('data-image') + ')' });
        })

});
