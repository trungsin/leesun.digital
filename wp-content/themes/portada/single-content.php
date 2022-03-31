<?php
		global $post,$portadaParentPost;
		
		the_post();
		
		$Post=new Portada_ThemePost();
		$WidgetArea=new Portada_ThemeWidgetArea();
		
		$widgetAreaData=$WidgetArea->getWidgetAreaByPost($portadaParentPost->post,true,true);
		
		$option=Portada_ThemeOption::getPostMeta($post);
		
		$postClass=array('theme-post','theme-clear-fix');
?>
		<div class="theme-post-single">

			<div <?php post_class(join(' ',$postClass)); ?> id="post-<?php the_ID(); ?>">
<?php
		echo $Post->createPostCategory($post);
				
		echo $Post->createPostTitle($post,1,false);
				
		echo $Post->createPostAuthorDate($post);
				
		echo $Post->createPostDivider($post);
				
		echo $Post->createPostImage($post,'single',$widgetAreaData['location']);
				
		echo $Post->createPostContent($post);
				
		echo $Post->createPostSummary($post);
		
		echo $Post->createPostTag($post);
		
		echo $Post->createPostBar($post);
		
		echo $Post->createPostAuthorInfo($post);
		
		echo $Post->createPostNavigation($post);
		
		echo $Post->createPostRelated($post);
		
		echo $Post->createPostComment();
?>			
			</div>
			
		</div>

