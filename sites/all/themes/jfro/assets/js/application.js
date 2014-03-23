(function($){

  $(function(){


	// Category Toggle
	function category_toggle() {
    	$('.cat-open').click(function(e) {
            e.preventDefault();
    		$(this).hide();
    		$('.cat-nav').show();
    	});
	}
	
	$('.show a').click(function(){
    	$('.main-nav').removeClass('show');
	});


    // Scroll Top
    function back_to_top() {
        $('.scroll-top').click(function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 200);
        });
    }

    // Mobile Nav Toggle
    function mobile_menu_btn() {
    	$('.mobile-menu-btn').click(function(e){
            e.preventDefault();
    		$('.main-nav ul, .admin-nav').toggleClass('show');
    		$(this).toggleClass('active');
    	});
    }


	$(window).on('resize', function() {
	    resize_thumbs();
	});
	category_toggle();
	back_to_top();
	mobile_menu_btn();


  });

})(jQuery)