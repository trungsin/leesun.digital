		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Maintenance mode','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable maintenance mode.','portada'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('maintenance_mode_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('maintenance_mode_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['maintenance_mode_enable'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('maintenance_mode_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('maintenance_mode_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('maintenance_mode_enable_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['maintenance_mode_enable'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('maintenance_mode_enable_0'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Logo','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enter URL of image','portada'); ?><br/></span>
				<div class="to-clear-fix">
					<input type="text" name="<?php Portada_ThemeHelper::getFormName('maintenance_logo_src'); ?>" id="<?php Portada_ThemeHelper::getFormName('maintenance_logo_src'); ?>" class="to-float-left" value="<?php echo esc_attr($this->data['option']['maintenance_logo_src']); ?>" />
					<input type="button" name="<?php Portada_ThemeHelper::getFormName('maintenance_logo_src_browse'); ?>" id="<?php Portada_ThemeHelper::getFormName('maintenance_logo_src_browse'); ?>" class="to-button-browse to-button" value="<?php esc_attr_e('Browse','portada'); ?>"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Splash page','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Get settings for splash page from selected page.','portada'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php Portada_ThemeHelper::getFormName('maintenance_mode_post_id'); ?>" id="<?php Portada_ThemeHelper::getFormName('maintenance_mode_post_id'); ?>">
<?php
		foreach($this->data['dictionary']['page'] as $index=>$value)
			echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['maintenance_mode_post_id'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Disable maintenance mode for users','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Allow to visit page (in normal mode) selected users:','portada'); ?></span>
				<div class="to-checkbox-button">
<?php
		$i=0;
		foreach($this->data['dictionary']['user'] as $value)
		{
			$i++;
?>
					<input type="checkbox" name="<?php Portada_ThemeHelper::getFormName('maintenance_mode_user_id[]'); ?>" id="<?php Portada_ThemeHelper::getFormName('maintenance_mode_user_id_'.$i); ?>" value="<?php echo esc_attr($value->data->ID); ?>" <?php Portada_ThemeHelper::checkedIf($this->data['option']['maintenance_mode_user_id'],$value->data->ID); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('maintenance_mode_user_id_'.$i); ?>"><?php echo esc_html($value->data->display_name ); ?></label>
<?php
		}
?>
				</div>
			</li>				
			<li>
				<h5><?php esc_html_e('Disable maintenance mode for IP addresses','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Allow to visit page (in normal mode) visitors from selected (separated by line break) IP addresses:','portada'); ?></span>
				<div>
					<textarea id="<?php Portada_ThemeHelper::getFormName('maintenance_mode_ip_address'); ?>" name="<?php Portada_ThemeHelper::getFormName('maintenance_mode_ip_address'); ?>" rows="1" cols="1"><?php echo esc_html($this->data['option']['maintenance_mode_ip_address']); ?></textarea>
				</div>						
			</li>
		</ul>