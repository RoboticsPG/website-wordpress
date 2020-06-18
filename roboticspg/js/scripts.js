(function($, root, undefined) {

    $(function() {

        'use strict';

        // DOM ready, take it away

        var hideSidebar = true;

        $("#navbar-toggle").click(function(e) {
            hideSidebar = !hideSidebar;
            $("#main-menu").toggleClass("hide", hideSidebar);
        });

    });

})(jQuery, this);

function turnVisible() {
    var pageTop = $(document).scrollTop();
    var pageBottom = pageTop + $(window).height();
    var tags = ["h1", "h2", "h3", "p", "a", "img", "li", "ol", "ul"];

    for (var i = 0; i < tags.length; i++) {
        elements = document.getElementsByTagName(tags[i]);

        for (var j = 0; j < elements.length; j++) {
            var element = elements[j];

            if ($(element).position().top < pageBottom) {
                $(element).addClass("visible");
            } else {
                $(element).removeClass("visible");
            }
        }
    }
}

$(document).on("scroll", turnVisible);
if (window.addEventListener) {
    window.addEventListener('load', turnVisible, false); //W3C
} else {
    window.attachEvent('onload', turnVisible); //IE
}