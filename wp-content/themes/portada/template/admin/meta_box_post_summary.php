		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php esc_html_e('Score','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Valid number (allowed are numbers with single decimal place) from scope 0-10.','portada'); ?></span>
					<div>
						<input type="text" name="<?php Portada_ThemeHelper::getFormName('post_summary_score'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_summary_score'); ?>" value="<?php echo esc_attr($this->data['option']['post_summary_score']); ?>"/>
					</div>
				</li>	
				<li>
					<h5><?php esc_html_e('Summary','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Summary.','portada'); ?></span>
					<div>
						<textarea rows="1" cols="1" name="<?php Portada_ThemeHelper::getFormName('post_summary_description'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_summary_description'); ?>"><?php echo esc_attr($this->data['option']['post_summary_description']); ?></textarea>
					</div>
				</li>	
			</ul>
		</div>