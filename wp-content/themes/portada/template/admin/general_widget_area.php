		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Widget area in sidebar','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Select widget area and widget area location.','portada'); ?></span>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php esc_html_e('Widget area:','portada'); ?></span>
					<select name="<?php Portada_ThemeHelper::getFormName('widget_area_sidebar'); ?>" id="<?php Portada_ThemeHelper::getFormName('widget_area_sidebar'); ?>">
<?php
						foreach($this->data['dictionary']['widgetArea-1'] as $index=>$value)
							echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['widget_area_sidebar'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php esc_html_e('Location:','portada'); ?></span>
					<select name="<?php Portada_ThemeHelper::getFormName('widget_area_sidebar_location'); ?>" id="<?php Portada_ThemeHelper::getFormName('widget_area_sidebar_location'); ?>">
<?php
						foreach($this->data['dictionary']['widgetAreaLocation-1'] as $index=>$value)
							echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['widget_area_sidebar_location'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
		</ul>