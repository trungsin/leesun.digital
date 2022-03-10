		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php esc_html_e('Video','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Details for "Video" post format:','portada'); ?></span>
					<div>
						<span class="to-legend-field"><?php esc_html_e('URL of video.','portada'); ?></span>
						<input type="text" name="<?php Portada_ThemeHelper::getFormName('post_format_video_url'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_format_video_url'); ?>" value="<?php echo esc_attr($this->data['option']['post_format_video_url']); ?>"/>
					</div>
					<div>
						<span class="to-legend-field"><?php esc_html_e('Source of the video:','portada'); ?></span>
						<div class="to-radio-button">
<?php
		$i=0;
		foreach($this->data['dictionary']['video'] as $index=>$value)
		{
			$i++;
?>
							<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_format_video_source'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_format_video_source_'.$i); ?>" value="<?php echo esc_attr($index); ?>" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_format_video_source'],$index); ?>/>
							<label for="<?php Portada_ThemeHelper::getFormName('post_format_video_source_'.$i); ?>"><?php echo esc_html($value[0]); ?></label>
<?php
		}
?>
						</div>	
					</div>
				</li>	
				<li>
					<h5><?php esc_html_e('Audio','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Details for "Audio" post format:','portada'); ?></span>
					<div>
						<span class="to-legend-field"><?php esc_html_e('URL of audio.','portada'); ?></span>
						<input type="text" name="<?php Portada_ThemeHelper::getFormName('post_format_audio_url'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_format_audio_url'); ?>" value="<?php echo esc_attr($this->data['option']['post_format_audio_url']); ?>"/>
					</div>
					<div>
						<span class="to-legend-field"><?php esc_html_e('Source of the audio:','portada'); ?></span>
						<div class="to-radio-button">
<?php
		$i=0;
		foreach($this->data['dictionary']['audio'] as $index=>$value)
		{
			$i++;
?>
							<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_format_audio_source'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_format_audio_source_'.$i); ?>" value="<?php echo esc_attr($index); ?>" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_format_audio_source'],$index); ?>/>
							<label for="<?php Portada_ThemeHelper::getFormName('post_format_audio_source_'.$i); ?>"><?php echo esc_html($value[0]); ?></label>
<?php
		}
?>
						</div>	
					</div>
				</li>
				<li>
					<h5><?php esc_html_e('Gallery','portada'); ?></h5>
					<span class="to-legend"><?php esc_html_e('Details for "Gallery" post format:','portada'); ?></span>
					<div>					
						<span class="to-legend-field"><?php esc_html_e('Click on below button to start build gallery.','portada'); ?></span>
						<input type="button" name="<?php Portada_ThemeHelper::getFormName('post_format_gallery_button'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_format_gallery_button'); ?>" class="to-button to-button-gallery to-float-left to-margin-0" value="<?php esc_attr_e('Build gallery','portada'); ?>"/>
						<input type="hidden" name="<?php Portada_ThemeHelper::getFormName('post_format_gallery_file_id'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_format_gallery_file_id'); ?>" value="<?php echo esc_attr($this->data['option']['post_format_gallery_file_id']); ?>"/>
					</div>
				</li>	
			</ul>
		</div>