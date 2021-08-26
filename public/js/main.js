(function($) {

	"use strict";

	 var fullHeight = function() {
		
	 	$(this).css('height', $(window).height());
	 	$(window).resize(function(){
	 		$(this).css('height', $(window).height());
	 	});

	 };

	 fullHeight();

 	$('#sidebarCollapse').on('click', function () {
 	  $('#sidebar').toggleClass('active');
  });
  
})(jQuery);
