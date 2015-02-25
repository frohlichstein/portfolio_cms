(function($){

  $(function(){
  
    // Sticky Nav
    sticky_nav = function() {
      var nav = $('.nav');
      var nav_top = nav.offset().top;
      var nav_bottom = nav_top + 41;
      var fixed_nav = $('.fixed-nav');
      
      _sticky_nav_check();
      $(window).scroll(_sticky_nav_check);
      $(window).resize(_sticky_nav_check);
      
      function _sticky_nav_check() {
        var window_top = $(window).scrollTop();
        var window_width = window.outerWidth;
        
        if (window_width < 725) {
          _sticky_nav_revert();
          return;
        }

        if (window_top > nav_bottom) {
          _sticky_nav_apply();
        } else {
          _sticky_nav_revert();
        }
      }
      
      function _sticky_nav_apply() {
        fixed_nav.addClass('is-active');
      }

      function _sticky_nav_revert() {
        fixed_nav.removeClass('is-active');
      }
    }

    // Random Blurb
    function random_blurb() {
      var blurbArray = [
        "Get to the chopper!",
        "I'm a cop you idiot",
        "Kolhagan, get these people air!",
        "Who is your daddy and what does he do?",
        "Get dooooown!",
        "Freeze!"
      ];
      function getBlurb() {
        return blurbArray[Math.floor(Math.random() * blurbArray.length)];
      }
      $('.quote').text(getBlurb());
    }

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
    
    // Facebook Share
    function fbShare(url, winWidth, winHeight) {
      var winTop = (screen.height / 2) - (winHeight / 2);
      var winLeft = (screen.width / 2) - (winWidth / 2);
      window.open('http://www.facebook.com/sharer.php?s=100&p[url]=' + url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width='+winWidth+',height='+winHeight);
    }
  
    sticky_nav();
  	random_blurb();
  	category_toggle();
  	share_toggle();
  	back_to_top();
  	mobile_menu_btn();

  });

})(jQuery)