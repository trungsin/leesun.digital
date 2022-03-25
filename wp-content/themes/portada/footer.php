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
					<style type="text/css">
						/* DivTable.com */
							.divTable{
								display: table;
								width: 100%;
							}
							.divTableRow {
								display: table-row;
							}
							.divTableHeading {
								background-color: #EEE;
								display: table-header-group;
							}
							.divTableCellLeft, .divTableHead {
								border: 1px solid #999999;
								display: table-cell;
								padding: 3px 10px;
								width: 60%;
							}
							.divTableCellRight {
								border: 1px solid #999999;
								display: table-cell;
								padding: 3px 10px;
								width: 40%;
							}
							.divTableHeading {
								background-color: #EEE;
								display: table-header-group;
								font-weight: bold;
							}
							.divTableFoot {
								background-color: #EEE;
								display: table-footer-group;
								font-weight: bold;
							}
							.divTableBody {
								display: table-row-group;
							}
					</style>
					<div class="theme-main theme-clear-fix theme-page-sidebar-enable theme-page-sidebar-right">
							<div class="theme-column-left">
								
								<div class="divTable">
								<div class="divTableBody">
								<div class="divTableRow">
								<div class="divTableCellLeft"><img src="https://leesun.digital/wp-content/uploads/2022/03/cropped-cropped-MicrosoftTeams-image-8-1-1.png" alt="Portada – Elegant WordPress Blogging Theme">
								<p><span class="rt-reading-time" style="display: block;"><span class="rt-label rt-prefix">Reading Time: </span> <span class="rt-time">7</span> <span class="rt-label rt-postfix">minutes</span></span> How to give the most thoughtful sympathy gifts for loss of mother? The key to choosing the best meaningful sympathy gift is simple. Just something to show your condolence and your deep care for this person.&nbsp; That’s it. When one loses their Mom, it quite seems like they literally…</p>
								</div>
								<div class="divTableCellRight">&nbsp;</div>
								</div>
								</div>
								</div>
								<!-- DivTable.com -->
							</div>
							<div class="theme-column-right">
								<h5> FOLLOW US </h5>
								<div class="theme-header-top-bar-social-icon">
								<?php
												$SocialProfile=new Portada_ThemeSocialProfile();
												echo $SocialProfile->createSocialProfile();
								?>
								</div>
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