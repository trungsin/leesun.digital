/******************************************************************************/
/******************************************************************************/

;(function($,doc,win) 
{
	"use strict";
	
	var Header=function(object,themeOption)
	{
		/**********************************************************************/
		
		var $self=this;
		var $themeOption=themeOption;

		var $header;
		
		var $menu;
		var $menuDefault;
		var $menuResponsive;
		
		var $menuBox;
		var $menuBoxHeight;
		
		var $menuSticky;
		
		/**********************************************************************/

		this.build=function() 
		{		
			$header=$('.theme-header');
			
			$menu=$('.theme-header .theme-header-menu');
			$menuDefault=$('.theme-header .theme-header-menu-default');
			$menuResponsive=$('.theme-header .theme-header-menu-responsive');
			
			$menuBox=$menu.prev('.theme-header-menu-box');
			
			$menuBoxHeight=0;
			
			$menuSticky=undefined;
			
			if($header.length!==1) return;
						
			/***/
			
			if($menu.length===1)
			{
				if($menuDefault.length===1 && parseInt($themeOption.header.menu_animation_enable,10)===1)
				{
					$menuDefault.children('ul:first').superfish(
					{ 
						delay		:	parseInt($themeOption.header.menu_animation_delay,10), 
						speed		:	parseInt($themeOption.header.menu_animation_speed_open,10), 
						speedOut	:	parseInt($themeOption.header.menu_animation_speed_close,10),	
						cssArrows	:	false,
						onInit		:	function()
						{
			
						}
					}); 			
				}
			}
			
			/***/
			
			$(window).windowDimensionListener({change:function(width,height)  
			{
				if(width || height)
				{
					$self.setHeaderResponsive();
					$self.createMenuSticky();
				}
			}});
			
			/***/
			
			if(parseInt($themeOption.header.menu_sticky_enable,10)===1)
			{
				$(window).scroll(function()
				{
					$self.createMenuSticky();
				});
			}
			
			/***/
			
			$menuResponsive.find('>ul a[href="#"]').on('click',function(e)
			{
				e.preventDefault();
			
				var submenu=$(this).next('ul');
				if(submenu.length===1)
				{
					if(submenu.hasClass('template-state-open'))
					{
						submenu.animate({height:'0'},{complete:function() 
						{
							submenu.css({display:'none'}).removeClass('template-state-open');
							submenu.find('ul').css({height:'0',display:'none'}).removeClass('template-state-open');
						}});
					}
					else
					{
						var height=parseInt(submenu.actual('height'),10);
						submenu.css({height:'0',display:'block'}).animate({height:height},{complete:function() 
						{
							submenu.css({height:'auto'}).addClass('template-state-open');
						}});
					}
				};
			});
			
			/***/
			
			$menuResponsive.find('>div>a').on('click',function(e) 
			{
				e.preventDefault();
				$menuResponsive.find('>ul').toggle();;
			});
			
			$menuDefault.find('a').on('click',function(e) 
			{
				if($(this).attr('href')=='#')
					e.preventDefault();
			});
			
			/***/

			$header.css({display:'block'});
		};
		
		/**********************************************************************/
		
		this.createMenuSticky=function()
		{
			if(parseInt($themeOption.header.menu_sticky_enable,10)!==1) return;
			
			if($menu.length!==1) return;
			
			var offset=(parseInt($('#wpadminbar').length,10)===1 ? $('#wpadminbar').actual('height') : 0);
			
			if($header.hasClass('theme-mode-responsive'))
			{
				$menu.removeClass('theme-header-menu-sticky');
				$self.setMenuBoxHeight();
				return;
			}
			
			if($menu.hasClass('theme-header-menu-sticky'))
			{
				if($(window).scrollTop()<=$menuBox.position().top-offset)
				{
					$menu.removeClass('theme-header-menu-sticky');
					$self.setMenuBoxHeight();
				}
			}
			else
			{
				if($(window).scrollTop()>=$menu.position().top-offset)
				{
					$menu.addClass('theme-header-menu-sticky');
					$self.setMenuBoxHeight();
				}				
			}
		};
		
		/**********************************************************************/
		
		this.setMenuBoxHeight=function()
		{
			$menuBoxHeight=parseInt($menu.actual('height'),10);
			
			if($menu.hasClass('theme-header-menu-sticky'))
				$menuBox.css({'display':'block','height':$menuBoxHeight});
			else 
				$menuBox.css({'display':'none','height':0});
		};
		
		/**********************************************************************/
		
		this.setHeaderResponsive=function()
		{
            if(parseInt(themeOption.responsiveMode.enable,10)!==1) return;
            
			var width=$header.parent().actual('width')+17;

			if(width<$themeOption.header.menu_responsive_mode)
			{
				$header.addClass('theme-mode-responsive');
				$menu.removeClass('theme-header-menu-sticky');
			}
			else $header.removeClass('theme-mode-responsive');
		};
		
		/**********************************************************************/
	};
	
	/**************************************************************************/
	
	$.fn.header=function(themeOption) 
	{
		var header=new Header(this,themeOption);
		header.build();
	};
	
	/**************************************************************************/

})(jQuery,document,window);

/******************************************************************************/
/******************************************************************************/