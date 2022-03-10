<?php 
		echo $this->data['nonce']; 
?>
		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php esc_html_e('Sidebar','portada'); ?></h5>
					<span class="to-legend">
						<?php esc_html_e('Select sidebar and sidebar location.','portada'); ?><br/>
						<?php esc_html_e('You can choose sidebar only for templates named "Page" and "Blog". Other templates don\'t support sidebars.','portada'); ?>
					</span>
					<div class="to-clear-fix">
						<span class="to-legend-field"><?php esc_html_e('Sidebar:','portada'); ?></span>
						<select name="<?php Portada_ThemeHelper::getFormName('widget_area_sidebar'); ?>" id="<?php Portada_ThemeHelper::getFormName('widget_area_sidebar'); ?>">
<?php
							foreach($this->data['dictionary']['widgetArea'] as $index=>$value)
								echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['widget_area_sidebar'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
						</select>
					</div>
					<div class="to-clear-fix">
						<span class="to-legend-field"><?php esc_html_e('Location:','portada'); ?></span>
						<select name="<?php Portada_ThemeHelper::getFormName('widget_area_sidebar_location','portada'); ?>" id="<?php Portada_ThemeHelper::getFormName('widget_area_sidebar_location'); ?>">
<?php
							foreach($this->data['dictionary']['widgetAreaLocation'] as $index=>$value)
								echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['widget_area_sidebar_location'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
			</ul>
		</div>

		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				$('.to').themeOption();
				$('.to').themeOptionElement({init:true});
			});
		</script>