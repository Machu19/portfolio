/*
Mouse Parallax
==============
A simple jQuery plugin to allow given elements to be used as backgrounds that respond to mouse movement.  Could easily be further extended or modified.
--------------
Author: "Pip Beard Design," Benjamin Alan Robinson
LICENSE: The MIT License (MIT)
*/

(function ( $ ) {
	$.fn.extend({
	
		mouseParallax: function(options) {
		
			var defaults = { moveFactor: 5, zIndexValue: "-1", targetContainer: 'body' };
		
			var options = $.extend(defaults, options);
		
			return this.each(function() {
				var o = options;
				var background = $(this);
				
				$(o.targetContainer).on('mousemove', function(e){
				
					mouseX = e.pageX;
					mouseY = e.pageY;
					
					windowWidth = $(window).width();
					windowHeight = $(window).height();
					
					percentX = ((mouseX/windowWidth)*o.moveFactor) - (o.moveFactor/2);
	
					leftString = (0-percentX-o.moveFactor)+"%";
					rightString = (0-percentX-o.moveFactor)+"%";
	
					background[0].style.left = leftString;
					background[0].style.right = rightString;
					if(o.zIndexValue) {	
						background[0].style.zIndex = o.zIndexValue;
					}
				});
			});
		}					
	});
} (jQuery) );
