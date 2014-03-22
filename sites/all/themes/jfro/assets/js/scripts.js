$(function(){

    $.fn.shuffle = function() {
 
        var allElems = this.get(),
            getRandom = function(max) {
                return Math.floor(Math.random() * max);
            },
            shuffled = $.map(allElems, function(){
                var random = getRandom(allElems.length),
                    randEl = $(allElems[random]).clone(true)[0];
                allElems.splice(random, 1);
                return randEl;
           });
 
        this.each(function(i){
            $(this).replaceWith($(shuffled[i]));
        });
 
        return $(shuffled);
 
    };

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