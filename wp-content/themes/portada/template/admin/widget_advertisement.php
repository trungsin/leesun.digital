		<p>
			<label for="<?php echo esc_attr($this->data['option']['content']['id']); ?>"><?php esc_html_e('Content','portada'); ?>:</label>
			<textarea rows="16" cols="20" class="widefat" id="<?php echo esc_attr($this->data['option']['content']['id']); ?>" name="<?php echo esc_attr($this->data['option']['content']['name']); ?>"><?php echo esc_html($this->data['option']['content']['value']); ?></textarea>
		</p>