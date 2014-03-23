(function($){

  $(function(){
	
	// Mobile Button
	$('.cat-open').click(function(){
		$(this).hide();
		$('.cat-nav').show();
		return false;
	});
	
	$('.show a').click(function(){
    	$('.main-nav').removeClass('show');
	});

    function resize_thumbs() {
        var y = $('.thumb').width();
        $('.thumb .project-title').css('height', y-4).css('width', y-4);
    }

	$(window).on('resize', function() {
	    resize_thumbs();
	});
	resize_thumbs();


	$('.btn-show-more').on('click', function(){
	    $('.activity-grid .col-1-3').clone().slice(0,3).shuffle().hide().appendTo('.activity-grid').fadeIn();
        return false;
	});

    // Mobile Nav Toggle
	$('.mobile-menu-btn').click(function(){
		$('.main-nav ul, .admin-nav').toggleClass('show');
		$(this).toggleClass('active');
		return false;
	});

    // Filter Toggle
	$('.btn-mobile-filters, .filters .icon-close').click(function(){
		$('.sidebar-filters').toggleClass('show');
		return false;
	});

    // Search Mobile Toggle
	$('.btn-mobile-search').click(function(){
		$('.search-bar').toggleClass('show');
		$('html, body').animate({
            scrollTop: $("#search-bar").offset().top
        }, 300);
		return false;
	});
	
  });

})(jQuery)