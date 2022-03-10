
		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php esc_html_e('Top bar social icons','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Enable or disable social icons in top bar.','portada'); ?><br/></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_top_social_icon_enable'],1); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_top_social_icon_enable'],0); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable_0'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable_2'); ?>" value="-1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_top_social_icon_enable'],-1); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('header_top_social_icon_enable_2'); ?>"><?php esc_html_e('Use global settings','portada'); ?></label>
					</div>
				</li>	
				<li>
					<h5><?php esc_html_e('Top bar search','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Enable or disable search field in top bar.','portada'); ?><br/></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_top_bar_search_enable'],1); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_top_bar_search_enable'],0); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable_0'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable_2'); ?>" value="-1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_top_bar_search_enable'],-1); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('header_top_bar_search_enable_2'); ?>"><?php esc_html_e('Use global settings','portada'); ?></label>
					</div>
				</li>					
				<li>
					<h5><?php esc_html_e('Logo','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Enable or disable logo.','portada'); ?><br/></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_logo_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_logo_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_logo_enable'],1); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('header_logo_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_logo_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_logo_enable_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_logo_enable'],0); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('header_logo_enable_0'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('header_logo_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_logo_enable_2'); ?>" value="-1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['header_logo_enable'],-1); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('header_logo_enable_2'); ?>"><?php esc_html_e('Use global settings','portada'); ?></label>
					</div>
				</li>					
				<li>
					<h5><?php esc_html_e('Menu','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Select header menu.','portada'); ?></span>
					<div class="to-clear-fix">
						<select name="<?php Portada_ThemeHelper::getFormName('header_menu_id'); ?>" id="<?php Portada_ThemeHelper::getFormName('header_menu_id'); ?>">
<?php
							foreach($this->data['dictionary']['menu'] as $index=>$value)
								echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['header_menu_id'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
						</select>
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
			</ul>
		</div>