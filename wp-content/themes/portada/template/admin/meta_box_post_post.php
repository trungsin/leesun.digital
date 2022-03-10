		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php esc_html_e('Title','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Additional title of the post. It should be the same title like in header, but HTML tags are allowed.','portada'); ?></span>
					<div>
						<input type="text" name="<?php Portada_ThemeHelper::getFormName('post_title'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_title'); ?>" value="<?php echo esc_attr($this->data['option']['post_title']); ?>"/>
					</div>
				</li>	
			</ul>
		</div>