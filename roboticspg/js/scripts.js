(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
        // DOM ready, take it away

        var hideSidebar = true;

        $("#navbar-toggle").click(function(e) {
            hideSidebar = !hideSidebar;
            $("#main-menu").toggleClass("hide", hideSidebar);
        });
		
	});
	
})(jQuery, this);
