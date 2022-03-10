<?php
		global $post,$portadaParentPost,$portadaBlogAutomaticExcerptLength2;

		$Theme=new Portada_Theme();
		
		$Blog=new Portada_ThemeBlog();
		$Page=new Portada_ThemePage();
		$Post=new Portada_ThemePost();
		$Validation=new Portada_ThemeValidation();
		$WidgetArea=new Portada_ThemeWidgetArea();
		
		$widgetAreaData=$WidgetArea->getWidgetAreaByPost($portadaParentPost->post,true,true);
	
		$i=0;
		$offset=-1;
		$query=array();
		$queryCount=array(0,0);

		$postNotIn=array();
		
		if((!is_paged()) && (in_array($Page->getCurrentTemplate(),array('blog-grid-leading-post.php','blog-list-leading-post.php'))))
		{			
			$offset=1;
	
			$query[0]=$Blog->getPost(1);
			$queryCount[0]=count($query[0]->posts);
			
			if($queryCount[0]===1)
			{
				$query[0]->the_post();
				$postNotIn[]=get_the_ID();
				$query[0]->rewind_posts();
			}
		}
		
		if((is_paged()) && (in_array($Page->getCurrentTemplate(),array('blog-grid-leading-post.php','blog-list-leading-post.php'))))
		{
			$offset=(Portada_ThemeHelper::getPageNumber()-1)*(int)get_option('posts_per_page')+1;
		}
		
		$query[1]=$Blog->getPost(-1,$offset);
		$queryCount[1]=count($query[1]->posts);
			
		if(($queryCount[0]) || ($queryCount[1]))
		{
?>
		<div class="theme-blog theme-clear-fix">
			
			<ul class="theme-reset-list theme-clear-fix">
<?php
			if($queryCount[0])
			{
				while($query[0]->have_posts())
				{
					$i++;
					$query[0]->the_post();
				
					$portadaBlogAutomaticExcerptLength2=false;
?>
				<li id="post-<?php the_ID(); ?>" <?php post_class('theme-post theme-clear-fix theme-post-large'); ?>>
<?php
				echo $Post->createPostCategory($post);
				
				echo $Post->createPostTitle($post,2);
				
				echo $Post->createPostAuthorDate($post);
				
				echo $Post->createPostDivider($post);
				
				echo $Post->createPostImage($post,'blog',$widgetAreaData['location']);
				
				echo $Post->createPostExcerpt($post);
				
				echo $Post->createPostReadMoreButton($post);
				
				echo $Post->createPostBar($post);	
?>
				</li>
<?php
				}
			}
		
			if($queryCount[1])
			{
				while($query[1]->have_posts())
				{
					$i++;
					$query[1]->the_post();
				
					$postClass=array('theme-post','theme-clear-fix');
				
					$postSize=($Page->getCurrentTemplate()=='blog.php' ? 'large' : 'small');
					
					array_push($postClass,'theme-post-'.$postSize);
				
					$portadaBlogAutomaticExcerptLength2=true;
?>
				<li id="post-<?php the_ID(); ?>" <?php post_class(join(' ',$postClass)); ?>>	
<?php
					if($postSize=='large')
					{
						$portadaBlogAutomaticExcerptLength2=false;

						echo $Post->createPostCategory($post);

						echo $Post->createPostTitle($post,2);

						echo $Post->createPostAuthorDate($post);

						echo $Post->createPostDivider($post);

						echo $Post->createPostImage($post,'blog',$widgetAreaData['location']);

						echo $Post->createPostExcerpt($post);

								echo $Post->createPostTag($post);


						echo $Post->createPostReadMoreButton($post);

						echo $Post->createPostBar($post);					
					}
					else
					{
						echo $Post->createPostImage($post,'blog',$widgetAreaData['location']);

						echo $Post->createPostCategory($post);

						echo $Post->createPostTitle($post,2);	

						echo $Post->createPostAuthorDate($post);

						echo $Post->createPostExcerpt($post,false);

						echo $Post->createPostShare($post);	
					}
?>
				</li>
<?php	
				}
			}
?>
			</ul>
<?php 
		echo $Blog->createPagination($query[1]);
?>
		</div>
<?php
		}
		else
		{
			if(is_search())
			{
?>
		<p class="aligncenter"><?php esc_html_e('Sorry, no posts where found. Try searching for something else.','portada'); ?></p>
<?php				
			}
		}