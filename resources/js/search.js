import $ from 'jquery';

$(document).ready(function() {
    var url = window.location.href;
    var link = url.split("#").slice(1, 2).toString();

    if (link) {
        if (link == "pills-profile") {
            $('#pills-home').removeClass(['active', 'show']);
            $('#pills-profile').addClass(['active', 'show']);
            $('#pills-home-tab').removeClass('active');
            $('#pills-profile-tab').addClass('active');
        }
    }
});
