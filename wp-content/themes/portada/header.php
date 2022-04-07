<?php ob_start(); ?>
<!DOCTYPE html>
<?php
		global $post,$portadaParentPost;

		$Theme=new Portada_Theme();
		
		$Post=new Portada_ThemePost();
		$Page=new Portada_ThemePage();
		$Menu=new Portada_ThemeMenu();
		$Plugin=new Portada_ThemePlugin();
		$Validation=new Portada_ThemeValidation();
		$WooCommerce=new Portada_ThemeWooCommerce();
		
		if(($portadaParentPost=$Post->getPost())===false) 
		{
			$portadaParentPost=new stdClass();
			$portadaParentPost->post=$post;
		}
?>
		<html xmlns="http://www.w3.org/1999/xhtml" <?php echo (Portada_ThemeOption::getOption('open_graph_enable')==1 ? ' prefix="og:http://ogp.me/ns#"' : null); ?> <?php language_attributes(); ?>>

			<head>
				<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
				<meta name="format-detection" content="telephone=no"/>
				<?php echo $Theme->createOpenGraphMetaTag(); ?>
<?php
		if(Portada_ThemeOption::getOption('responsive_mode_enable')==1)
		{
?>
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<?php
		}
?>
				<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
				 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<?php				
		wp_site_icon();
		wp_head(); 
?>
<script type="text/javascript">
// 	document.addEventListener("DOMContentLoaded", function(){
//   window.addEventListener('scroll', function() {
//       if (window.scrollY > 50) {
//       	        console.log(document.getElementsByClassName('theme-header-menu').classList);

//         document.getElementsByClassName('theme-header-menu').classList.add('fixed-top');
//         // add padding top to show content behind navbar
//         navbar_height = document.querySelector('.navbar').offsetHeight;
//         document.body.style.paddingTop = navbar_height + 'px';
//       } else {
//         document.getElementsByClassName('theme-header-menu').classList.remove('fixed-top');
//          // remove padding top from body
//         document.body.style.paddingTop = '0';
//       } 
//   });
// }); 

</script>
<style type="text/css">
	.theme-header-menu {
		width: 100% !important;
	}
	* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  background: #2d2c41;
  font-family: 'Open Sans', Arial, Helvetica, Sans-serif, Verdana, Tahoma;
}

ul { list-style-type: none; }

a {
  color: #b63b4d;
  text-decoration: none;
}

/** =======================
 * Contenedor Principal
 ===========================*/


h1 {
  color: #FFF;
  font-size: 24px;
  font-weight: 400;
  text-align: center;
  margin-top: 80px;
}

h1 a {
  color: #c12c42;
  font-size: 16px;
}

.accordion {
  width: 100%;
  max-width: 360px;
  margin: 30px auto 20px;
  background: #FFF;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}

.accordion .link {
  cursor: pointer;
  display: block;
  padding: 15px 15px 15px 42px;
  color: #4D4D4D;
  font-size: 14px;
  font-weight: 700;
  border-bottom: 1px solid #CCC;
  position: relative;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li:last-child .link { border-bottom: 0; }

.accordion li i {
  position: absolute;
  top: 16px;
  left: 12px;
  font-size: 18px;
  color: #595959;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li i.fa-chevron-down {
  right: 12px;
  left: auto;
  font-size: 16px;
}

.accordion li.open .link { color: #b63b4d; }

.accordion li.open i { color: #b63b4d; }

.accordion li.open i.fa-chevron-down {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}

/**
 * Submenu
 -----------------------------*/


.submenu {
  display: none;
  background: #444359;
  font-size: 14px;
}

.submenu li { border-bottom: 1px solid #4b4a5e; }

.submenu a {
  display: block;
  text-decoration: none;
  color: #d9d9d9;
  padding: 12px;
  padding-left: 42px;
  -webkit-transition: all 0.25s ease;
  -o-transition: all 0.25s ease;
  transition: all 0.25s ease;
}

.submenu a:hover {
  background: #b63b4d;
  color: #FFF;
}
</style>
<script type="text/javascript">
	$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});

</script>
			</head>

			<body <?php body_class(); ?>>

				<div class="theme-header">
<?php
		if((Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'header_top_social_icon_enable')==1) || (Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'header_top_bar_search_enable')==1))
		{
?>	
					<div class="theme-header-top-bar">
						
						<div class="theme-main theme-clear-fix">
<?php
			if(Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'header_top_social_icon_enable')==1)
			{
?>
							<div class="theme-header-top-bar-social-icon">
<?php
				$SocialProfile=new Portada_ThemeSocialProfile();
				echo $SocialProfile->createSocialProfile();
?>
							</div>
<?php
			}
				
			if(Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'header_top_bar_search_enable')==1)
			{
?>
							<div class="theme-header-top-bar-search">
								<form action="<?php echo get_site_url(); ?>" method="GET">
									<div>
										<label class="theme-infield-label" for="s_"><?php esc_attr_e('Type and hit enter...','portada'); ?></label>
										<input type="text" id="s_" name="s" value=""/>
									</div>
								</form>
							</div>						
<?php
			}
			
			// if(Portada_ThemePlugin::isActive('WooCommerce'))
			// {
			// 	global $woocommerce;
?>
		<!--					<div class="theme-header-top-bar-woocommerce-icon">
								<a class="theme-woocommerce-icon" href="<?php echo esc_url(wc_get_cart_url()); ?>">
									<span><?php echo (int)$woocommerce->cart->cart_contents_count; ?></span>
								</a>
							</div>-->
<?php				
//			}
?>
						</div>
							
					</div>
<?php
		}
		
		$headerType='text';
		
		if(in_array(Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'header_logo_enable'),array(null,1)))
		{
			if($Validation->isNotEmpty(Portada_ThemeOption::getOption('header_logo_src')))
			{
				$headerType='logo';
?>
					<div class="theme-main">
						<div class="theme-header-logo">
							<a href="<?php echo esc_url(get_home_url()); ?>" title="<?php bloginfo('name'); ?>">
								<img src="<?php echo esc_url(Portada_ThemeOption::getOption('header_logo_src')); ?>" alt="<?php bloginfo('name'); ?>"/>
							</a>
						</div>		
					</div>
<?php			
			}
		}	
?>
					<div class="theme-main">
<?php
		echo $Menu->create();
		if($Plugin->isActive('RevSliderSlider'))
		{
			if(!in_array(Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'header_revolution_slider_id'),array('0','-1')))
			{
?>
						<div class="theme-header-revolution-slider">
							<?php echo do_shortcode('[rev_slider alias="'.Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'header_revolution_slider_id').'"]'); ?>
						</div>								
<?php
			}
		}
				?>
				<!--<button data-toggle="collapse" data-target="#menu-blog" class="menublog">
		          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>ALL of Blogs
		        </button>

				<div id="menu-blog" class="collapse"> -->
				<ul id="accordion" class="accordion">
  <li> <div class="link"><i class="fa fa-database"></i>Web Design<i class="fa fa-chevron-down"></i></div>
				<?php bellows( 'main' , array( 'menu' => 119 ) ); ?>
			</li>
		</ul>
				<!-- </div> -->

					</div>
					
				</div>
<div class="theme-main theme-clear-fix">
</div>						
				<div class="theme-content">
<?php
		global $portada_sidebarEnable;
		
		$portada_sidebarEnable=false;
	
		$WidgetArea=new Portada_ThemeWidgetArea();
						
		$widgetAreaData=$WidgetArea->getWidgetAreaByPost($portadaParentPost->post,true,true);
		$class=$WidgetArea->getWidgetAreaCSSClass($widgetAreaData);			
?>
					<div class="theme-main theme-clear-fix <?php echo esc_attr($class); ?>">	
<?php
		if($widgetAreaData['location']==1)
		{
			$portada_sidebarEnable=true;
?>
						<div class="theme-column-left"><?php $WidgetArea->create($widgetAreaData); ?></div>
						<div class="theme-column-right">
<?php
		}
		elseif($widgetAreaData['location']==2)
		{
			$portada_sidebarEnable=true;
?>
						<div class="theme-column-left">
<?php
		}
		
		if(!is_single()) 
		{
			$Post->getTitle();
		}