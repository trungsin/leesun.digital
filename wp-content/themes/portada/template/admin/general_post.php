		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Show post category','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post category.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_category_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_category_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_category_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_category_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_category_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_category_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_category_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_category_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Show post title','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post title.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_title_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_title_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_title_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_title_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_title_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_title_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_title_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_title_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Show post author name','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post author name.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_author_name_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_author_name_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_author_name_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_author_name_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_author_name_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_author_name_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_author_name_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_author_name_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Show post date','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post date.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_date_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_date_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_date_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_date_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_date_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_date_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_date_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_date_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Show post divider','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post divider.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_divider_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_divider_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_divider_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_divider_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_divider_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_divider_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_divider_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_divider_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Show post image','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post image.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_image_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_image_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_image_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_image_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_image_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_image_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_image_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_image_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Show post excerpt','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post excerpt.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_excerpt_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_excerpt_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_excerpt_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_excerpt_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_excerpt_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_excerpt_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_excerpt_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_excerpt_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Show post content','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post content.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_content_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_content_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_content_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_content_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_content_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_content_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_content_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_content_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>		
			<li>
				<h5><?php esc_html_e('Show post "Read more" button','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post "Read more" button.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_read_more_button_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_read_more_button_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_read_more_button_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_read_more_button_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_read_more_button_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_read_more_button_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_read_more_button_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_read_more_button_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>					
			<li>
				<h5><?php esc_html_e('Show post summary','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post summary.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_summary_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_summary_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_summary_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_summary_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_summary_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_summary_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_summary_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_summary_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Show post tags','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post tags.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_tag_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_tag_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_tag_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_tag_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_tag_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_tag_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_tag_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_tag_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>				
			<li>
				<h5><?php esc_html_e('Show post comments count','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post comments count.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_comment_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_comment_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_comment_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_comment_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_comment_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_comment_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_comment_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_comment_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Show post share social icons','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post share social icons.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_share_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_share_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_share_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_share_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_share_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_share_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_share_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_share_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Show post like button','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post like button.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_like_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_like_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_like_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_like_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_like_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_like_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_like_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_like_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Show post author section','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post author section.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_author_info_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_author_info_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_author_info_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_author_info_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_author_info_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_author_info_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_author_info_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_author_info_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Show post navigation','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post navigation.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_navigation_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_navigation_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_navigation_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_navigation_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_navigation_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_navigation_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_navigation_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_navigation_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Show post related posts','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Show post related posts.','portada'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_related_post_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_related_post_visible_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_related_post_visible'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_related_post_visible_1'); ?>"><?php esc_html_e('Yes','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('post_related_post_visible'); ?>" id="<?php Portada_ThemeHelper::getFormName('post_related_post_visible_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['post_related_post_visible'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('post_related_post_visible_0'); ?>"><?php esc_html_e('No','portada'); ?></label>
				</div>
			</li>	
		</ul>
			