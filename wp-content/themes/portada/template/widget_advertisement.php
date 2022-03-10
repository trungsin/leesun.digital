<?php
		$id='widget_theme_widget_advertisement_'.Portada_ThemeHelper::createId();
			
		echo $this->data['html']['start']; 
?>
		<div class="widget_theme_widget_advertisement theme-clear-fix" id="<?php echo esc_attr($id); ?>">
			<?php echo $this->data['instance']['content']; ?>	
		</div>
<?php
		echo $this->data['html']['stop']; 
		