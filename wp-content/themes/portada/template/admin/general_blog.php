		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Blog category page','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Get settings for category/tag page from selected page.','portada'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php Portada_ThemeHelper::getFormName('blog_category_post_id'); ?>" id="<?php Portada_ThemeHelper::getFormName('blog_category_post_id'); ?>">
<?php
						foreach($this->data['dictionary']['page'] as $index=>$value)
							echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['blog_category_post_id'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Blog archive page','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Get settings for archive page from selected page.','portada'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php Portada_ThemeHelper::getFormName('blog_archive_post_id'); ?>" id="<?php Portada_ThemeHelper::getFormName('blog_archive_post_id'); ?>">
<?php
						foreach($this->data['dictionary']['page'] as $index=>$value)
							echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['blog_archive_post_id'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Blog search page','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Get settings for search page from selected page.','portada'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php Portada_ThemeHelper::getFormName('blog_search_post_id'); ?>" id="<?php Portada_ThemeHelper::getFormName('blog_search_post_id'); ?>">
<?php
						foreach($this->data['dictionary']['page'] as $index=>$value)
							echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['blog_search_post_id'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Blog author page','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Get settings for author page from selected page.','portada'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php Portada_ThemeHelper::getFormName('blog_author_post_id'); ?>" id="<?php Portada_ThemeHelper::getFormName('blog_author_post_id'); ?>">
<?php
						foreach($this->data['dictionary']['page'] as $index=>$value)
							echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['blog_author_post_id'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Post sorting','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Set post sorting in blog pages.','portada'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php Portada_ThemeHelper::getFormName('blog_sort_field'); ?>" id="<?php Portada_ThemeHelper::getFormName('blog_sort_field'); ?>">
<?php
						foreach($this->data['dictionary']['sortPostBlogField'] as $index=>$value)
							echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['blog_sort_field'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
				<div class="to-clear-fix">
					<select name="<?php Portada_ThemeHelper::getFormName('blog_sort_direction'); ?>" id="<?php Portada_ThemeHelper::getFormName('blog_sort_direction'); ?>">
<?php
						foreach($this->data['dictionary']['sortDirection'] as $index=>$value)
							echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['blog_sort_direction'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Automatic excerpt length for "large" posts','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Automatic excerpt length for "large" posts.','portada'); ?></span>
				<div>
					<input type="text" name="<?php Portada_ThemeHelper::getFormName('blog_automatic_excerpt_length_1'); ?>" id="<?php Portada_ThemeHelper::getFormName('blog_automatic_excerpt_length_1'); ?>" value="<?php echo esc_attr($this->data['option']['blog_automatic_excerpt_length_1']); ?>" maxlength="3"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Automatic excerpt length for "small" posts','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Automatic excerpt length for "small" posts.','portada'); ?></span>
				<div>
					<input type="text" name="<?php Portada_ThemeHelper::getFormName('blog_automatic_excerpt_length_2'); ?>" id="<?php Portada_ThemeHelper::getFormName('blog_automatic_excerpt_length_2'); ?>" value="<?php echo esc_attr($this->data['option']['blog_automatic_excerpt_length_2']); ?>" maxlength="3"/>
				</div>
			</li>
		</ul>