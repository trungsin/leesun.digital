
		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php esc_html_e('Instagram feed','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Enable or disable Instagram feed.','portada'); ?><br/></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['footer_instagram_enable'],1); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['footer_instagram_enable'],0); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable_0'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable_2'); ?>" value="-1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['footer_instagram_enable'],-1); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable_2'); ?>"><?php esc_html_e('Use global settings','portada'); ?></label>
					</div>
				</li>	
				<li>
					<h5><?php esc_html_e('Logo','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Enable or disable logo.','portada'); ?><br/></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('footer_logo_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_logo_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['footer_logo_enable'],1); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('footer_logo_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('footer_logo_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_logo_enable_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['footer_logo_enable'],0); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('footer_logo_enable_0'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('footer_logo_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_logo_enable_2'); ?>" value="-1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['footer_logo_enable'],-1); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('footer_logo_enable_2'); ?>"><?php esc_html_e('Use global settings','portada'); ?></label>
					</div>
				</li>	
				<li>
					<h5><?php esc_html_e('First menu','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Select first (top) menu.','portada'); ?></span>
					<div class="to-clear-fix">
						<select name="<?php Portada_ThemeHelper::getFormName('footer_menu_1'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_menu_1'); ?>">
<?php
							foreach($this->data['dictionary']['menu'] as $index=>$value)
								echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['footer_menu_1'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>				
				<li>
					<h5><?php esc_html_e('Second menu','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Select second (middle) menu.','portada'); ?></span>
					<div class="to-clear-fix">
						<select name="<?php Portada_ThemeHelper::getFormName('footer_menu_2'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_menu_2'); ?>">
<?php
							foreach($this->data['dictionary']['menu'] as $index=>$value)
								echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['footer_menu_2'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>	
				<li>
					<h5><?php esc_html_e('Third menu','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Select third (bottom) menu.','portada'); ?></span>
					<div class="to-clear-fix">
						<select name="<?php Portada_ThemeHelper::getFormName('footer_menu_3'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_menu_3'); ?>">
<?php
							foreach($this->data['dictionary']['menu'] as $index=>$value)
								echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['footer_menu_3'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>	
				<li>
					<h5><?php esc_html_e('Bottom footer','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Enable or disable bottom footer.','portada'); ?><br/></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('footer_bottom_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_bottom_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['footer_bottom_enable'],1); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('footer_bottom_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('footer_bottom_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_bottom_enable_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['footer_bottom_enable'],0); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('footer_bottom_enable_0'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('footer_bottom_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_bottom_enable_2'); ?>" value="-1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['footer_bottom_enable'],-1); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('footer_bottom_enable_2'); ?>"><?php esc_html_e('Use global settings','portada'); ?></label>
					</div>
				</li>					
				
			</ul>
		</div>
