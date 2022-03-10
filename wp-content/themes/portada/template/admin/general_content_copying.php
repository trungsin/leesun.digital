		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Right click','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable right click.','portada'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('right_click_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('right_click_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['right_click_enable'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('right_click_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('right_click_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('right_click_enable_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['right_click_enable'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('right_click_enable_0'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Text selection','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable text selection.','portada'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('copy_selection_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('copy_selection_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['copy_selection_enable'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('copy_selection_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('copy_selection_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('copy_selection_enable_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['copy_selection_enable'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('copy_selection_enable_0'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
				</div>
			</li>
		</ul>