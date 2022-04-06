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


<?php
			}
		}
?> <!-- footer custome -->
<style type="text/css">
						/* DivTable.com */
							.divTable{
								display: table;
								width: 100%;
							}
							.divTableRow {
								display: table-row;
								display: grid;
							    grid-gap: 5px;
							    grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
							    /* grid-template-rows: repeat(2, 360px); */
							}
							}
							.divTableHeading {
								background-color: #EEE;
								display: table-header-group;
							}
							.divTableCellLeft, .divTableHead {
								border: 0px solid #999999;
								display: table-cell;
								padding: 3px 10px;
								/*width: 60%;*/
							}
							.divTableCellRight {
								border: 0px solid #999999;
								display: table-cell;
								padding: 3px 10px;
								/*width: 40%;*/
								    vertical-align: top;

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

							/*subscribe mail*/
							section {
							    padding: 100px 0;
							    text-align: center;
							}
							select.frecuency {
							    border: none;
							    font-style: italic;
							    background-color: transparent;
							    cursor: pointer;
							    -webkit-transform: translateY(0);
							    transform: translateY(0);
							    -webkit-transition: -webkit-transform .35s ease-in;
							    transition: -webkit-transform .35s ease-in;
							    border-bottom: none;
							}
							select.frecuency:focus {
							    outline: none;
							    border-bottom: 5px solid #39b3d7;
							    -webkit-transform: translateY(-5px);
							    transform: translateY(-5px);
							    -webkit-transition: -webkit-transform .35s ease-in;
							    transition: -webkit-transform .35s ease-in;
							}
							.free {
							    text-transform: uppercase;
							}
							.input-group {
							    margin: 20px auto;
							    width: 100%;
							}
							input.btn.btn-lg,
							input.btn.btn-lg:focus {
							    outline: none;
							    width: 60%;
							    height: 40px;
							    border-top-right-radius: 0;
							    border-bottom-right-radius: 0;
							}
							button.btn {
							    width: 40%;
							    height: 40px;
							    border-top-left-radius: 0;
							    border-bottom-left-radius: 0;
							}
							button.btn-info{
								background-color: #3DAC97;
								padding: 0px;
							}
							.promise {
							    color: #999;
							}

					</style>
					<div class="theme-main theme-clear-fix theme-page-sidebar-enable theme-page-sidebar-right">
							<div class="theme-column-left">
								
								<div class="divTable">
								<div class="divTableBody">
								<div class="divTableRow">
								<div class="divTableCellLeft"><img src="https://leesun.digital/wp-content/uploads/2022/03/cropped-cropped-MicrosoftTeams-image-8-1-1.png" alt="Portada – Elegant WordPress Blogging Theme">
								<p>The best gift ever for any occasion is a personalized gift. Even you are looking for a sympathy gift, an anniversary gift, or a gift for your loved one...we can help you find the best ideas and gifts. The Magic Exhalation's mission is to be your assistant to pick the most unique and meaningful gift for anyone!</p>
								</div>
								<div class="divTableCellRight">
									<h5>QUICK LINKS</h5>
									<?php echo do_shortcode('[listmenu menu="Footer Menu"]'); ?>

								</div>
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
								<br>
									<?php echo do_shortcode('[mc4wp_form id="972"]'); ?>
							</div>
					</div>
<?php
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