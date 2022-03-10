<?php
		if((comments_open()) && (!post_password_required()))
		{
			$Comment=new Portada_ThemeComment();
?>
			<div id="comments" class="theme-clear-fix" data-cpage="<?php echo (int)$Comment->page; ?>">
				<?php comments_template(); ?>
			</div>
<?php
			$commenter=wp_get_current_commenter();
			$req=get_option('require_name_email');
			$aria_req=($req ? ' aria-required=\'true\'' : '');

			$field=array();

			$field['author']=
			'
				<p class="theme-comment-form-field-33">
					<label for="author" class="theme-infield-label">'.esc_html__('Name','portada').($req ? ' <span class="required">*</span>' : '').'</label>
					<input id="author" name="author" type="text" value="'.esc_attr($commenter['comment_author']).'" size="30"'.$aria_req.'/>
				</p>
			';

			$field['email']=
			'
				<p class="theme-comment-form-field-33">
					<label for="email" class="theme-infield-label">'.esc_html__('Email','portada').($req ? ' <span class="required">*</span>' : '').'</label>
					<input id="email" name="email" type="text" value="'.esc_attr($commenter['comment_author_email']).'" size="30"'.$aria_req.'/>
				</p>
			';

			$field['url']=
			'
				<p class="theme-comment-form-field-33">
					<label for="url" class="theme-infield-label">'.esc_html__('Website','portada').'</label>
					<input id="url" name="url" type="text" value="'.esc_attr($commenter['comment_author_url']).'" size="30"/>
				</p>
			';

			$commentField=
			'
				<p class="theme-clear-fix theme-comment-form-field-100">
					<label for="comment" class="theme-infield-label">'.esc_html__('Comment','portada').' <span class="required">*</span></label>
					<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
				</p>	
			';

			$argument=array
			(
				'id_form'				=>	'comment-form',
				'title_reply'			=>	__('Leave a Reply','portada'),
				'cancel_reply_link'		=>	__('Cancel Reply','portada'),
				'comment_field'			=>	$commentField,
				'fields'				=>	apply_filters('comment_form_default_fields',$field),
				'label_submit'			=>	__('Leave a Reply','portada')
			);

			comment_form($argument); 
		}