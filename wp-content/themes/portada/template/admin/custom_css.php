		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Default CSS styles','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Default CSS styles.','portada'); ?></span>
				<div>
					<textarea id="<?php Portada_ThemeHelper::getFormName('custom_css_responsive_1'); ?>" name="<?php Portada_ThemeHelper::getFormName('custom_css_responsive_1'); ?>" rows="1" cols="1" class="css-editor"><?php echo esc_html($this->data['option']['custom_css_responsive_1']); ?></textarea>
				</div>						
			</li>
<?php
			foreach($this->data['dictionary']['responsiveMedia'] as $index=>$value)
			{
				if($index==1) continue;
?>
			<li>
				<h5><?php echo sprintf(esc_html__('CSS styles for page width between %s px and %s px.','portada'),$value['min-width'],$value['max-width']); ?></h5>
				<span class="to-legend"><?php echo sprintf(esc_html__('CSS styles for page width between %s px and %s px.','portada'),$value['min-width'],$value['max-width']); ?></span>
				<div>
					<textarea id="<?php Portada_ThemeHelper::getFormName('custom_css_responsive_'.$index); ?>" name="<?php Portada_ThemeHelper::getFormName('custom_css_responsive_'.$index); ?>" rows="1" cols="1" class="css-editor"><?php echo esc_html($this->data['option']['custom_css_responsive_'.$index]); ?></textarea>
				</div>						
			</li>			
<?php				
			}
?>
		</ul>