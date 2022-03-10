<?php
		$Post=new Portada_ThemePost();
		
		$query=$Post->getPostMostLike($this->data['instance']);
		
		if($query)
		{
			$id='widget_theme_widget_post_most_like_'.Portada_ThemeHelper::createId();
			
			echo $this->data['html']['start']; 
?>
			<div class="widget_theme_widget_post_most_like theme-clear-fix" id="<?php echo esc_attr($id); ?>">
				
				<ul class="theme-reset-list">
<?php
			global $post;
			$bPost=$post;

			while($query->have_posts())
			{
				$query->the_post();
				
				$likeCount=(int)get_post_meta(get_the_ID(),PORTADA_THEME_COOKIE_NAME_POST_LIKE_COUNT,true);
				$likeLabel=$likeCount==1 ? sprintf(esc_html__('1 Like','portada'),$likeCount) : sprintf(esc_html__('%s Likes','portada'),$likeCount);
?>
					<li class="theme-clear-fix">
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(sprintf(__('View post "%s".','portada'),get_the_title())); ?>">
							<?php the_post_thumbnail('thumbnail'); ?>
						</a>
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(sprintf(__('View post "%s".','portada'),get_the_title())); ?>">
							<?php the_title(); ?>
						</a>
						<span><?php echo $likeLabel; ?></span>
					</li>
<?php
			}
		
			$post=$bPost;
?>
				</ul>
				
			</div>
<?php
			echo $this->data['html']['stop']; 
		}