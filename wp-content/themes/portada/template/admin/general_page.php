		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('404 error page','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Get settings for 404 page from selected page.','portada'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php Portada_ThemeHelper::getFormName('page_404_page_id'); ?>" id="<?php Portada_ThemeHelper::getFormName('page_404_page_id'); ?>">
<?php
						foreach($this->data['dictionary']['page'] as $index=>$value)
							echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['page_404_page_id'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Show page header','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show page header.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('page_header_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('page_header_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['page_header_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('page_header_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('page_header_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('page_header_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['page_header_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('page_header_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>	
		</ul>