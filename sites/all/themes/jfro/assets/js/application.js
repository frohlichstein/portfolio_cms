(function($){

  $(function(){


	// Category Toggle
	function category_toggle() {
    	$('.cat-toggle').click(function(e) {
            e.preventDefault();
    		$(this).find('span').toggle();
    		$('.cat-nav').toggle();
    	});
    	$('.show a').click(function(e) {
            e.preventDefault();
        	$('.main-nav').removeClass('show');
    	});
	}
	

	// Share Toggle
	function share_toggle() {
    	$('.share-toggle').click(function(e) {
    		$('.share-modal').addClass('show');
            e.preventDefault();
    	});
        $('.share-modal .close').click(function(){
            e.preventDefault();
        	$('.share-modal').removeClass('show');
        });
	}
	

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
	share_toggle();
	back_to_top();
	mobile_menu_btn();


  });

})(jQuery)