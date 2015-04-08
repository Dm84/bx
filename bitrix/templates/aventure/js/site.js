jQuery(document).ready(function() {
	
	$('.bl_services_item').css({top: 0, opacity: 0}).animate({top: -28, opacity: 1}, 900);
	
	$('.main_slider').find('.main_slide_item').css({opacity: 0}).animate({opacity: 1}, 800);
	
	(function(){
		var $originality = $('.why_we'),
		originalityTop = $originality.children('.center').offset().top;
		
		$(window).on('resize', function(){
			originalityTop = $originality.children('.center').offset().top;
		}).on('load scroll', function(){
			
			if (originalityTop > window.scrollY
				&& originalityTop < window.scrollY + window.innerHeight - 200) {
				
				$('.why_we .bls_centered_header a').addClass('show_border');
		}
	});
	})();
	
	(function(){
		var $originality = $('.main_reviews'),
		originalityTop = $originality.children('.center').offset().top;
		
		$(window).on('resize', function(){
			originalityTop = $originality.children('.center').offset().top;
		}).on('load scroll', function(){
			
			if (originalityTop > window.scrollY
				&& originalityTop < window.scrollY + window.innerHeight - 270) {
				
				$('.main_reviews .bls_centered_header a').addClass('show_border');
			$('.main_reviews').addClass('show_arrows');
		}
	});
	})();
	
	(function(){
		var $originality = $('.our_partners'),
		originalityTop = $originality.children('.center').offset().top;
		
		$(window).on('resize', function(){
			originalityTop = $originality.children('.center').offset().top;
		}).on('load scroll', function(){
			
			if (originalityTop > window.scrollY
				&& originalityTop < window.scrollY + window.innerHeight - 200) {
				
				$('.our_partners .bls_centered_header a').addClass('show_border');
			$('.our_partners').addClass('show_arrows');
		}
	});
	})();
	
	(function(){
		var $originality = $('.main_about'),
		originalityTop = $originality.children('.center').offset().top;
		
		$(window).on('resize', function(){
			originalityTop = $originality.children('.center').offset().top;
		}).on('load scroll', function(){
			var fadeSpeed = 400,
			fadePause = 0;
			if (originalityTop > window.scrollY
				&& originalityTop < window.scrollY + window.innerHeight - 200) {
				
				$('.main_about .bls_left_header a').addClass('show_border');
		}
		
		if (originalityTop > window.scrollY
			&& originalityTop < window.scrollY + window.innerHeight - 500) {
			
			$('.sp_social_buts li').each(function(i){
				$(this).addClass('visible').delay(i * fadeSpeed + (i ? (i - 1) * fadePause : 0)).animate({opacity:1}, fadeSpeed);
			});
	}
});
	})();
	
});

jQuery(document).ready(function($) {
	
	$('.win').fancybox({
		
		helpers : {
			title : {
				type : 'inside'
			}
		}
	});
	
});
