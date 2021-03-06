"use strict";
/******************************************************************************/
/******************************************************************************/

jQuery(document).ready(function($) 
{	
	/**************************************************************************/
	
	var clickEventType=((document.ontouchstart!==null) ? 'click' : 'touchstart');
	
	/**************************************************************************/

	try
	{
		$.fn.qtip.zindex=10;
	}
	catch(e) {}
	
    /**************************************************************************/
    
    if(parseInt(themeOption.rightClick.enable,10)!==1)
    {
        document.oncontextmenu=function() {return false;};
        jQuery(document).mousedown(function(e)
        { 
            if(parseInt(e.button)===2) return false; 
            return true; 
        });
    };
    
    /**************************************************************************/
    
    if(parseInt(themeOption.selection.enable,10)!==1)
    {
        jQuery('body').attr('unselectable','on').css('user-select','none').on('selectstart',false);
    };
    
	/**************************************************************************/
	
	$('a.theme-window-target-blank').attr('target','_blank');
	
	/**************************************************************************/
	
	$('.widget_archive>ul>li,.widget_categories>ul>li').each(function() 
	{
		var link=$(this).children('a').remove();
		var span='<span>'+$(this).text()+'</span>';
		
		link.html(link.text()+span);
		$(this).html(link);
	});
	
	$('.widget_archive,.widget_categories').css('display','block');
	
	/**************************************************************************/

	$('.widget_nav_menu a').bind(clickEventType,function(e) 
	{
		if($(this).attr('href').substr(0,1)==='#')
		{			
			e.preventDefault();
			
			var menu=$(this).parents('.widget_nav_menu');
					
			menu.find('li').removeClass('current-menu-item current-menu-ancestor current_page_item');
			menu.find('ul>li>ul').css('display','none');
			
			$(this).parents('ul.sub-menu').css('display','block');
			$(this).parents('li').addClass('current-menu-item');
			
			$(this).next('ul.sub-menu').css('display','block');
		}
		else window.location.href=$(this).attr('href');
		
		return(true);
	});
	
	$('.widget_nav_menu a').hover(function() { $(this).append('<span>'); },function() { $(this).children('span').remove() } );
	
	$('.widget_nav_menu').each(function() 
	{
		$(this).find('li.current-menu-item,li.current_page_item').parents('ul.sub-menu').css('display','block');
	});

	/**************************************************************************/

	$('.widget_search #searchform>div').each(function() 
	{
		$(this).find('label').addClass('theme-infield-label').inFieldLabels();
	});
	
	$('.widget_search').css('display','block');	
	
	/**************************************************************************/
	
	$('.widget_tag_cloud').each(function() 
	{
		$(this).find('>.tagcloud>a').css('font-size','');
	});
	
	$('.widget_tag_cloud').css('display','block');	
	
	/**************************************************************************/
	
	$('.widget_archive>select,.widget_categories>select').dropkick();
	
	$('.widget_archive .dk_options_inner,.widget_categories .dk_options_inner').each(function() 
	{
		$(this).find('a[data-dk-dropdown-value="-1"],a[data-dk-dropdown-value=""]').parent('li').remove();
	});
	
	/**************************************************************************/
	
	$('.widget_rss>ul>li').each(function() 
	{
		var author=$(this).children('cite').clone(true,true);
		var date=$(this).children('.rss-date').clone(true,true);
				
		$(this).children('cite').remove();
		$(this).children('.rss-date').remove();
		
		if(date.length===1) $(this).children('a').after(date);
		if(author.length===1) $(this).children('a').after(author);
		
		$(this).css({display:'block'});
	});
	
	/**************************************************************************/

	var mailChimpWidget=$('.widget_mc4wp_form_widget');
	
	if(mailChimpWidget.length===1)
	{
		mailChimpWidget.find('form').attr('novalidate','novalidate');
		
		mailChimpWidget.find(':input').each(function() 
		{	
			$(this).removeAttr('placeholder').removeAttr('required').attr('id',$(this).attr('name'));
			
			var label=$(this).prev('label');
			if(label.length===1) label.attr('for',$(this).attr('id')).addClass('theme-infield-label');
		});
		
		var notice=mailChimpWidget.find('.mc4wp-response');

		if((notice.children('.mc4wp-success').length) || (notice.children('.mc4wp-error').length))
		{
			if(notice.length)
			{
				mailChimpWidget.find('input[type="submit"]').parent('p').qtip(
				{
					style			:      
					{
						classes		:	(notice.children('.mc4wp-success').length===1 ? 'pb-qtip pb-qtip-success' : 'pb-qtip pb-qtip-error')
					},
					content			: 	
					{
						text		:	notice.find('>.mc4wp-alert>p').text()
					},
					position		: 	
					{
						my			:	'top center',
						at			:	'bottom center'
					}
				}).qtip('show');

				notice.css('display','none');
			}
		}
	}

	/**************************************************************************/

	$('.theme-post-password-form,.widget_mc4wp_form_widget').find('label.theme-infield-label').inFieldLabels();

	/**************************************************************************/

	$('.theme-post-bar-like').on(clickEventType,'a',function(e) 
	{
		e.preventDefault();
		
		try
		{
			var $self=$(this);
			
			if($self.hasClass('theme-status-disabled')) return;
			
			var data={};
			var Helper=new Portada_ThemeHelper();

			data.action='set_post_like_count';
			data.post_id=Helper.getValueFromClass($self,'theme-value-post-id-');

			$.ajax(
			{
				url				:	themeOption.config.ajax_url,
				data			:	data,
				type			:	'GET',
				success			:	function(response)
				{
					if(String(typeof(response.html))==='undefined') return;
					$self.replaceWith(response.html);
				},
				dataType		:	'json'
			});
		}
		catch(e) {}
	});
	
	/**************************************************************************/
	
	$('.widget_theme_widget_newsletter form').bind('submit',function()
	{
		var $self=$(this);
			
		var data={};

		data.action='newsletter_add_address';
		data.address=$self.find('input[type="text"]').val();

		$self.find('input').parent('div').block({message:false,opacity:0.3});

		$.ajax(
		{
			url				:	themeOption.config.ajax_url,
			data			:	data,
			type			:	'GET',
			success			:	function(response)
			{
				$self.find('input').parent('div').qtip('destroy').unblock();
				
				$self.find('input[type="'+response.field+'"]').parent('div').qtip(
				{
					style			:      
					{
						classes		:	(parseInt(response.error,10)===1 ? 'pb-qtip pb-qtip-error' : 'pb-qtip pb-qtip-success')
					},
					content			: 	
					{
						text		:	response.message
					},
					position		: 	
					{
						my			:	(pbOption.config.is_rtl ? 'bottom left' : 'bottom right'),
						at			:	(pbOption.config.is_rtl ? 'top left' : 'top right'),
					}
				}).qtip('show');				
			},
			dataType		:	'json'
		});	
		
		return(false);
	});
	
	/**************************************************************************/
	
	$('.theme-header-top-bar-search').find('label').addClass('theme-infield-label').inFieldLabels();

	/**************************************************************************/
	
	$('#comments').on(clickEventType,'.theme-comment-content-read-more-link',function(e)
	{
		e.preventDefault();
		var parent=$(this).parent('p');
		
		parent.children('.theme-comment-content-excerpt,.theme-comment-content-read-more-link').css('display','none');
		parent.children('.theme-comment-content-content,.theme-comment-content-read-less-link').css('display','inline');
	});
	
	$('#comments').on(clickEventType,'.theme-comment-content-read-less-link',function(e)
	{
		e.preventDefault();
		var parent=$(this).parent('p');
		
		parent.children('.theme-comment-content-excerpt,.theme-comment-content-read-more-link').css('display','inline');
		parent.children('.theme-comment-content-content,.theme-comment-content-read-less-link').css('display','none');
	});
	
	/**************************************************************************/
	
	if((parseInt(themeOption.goToPageTop.enable,10)===1) && ($('.theme-footer').children.length>=1))
	{
		$('.theme-footer').waypoint(function(direction)
		{
			if(direction==='down')
				$('#theme-go-to-top').animate({opacity:1},{duration:1000});
			else $('#theme-go-to-top').animate({opacity:0},{duration:250});
		},
		{
			offset	:	'100%'
		});
		
		$(window).bind('hashchange',function(e) 
		{
			e.preventDefault();
			
			var hash=window.location.hash.substring(1);
			if($.trim(hash)===$.trim(themeOption.goToPageTop.hash))
			{
				var options={};
				
				if(parseInt(themeOption.goToPageTop.animation_enable,10)===1)
					options={duration:parseInt(themeOption.goToPageTop.animation_duration),easing:themeOption.goToPageTop.animation_easing};
				
				options.onAfter=function() { window.location.hash='#'; };
				
				$.scrollTo(0,options);
			}
		});
	};
	
	/**************************************************************************/
	
	$().header(themeOption);
	
	/**************************************************************************/
	
	$('.theme-post-summary-score').waypoint(function()
	{
		$(this).circleProgress( 
		{
			startAngle	:	-Math.PI/2,
			size		:	120,
			lineCap		:	'round',
			fill		:	$(this).find('b:first').css('border-top-color'),
			emptyFill	:	$(this).find('b:first+b').css('border-top-color'),
			thickness	:	2,
			animation	:	{duration:2400}
		}).on('circle-animation-progress',function(event,progress,stepValue) 
		{
			var value=(stepValue*10).toFixed(1);

			if(String(value)==='10.0') value=10;
			$(this).find('div').text(value);
		});
	},
	{
		offset			:	'90%',
		triggerOnce		:	true 
	});	
	
	/**************************************************************************/
	
	if($('#comment-form').length===1)
	{
		$('#comment-form').children('p:first').remove();
		$('#comment-form').children('.form-submit').before($('#comment-form').children('p:first'));
						
		$('#reply-title').replaceWith('<h4 id="reply-title">'+$('#reply-title').html()+'</h4>');
						
		$().ThemeComment({'requestURL':themeOption.config.ajax_url,'page':$('#comments').data('cpage')});
		
		$('#comment-form').css('display','block');
	}
					
	/**************************************************************************/
	
	$('.pb-image-type-video>a').on('click',function(e)
	{
		e.preventDefault();
		
		$(this).css('display','none');
		$(this).next('div').css('display','block');
	});
	
	/**************************************************************************/
	
	$('.pb-image-type-audio>a').on('click',function(e)
	{
		e.preventDefault();

		var url=$(this).next('div').data('url');

		$(this).next('div').find('iframe').attr('src',url);

		$(this).css('display','none');
		$(this).next('div').css('display','block');
	});
	
	/**************************************************************************/
	
	function wcUpdateCartCount()
	{
		var data={'action':'cart_count_get'};
		
		$.ajax(
		{
			url				:	themeOption.config.ajax_url,
			data			:	data,
			type			:	'GET',
			success			:	function(response)
			{
				$('.theme-woocommerce-icon>span').html(response.count);
			},
			dataType		:	'json'
		});			
	};
	
	/**************************************************************************/
	
	if(themeOption.config.woocommerce.enable===1)
	{
		/***/
		
        $('.woocommerce select').each(function()
        {
           if(!$(this).parents('.woocommerce-checkout').length && !$(this).parents('.woocommerce-account').length)
               $(this).dropkick();
        });
        
		/***/
		
		$('.woocommerce.widget_product_search').each(function() 
		{
			$(this).find('label').addClass('theme-infield-label').inFieldLabels();
		});
		
		/***/
		
		$('.woocommerce.widget_product_search .search-field').removeAttr('placeholder');
		
		/***/
		
		$('.woocommerce.widget_rating_filter>ul>li>a').each(function() 
		{
			var star='<span class="star-rating">'+$(this).children('span').html()+'</span>';	
			
			$(this).children('span').remove();
			
			var count='<span>'+$(this).text()+'</span>';
		
			$(this).html(star+count);			
		});
		
		/***/
		
		$('.woocommerce .quantity .plus').on('click',function()
		{
			var input=$(this).prev();
			input.val(parseInt(input.val(),10)+1);
		});
		
		$('.woocommerce .quantity .minus').on('click',function()
		{
			var input=$(this).next();
			input.val((parseInt(input.val(),10)-1>0 ? parseInt(input.val(),10)-1 : 1));
		});
	
		/***/

		$('.input-text.qty.text').on('change',function() 
		{
			var value=parseInt($(this).val(),10);
			if(value>0) return;
			$(this).val(1);
		});
		
		/***/
		
		$('.woocommerce input').removeAttr('disabled');
		
		/***/
		
		$('body').on('updated_cart_totals',function()
		{
			$('.woocommerce input').removeAttr('disabled');
			wcUpdateCartCount();
		});
		
		$('body').on('added_to_cart',function() 
		{
			wcUpdateCartCount();			
		});
		
		$('body').on('updated_wc_div',function() 
		{
			wcUpdateCartCount();
		});
		
		/***/
		
		$('.theme-wc-add-to-cart-notice').each(function() 
		{
			var link=$(this).children('a').remove();
			var text='<span>'+$(this).text()+'</span>';
		
			$(this).html('').append(text).append(link);
			
			$(this).find('a').wrap('<span></span>');
		});
		
		/***/
	}
    
    /**************************************************************************/
    
    $('.theme-table-responsive-on').responsiveTable();
	
	$('.wp-my-instagram>ul').addClass('theme-instagram-feed theme-reset-list theme-clear-fix');
	
	/**************************************************************************/
});

/******************************************************************************/
/******************************************************************************/