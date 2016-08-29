<script>
$(document).ready(function() {
	$('#background').mouseParallax({ moveFactor: 4 });
});
</script>
<!-- logo animation -->
<script>
	$(document).ready(function() {
	    $('.logo-box').hover(function() { 
					$(".logo-box-hover").animate({ width:'730px' }); 
		  }, function() {
					$(".logo-box-hover").animate({ width:'250px' }); 
				});
	});
</script>
<!-- filtrowanie / przełączanie realizacji-->
<script>
	 $( "#designCodeFilter" ).click(function() {
	 	$('#designFilter').removeClass('active');
	 	$(this).addClass('active');
	 	  $("#projects" ).slideToggle( "slow", function() {
	 	  	$( "#design" ).slideUp( "slow", function() {
			    // Animation complete.
			  });
		});
		});
		
		$("#designFilter").click(function() {
		  $('#designCodeFilter').removeClass('active');
	 	  $(this).addClass('active');
	 	   $("#design").slideToggle( "slow", function() {
	 	   	$( "#projects" ).slideUp( "slow", function() {
			    // Animation complete.
			  });
		});
		});
</script>
<script>
	$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>

<!-- GOTO TOP -->
<script>	
		$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});
</script>
<!-- END GOTO TOP -->