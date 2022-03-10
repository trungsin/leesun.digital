		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Top bar social icons','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable social icons in top bar.','portada'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_top_social_icon_enable'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_top_social_icon_enable'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable_0'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
				</div>			
			</li>			
			<li>
				<h5><?php esc_html_e('Top bar search','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable search field in top bar.','portada'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_top_bar_search_enable'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_top_bar_search_enable'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable_0'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
				</div>			
			</li>				
			<li>
				<h5><?php esc_html_e('Logo','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enter URL of image','portada'); ?><br/></span>
				<div class="to-clear-fix">
					<input type="text" name="<?php Portada_ThemeHelper::getFormName('header_logo_src'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_logo_src'); ?>" class="to-float-left" value="<?php echo esc_attr($this->data['option']['header_logo_src']); ?>" />
					<input type="button" name="<?php Portada_ThemeHelper::getFormName('header_logo_src_browse'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_logo_src_browse'); ?>" class="to-button-browse to-button" value="<?php esc_attr_e('Browse','portada'); ?>"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Revolution Slider','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Select slider.','portada'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php Portada_ThemeHelper::getFormName('header_revolution_slider_id'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_revolution_slider_id'); ?>">
<?php
						foreach($this->data['dictionary']['revolutionSlider'] as $index=>$value)
							echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['header_revolution_slider_id'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Menu','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Select header menu.','portada'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php Portada_ThemeHelper::getFormName('header_menu_id'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_menu_id'); ?>">
<?php
						foreach($this->data['dictionary']['menu-1'] as $index=>$value)
							echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['header_menu_id'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Responsive menu','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable responsive menu when screen width (in px) is less than selected.','portada'); ?></span>
				<div class="to-radio-button">
<?php
		$i=0;
		foreach($this->data['dictionary']['responsive'] as $index=>$value)
		{
			$i++;
?>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_menu_responsive_mode'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_menu_responsive_mode_'.$i); ?>" value="<?php echo esc_attr($index); ?>" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_menu_responsive_mode'],$index); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('header_menu_responsive_mode_'.$i); ?>"><?php echo esc_html($value[0]); ?></label>
<?php
		}
?>
				</div>			
			</li>	
			<li>
				<h5><?php esc_html_e('Sticky menu','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable sticky menu.','portada'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_menu_sticky_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_menu_sticky_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_menu_sticky_enable'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('header_menu_sticky_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_menu_sticky_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_menu_sticky_enable_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_menu_sticky_enable'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('header_menu_sticky_enable_0'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
				</div>			
			</li>
			<li>
				<h5><?php esc_html_e('Menu transition','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable animation in menu.','portada'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_menu_animation_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_menu_animation_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_menu_animation_enable'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('header_menu_animation_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_menu_animation_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_menu_animation_enable_2'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_menu_animation_enable'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('header_menu_animation_enable_2'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
				</div>			
			</li>	
			<li>
				<h5><?php esc_html_e('Menu opening speed','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Speed of the opening animation in miliseconds','portada'); ?><br/></span>
				<div class="to-clear-fix">
					<input type="text" name="<?php Portada_ThemeHelper::getFormName('header_menu_animation_speed_open'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_menu_animation_speed_open'); ?>" value="<?php echo esc_attr($this->data['option']['header_menu_animation_speed_open']); ?>" maxlength="5"/>
				</div>
			</li>			
			<li>
				<h5><?php esc_html_e('Menu closing speed','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Speed of the closing animation in miliseconds','portada'); ?><br/></span>
				<div class="to-clear-fix">
					<input type="text" name="<?php Portada_ThemeHelper::getFormName('header_menu_animation_speed_close'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_menu_animation_speed_close'); ?>" value="<?php echo esc_attr($this->data['option']['header_menu_animation_speed_close']); ?>" maxlength="5"/>
				</div>
			</li>					
			<li>
				<h5><?php esc_html_e('Menu delay','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('The delay in milliseconds that the mouse can remain outside a submenu without it closing.','portada'); ?><br/></span>
				<div class="to-clear-fix">
					<input type="text" name="<?php Portada_ThemeHelper::getFormName('header_menu_animation_delay'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_menu_animation_delay'); ?>" value="<?php echo esc_attr($this->data['option']['header_menu_animation_delay']); ?>" maxlength="5"/>
				</div>
			</li>			
		</ul>