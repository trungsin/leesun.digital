		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php esc_html_e('Show page header','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Show page header.','portada'); ?><br/></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('page_header_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('page_header_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['page_header_visible'],1); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('page_header_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('page_header_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('page_header_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['page_header_visible'],0); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('page_header_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
						<input type="radio" name="<?php Portada_ThemeHelper::getFormName('page_header_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('page_header_visible_2'); ?>" value="-1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['page_header_visible'],-1); ?>/>
						<label for="<?php Portada_ThemeHelper::getFormName('page_header_visible_2'); ?>"><?php esc_html_e('Use global settings','portada'); ?></label>
					</div>
				</li>	
			</ul>
		</div>
			