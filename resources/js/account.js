import $ from 'jquery';

$(document).ready(function() {
    var button    = document.getElementById('show_edit_form');
    var edit_form = document.getElementById('form_edit_info');
    var info_form = document.getElementById('form_show_info');

    if (button) {
        edit_form.style.display = "block";
        info_form.style.display = "none";
        button.onclick = function() {
            edit_form.style.display = "block";
            info_form.style.display = "none";
        };
    }

});
