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
<?php				
		wp_site_icon();
		wp_head(); 
?>
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementsByClassName('theme-header-menu').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementsByClassName('theme-header-menu').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
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
					</div>
					
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