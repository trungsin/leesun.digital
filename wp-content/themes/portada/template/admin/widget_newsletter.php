		<p>
			<label for="<?php echo esc_attr($this->data['option']['title']['id']); ?>"><?php esc_html_e('Title','portada'); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr($this->data['option']['title']['id']); ?>" name="<?php echo esc_attr($this->data['option']['title']['name']); ?>" type="text" value="<?php echo esc_attr($this->data['option']['title']['value']); ?>" />
		</p>