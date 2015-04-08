jQuery(document).ready(function() {

	$('#form_send_review').ajaxForm({
		target: '#form_send_review'
	});
	
	$('.main_slider').slick({
		dots: false,
		infinite: true,
		speed: 1000,
		slide: '.main_slide_item',
		slidesToShow: 1,
		slidesToScroll: 1,
		touchMove: false
	
	});
	
	$('.our_partners_carousel').slick({
		dots: false,
		infinite: true,
		speed: 1000,
		slide: '.item_our_partner',
		slidesToShow: 5,
		slidesToScroll: 1,
		touchMove: false
	
	});
	
	$('.reviews_carousel').slick({
		dots: false,
		infinite: true,
		speed: 1000,
		slide: '.rev_carousel',
		slidesToScroll: 1,
		slidesToShow: 1,
		centerMode: true,
		centerPadding: '28px',
		touchMove: false
	
	});
	
	$('.review_item_gallery_container').slick({
		dots: false,
		infinite: true,
		speed: 1000,
		slide: '.bl_carousel_item',
		vertical: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		touchMove: false
	
	});
	
	$('.reviews_carousel').on('click', '.slick-slide', function(){
		if ($(this).prev('.slick-active').length) {
			$('.reviews_carousel .slick-next').trigger('click');
		return;
		}
		if ($(this).next('.slick-active').length) {
			$('.reviews_carousel .slick-prev').trigger('click');
		return;
		}
	});
	
	$('.blog_read_all').on('click', function(){
		
		$(this).prev('.blog_post_tx_hide').slideToggle(function() {
			$(this).next('.blog_read_all').text(
				$(this).is(':visible') ? "Свернуть" : "Читать полностью"
			);
		});
			
	});
	
	$('.read_all').on('click', function(){
		
		$(this).prev('.review_tx_hide').slideToggle(function() {
			$(this).next('.read_all').text(
				$(this).is(':visible') ? "Свернуть" : "Читать полностью"
			);
		});
			
	});
	
	$('.but_show_all_photo').on('click', function(){
		
		$(this).hide();
		$(this).next('.album_all_photo').find('.hide_show_photo').show();
		$('.but_hide_sp_photo').show();
			
	});
	
	$('.but_hide_sp_photo').on('click', function(){
		
		$(this).hide();
		$(this).parent().parent().hide();
		$(this).parent().parent().parent().prev().show();
			
	});
	
	(function(){
		  var animate = function(){
			var $that = this,
				current = parseInt($that.text());
			if (current == $that.data('final')) { return; }
			setTimeout(function(){
			  $that.text(++current);
			  animate.bind($that)();
			}, 50);
		  };
		  $(window).on('load scroll', function(){
			$('.count').each(function(){
			  var $item = $(this);
			
			  if ($item.hasClass('animated') || !$item.is(':visible')) { return true; }
			
			  $item.addClass('animated').data('final', $item.text()).text(0);
			  animate.bind($item)();
			});
		  });
		})();
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 1) {
        $('.main_page header').addClass('scroll_header');
    } else {
        $('.main_page header').removeClass('scroll_header');
    }
});



