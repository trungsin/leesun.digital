		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Open graph','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable open graph meta tags.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('open_graph_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('open_graph_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['open_graph_enable'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('open_graph_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('open_graph_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('open_graph_enable_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['open_graph_enable'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('open_graph_enable_0'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
				</div>
			</li>	
		</ul>