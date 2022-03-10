		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Custom javascript code','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Don\'t enter <script> tags. These tags will be added automatically.','portada'); ?></span>
				<div>
					<textarea id="<?php Portada_ThemeHelper::getFormName('custom_js_code'); ?>" name="<?php Portada_ThemeHelper::getFormName('custom_js_code'); ?>" rows="1" cols="1"><?php echo esc_html($this->data['option']['custom_js_code']); ?></textarea>
				</div>						
			</li>
		</ul>