
		<div class="to to-to">

            <div id="to_notice"></div> 
            
			<form name="to_form" id="to_form" method="POST" action="#">

				<div class="to-header to-clear-fix">

					<div class="to-header-left">

						<div>
							<h3>QuanticaLabs</h3>
							<h6><?php esc_html_e('Theme Options','portada'); ?></h6>
						</div>

					</div>

					<div class="to-header-right">

						<div>
							<h3>Portada - Elegant WordPress Blogging Theme</h3>
							<h6>Wordpress Theme ver. 2.1</h6>&nbsp;&nbsp;
							<a href="http://support.quanticalabs.com" target="_blank">Support Forum</a>
							<a href="https://1.envato.market/portada-elegant-wordpress-blogging-theme" target="_blank">Theme site</a>
						</div>

						<a href="http://quanticalabs.com" class="to-header-right-logo"></a>

					</div>

				</div>

				<div class="to-content to-clear-fix">

					<div class="to-content-left">

						<ul class="to-menu" id="to_menu">

							<li>
								<a href="#general_setting"><?php esc_html_e('General settings','portada'); ?><span></span></a>
								<ul>
									<li><a href="#general_main"><?php esc_html_e('Main','portada'); ?></a></li>
									<li><a href="#general_blog"><?php esc_html_e('Blog','portada'); ?></a></li>
									<li><a href="#general_post"><?php esc_html_e('Posts','portada'); ?></a></li>
									<li><a href="#general_page"><?php esc_html_e('Pages','portada'); ?></a></li>
									<li><a href="#general_header"><?php esc_html_e('Header','portada'); ?></a></li>
									<li><a href="#general_footer"><?php esc_html_e('Footer','portada'); ?></a></li>
									<li><a href="#general_comment"><?php esc_html_e('Comments','portada'); ?></a></li>
									<li><a href="#general_widget_area"><?php esc_html_e('Widget areas','portada'); ?></a></li>
									<li><a href="#general_social_profile"><?php esc_html_e('Social profiles','portada'); ?></a></li>
									<li><a href="#general_custom_js_code"><?php esc_html_e('Custom JS code','portada'); ?></a></li>
									<li><a href="#general_content_copying"><?php esc_html_e('Content copying','portada'); ?></a></li>
									<li><a href="#general_go_top_top"><?php esc_html_e('Go to top of page','portada'); ?></a></li>
									<li><a href="#general_responsive_mode"><?php esc_html_e('Responsive mode','portada'); ?></a></li>
								</ul>				
							</li>
							<li>
								<a href="#plugin_setting" class="to-menu-plugin"><?php esc_html_e('Plugins settings','portada'); ?><span></span></a>
								<ul>
<?php
		if(Portada_ThemePlugin::isActive('WooCommerce'))
		{						
?>	
									<li><a href="#plugin_woocommerce"><?php esc_html_e('wooCommerce','portada'); ?></a></li>
<?php
		}
?>						
									<li><a href="#plugin_maintenance_mode"><?php esc_html_e('Maintenance mode','portada'); ?></a></li>
									<li><a href="#plugin_fancybox_image"><?php esc_html_e('Fancybox for images','portada'); ?></a></li>
								</ul>
							</li>							
							<li>
								<a href="#custom_css" class="to-menu-css"><?php esc_html_e('Custom CSS','portada'); ?><span></span></a>
							</li>	
						</ul>

					</div>

					<div class="to-content-right" id="to_panel">
<?php
		$content=array
		(
			array('general_main'),
			array('general_blog'),
			array('general_post'),
			array('general_page'),
			array('general_header'),
			array('general_footer'),
			array('general_comment'),
			array('general_widget_area'),
			array('general_social_profile'),
			array('general_custom_js_code'),
			array('general_content_copying'),
			array('general_go_top_top'),
			array('general_responsive_mode'),
			array('plugin_maintenance_mode'),
			array('plugin_fancybox_image'),
			array('custom_css')
		);
		
		if(Portada_ThemePlugin::isActive('WooCommerce'))
			array_push($content,array('plugin_woocommerce'));

		foreach($content as $value)
		{
?>
						<div id="<?php echo esc_attr($value[0]); ?>">
<?php
			$Template=new Portada_ThemeTemplate($this->data,PORTADA_THEME_PATH_TEMPLATE.'admin/'.$value[0].'.php');
			echo $Template->output(false);
?>
						</div>
<?php
		}
?>
					</div>

				</div>

				<div class="to-footer to-clear-fix">

					<div class="to-footer-left">

						<ul class="to-social-list">
							<li><a href="http://themeforest.net/user/QuanticaLabs?ref=quanticalabs" class="to-social-list-envato" title="Envato"></a></li>
							<li><a href="http://www.facebook.com/QuanticaLabs" class="to-social-list-facebook" title="Facebook"></a></li>
							<li><a href="https://twitter.com/quanticalabs" class="to-social-list-twitter" title="Twitter"></a></li>
							<li><a href="http://quanticalabs.tumblr.com/" class="to-social-list-tumblr" title="Tumblr"></a></li>
						</ul>

					</div>

					<div class="to-footer-right">
						<input type="submit" value="<?php esc_attr_e('Save changes','portada'); ?>" name="Submit" id="Submit" class="to-button"/>
					</div>			

				</div>

				<input type="hidden" name="action" id="action" value="theme_admin_option_page_save" />

			</form>
			
		</div>

		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				$('.to').themeOption();
				$('.to').themeOptionElement({init:true});
			});
		</script>