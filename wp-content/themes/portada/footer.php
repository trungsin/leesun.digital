<?php
		global $portadaParentPost;

		$Validation=new Portada_ThemeValidation();
		$WidgetArea=new Portada_ThemeWidgetArea();

		$widgetAreaData=$WidgetArea->getWidgetAreaByPost($portadaParentPost->post,true,true);
		$class=$WidgetArea->getWidgetAreaCSSClass($widgetAreaData);

		if($widgetAreaData['location']==1)
		{
?>	
						</div>
<?php
		}
		elseif($widgetAreaData['location']==2)
		{
?>
						</div>
						<div class="theme-column-right"><?php $WidgetArea->create($widgetAreaData); ?></div>	
<?php
		}
?>
					</div>
				
				</div>
				
				<div class="theme-footer theme-clear-fix">					
<?php
		/***/

		

		if(Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'footer_instagram_enable')==1)
		{
			$Instagram=new Portada_ThemeInstagram();
			echo $Instagram->getLatestUserFeed(Portada_ThemeOption::getOption('footer_instagram_token'),Portada_ThemeOption::getOption('footer_instagram_feed_count'));
		}

		/***/
		
		if(Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'footer_menu_1')>0)
		{
			$menuAttribute=array
			(
				'menu'				=>	Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'footer_menu_1'),
				'menu_class'		=>	'theme-clear-fix',
				'depth'				=>	1,
				'echo'				=>	0,
				'items_wrap'		=>	'<ul class="theme-reset-list %2$s">%3$s</ul>'
			);
?>
					<div class="theme-footer-menu-1 theme-clear-fix">
						<?php echo wp_nav_menu($menuAttribute); ?>
					</div>
<?php
		}
		
		/***/
		
		if(in_array(Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'footer_logo_enable'),array(null,1)))
		{
			if($Validation->isNotEmpty(Portada_ThemeOption::getOption('footer_logo_src')))
			{
?> 
					<div class="theme-main theme-footer-logo theme-clear-fix">
						<a href="<?php echo esc_url(get_home_url()); ?>" title="<?php bloginfo('name'); ?>">
							<img src="<?php echo esc_url(Portada_ThemeOption::getOption('footer_logo_src')); ?>" alt="<?php bloginfo('name'); ?>"/>
						</a>
					</div>
<?php			
			}
		}
		
		/***/
		
		for($i=2;$i<=3;$i++)
		{
			if(Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'footer_menu_'.$i)>0)
			{
				$menuAttribute=array
				(
					'menu'				=>	Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'footer_menu_'.$i),
					'menu_class'		=>	'theme-clear-fix',
					'depth'				=>	1,
					'echo'				=>	0,
					'items_wrap'		=>	'<ul class="theme-reset-list %2$s">%3$s</ul>'
				);
?>
					<div class="theme-main theme-footer-menu-2 theme-clear-fix">
						<?php echo wp_nav_menu($menuAttribute); ?>
					</div>
					<div class="theme-main theme-clear-fix theme-page-sidebar-enable theme-page-sidebar-right">
							<div class="theme-column-left">ss</div><div class="theme-column-right"><?php echo do_shortcode('[listmenu menu="Social Menu"]'); ?>

</div>
					</div>

<?php
			}
		}
		/***/
		
		if(in_array(Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'footer_bottom_enable'),array(null,1)))
		{
			if($Validation->isNotEmpty(Portada_ThemeOption::getOption('footer_bottom_content')))
			{
?>
					<div class="theme-main theme-footer-bottom theme-clear-fix">
						<?php echo Portada_ThemeOption::getOption('footer_bottom_content'); ?>
					</div>					
<?php
			}
		}
		
		/***/
?>
				</div>
<?php	
		if($Validation->isNotEmpty(Portada_ThemeOption::getOption('custom_js_code')))
		{
?>
				<script type="text/javascript">
					<?php echo Portada_ThemeOption::getOption('custom_js_code'); ?>
				</script>
<?php
		}

		if(Portada_ThemeOption::getOption('go_to_page_top_enable')==1)
		{
?>
				<a href="<?php echo esc_url('#'.Portada_ThemeOption::getOption('go_to_page_top_hash')); ?>" id="theme-go-to-top"></a>
<?php
		}
		
		wp_footer();
?>
			</body>
			
		</html>