<?php 
		$id=(int)Portada_ThemeOption::getOption('page_404_page_id');

		if($id<=0)
		{
			get_header();
?>
		<div class="theme-page-content theme-clear-fix">
			<div class="pb-line pb-clear-fix aligncenter">
				<ul class="pb-layout pb-layout-100 pb-reset-list pb-clear-fix pb-main">
					<li class="pb-layout-column-left">
						<div class="pb-space-line"></div>
						<div>
							<h2 class="pb-header theme-header-404 pb-margin-bottom-30">
								<span class="pb-header-content"><?php esc_html_e('404','portada'); ?></span>
							</h2>
							<div class="pb-margin-bottom-50">
								<?php esc_html_e('Sorry, the page you were looking for doesn\'t exist.','portada'); ?><br>
								<?php esc_html_e('Please continue to...','portada'); ?>
							</div>
							<div class="pb-button pb-button-style-1">
								<a href="<?php echo esc_url(get_home_url()); ?>" class="pb-window-target-self">
									<span class="pb-button-box">
										<span class="pb-button-icon"></span>
										<span class="pb-button-content"><?php esc_html_e('Home page','portada'); ?></span>
									</span>
								</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
<?php			
			get_footer();
		}
		else
		{
			$url=get_the_permalink($id);
			
			if($url===false) wp_redirect(get_home_url());
			else wp_redirect($url);
		}