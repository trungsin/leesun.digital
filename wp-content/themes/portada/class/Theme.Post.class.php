<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemePost
{
	/**************************************************************************/
	
	function __construct()
	{
		
	}
	
	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box('meta_box_post_post',__('Post','portada'),array($this,'adminCreateMetaBoxPostPost'),'post','normal','high');
		add_meta_box('meta_box_post_post_type',__('Post Format','portada'),array($this,'adminCreateMetaBoxPostFormat'),'post','normal','high');
		add_meta_box('meta_box_post_element',__('Elements','portada'),array($this,'adminCreateMetaBoxPostElement'),'post','normal','high');
		add_meta_box('meta_box_post_summary',__('Summary','portada'),array($this,'adminCreateMetaBoxPostSummary'),'post','normal','high');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBoxPostPost() 
	{
		global $post;
		
		$data=array();
	
		$data['option']=Portada_ThemeOption::getPostMeta($post);	
		
		$this->setPostMetaDefault($data['option'],'post');
		
		$Template=new Portada_ThemeTemplate($data,PORTADA_THEME_PATH_TEMPLATE.'admin/meta_box_post_post.php');
		echo $Template->output();	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBoxPostFormat()
	{
		global $post;
	
		$Audio=new Portada_ThemeAudio();
		$Video=new Portada_ThemeVideo();
		
		$data=array();
	
		$data['option']=Portada_ThemeOption::getPostMeta($post);	
		
		$data['dictionary']['audio']=$Audio->getAudioSource();
		$data['dictionary']['video']=$Video->getVideoSource();
		
		$this->setPostMetaDefault($data['option'],'post');
		
		$Template=new Portada_ThemeTemplate($data,PORTADA_THEME_PATH_TEMPLATE.'admin/meta_box_post_format.php');
		echo $Template->output();		
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBoxPostElement() 
	{
		global $post;
		
		$data=array();
	
		$data['option']=Portada_ThemeOption::getPostMeta($post);	
		
		$this->setPostMetaDefault($data['option'],'post');
		
		$Template=new Portada_ThemeTemplate($data,PORTADA_THEME_PATH_TEMPLATE.'admin/meta_box_post_element.php');
		echo $Template->output();	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBoxPostSummary() 
	{
		global $post;
		
		$data=array();
	
		$data['option']=Portada_ThemeOption::getPostMeta($post);	
		
		$this->setPostMetaDefault($data['option'],'post');
		
		$Template=new Portada_ThemeTemplate($data,PORTADA_THEME_PATH_TEMPLATE.'admin/meta_box_post_summary.php');
		echo $Template->output();	
	}

	/**************************************************************************/
	
	function createPostCategory($post)
	{
		if(post_password_required($post)) return;
		
		$html=null;
	
		if(Portada_ThemeOption::getGlobalOption($post,'post_category_visible')!=1) return($html);
		
		$Validation=new Portada_ThemeValidation();
		
		$category=get_the_category($post->ID);
		
		if(!count($category)) return($html);

		$i=0;
		foreach($category as $categoryValue)
		{
			if($categoryValue->term_id==1) continue;
			
			$title=$Validation->isEmpty($categoryValue->description) ? sprintf(__('View all posts from category "%s".','portada'),$categoryValue->name) : strip_tags(apply_filters('category_description',$categoryValue->description,$categoryValue));
			
			$html.=
			'
				<li><a href="'.esc_url(get_category_link($categoryValue->term_id)).'" title="'.esc_attr($title).'">'.esc_html($categoryValue->name).'</a></li>
			';
			
			$i++;
		}
		
		if($Validation->isNotEmpty($html))
		{
			$html=
			'
				<div class="theme-post-category theme-clear-fix">
					<ul class="theme-reset-list">
						'.$html.'
					</ul>
				</div>
			';
		}	
		
		return($html);
	}
	
	/**************************************************************************/	

	function createPostTitle($post,$headerImportance=2,$link=true)
	{
		$html=null;
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_title_visible')!=1) return($html);
		
		$titleHtml=$this->getPostTitle($post,false);
		
		if($link)
			$titleHtml='<a href="'.get_the_permalink($post).'" title="'.esc_attr(sprintf(__('View post "%s".','portada'),get_the_title($post->ID))).'">'.$titleHtml.'</a>';
			
		$html.=
		'
			<div class="theme-post-title theme-clear-fix">
				<h'.$headerImportance.'>
					'.$titleHtml.'
				</h'.$headerImportance.'>
			</div>
		';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createPostAuthorDate($post)
	{
		if(post_password_required($post)) return;
		
		$html=null;
		
		if((Portada_ThemeOption::getGlobalOption($post,'post_author_name_visible')!=1) && (Portada_ThemeOption::getGlobalOption($post,'post_date_visible')!=1)) return($html);
				
		if(Portada_ThemeOption::getGlobalOption($post,'post_author_name_visible')==1)
		{
			$html.='<a href="'.esc_url(get_author_posts_url($post->post_author)).'" title="'.esc_attr(sprintf(__('View all posts from author "%s".','portada'),get_the_author_meta('display_name',$post->user_id))).'">'.sprintf(__('<span>By</span> %s','portada'),get_the_author_meta('display_name',$post->user_id)).'</a>';
		}
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_date_visible')==1)
		{
			if(Portada_ThemeOption::getGlobalOption($post,'post_author_name_visible')==1) $html.='&nbsp;/&nbsp;';
			
			$html.='<a href="'.esc_url(get_month_link(get_the_time('Y',$post),get_the_time('m',$post))).'" title="'.esc_attr(sprintf(__('View all posts from "%s %s"','portada'),get_the_time('F',$post),get_the_time('Y',$post))).'">'.esc_html(get_the_date('',$post->ID)).'</a>';	
		}
		
		$html=
		'
			<div class="theme-post-author-date theme-clear-fix">
				'.$html.'
			</div>
		';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createPostDivider($post)
	{
		if(post_password_required($post)) return;
		
		$html=null;
				
		if(Portada_ThemeOption::getGlobalOption($post,'post_divider_visible')!=1) return($html);	
		
		$html.='<div class="theme-post-divider theme-clear-fix"></div>';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createPostImage($post,$position='blog',$sidebar=false)
	{
		if(post_password_required($post)) return;
		
		$html=null;
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_image_visible')!=1) return($html);

		if(!has_post_thumbnail($post)) return($html);
		
		$Page=new Portada_ThemePage();
		$Plugin=new Portada_ThemePlugin();
		$Validation=new Portada_ThemeValidation();		
		
		$postFormat=get_post_format($post->ID);
		$postMeta=Portada_ThemeOption::getPostMeta($post);

		if(!in_array($postFormat,array('audio','video','gallery','image'))) $postFormat='image';
		
		if($position=='single')	
		{	
			switch($postFormat)
			{
				case 'audio':
				
					if($Validation->isEmpty($postMeta['post_format_audio_source']))
						$postFormat='image';
					
				break;
							
				case 'video':
			
					if($Validation->isEmpty($postMeta['post_format_video_source']))
						$postFormat='image';
					
				break;
			}
			
			switch($postFormat)
			{
				case 'audio':
				case 'video':
					
					if(!$Plugin->isActive('PBPageBuilder'))
						$postFormat='image';
					
				break;
			}	

			switch($postFormat)
			{
				case 'audio':
					
					$html=
					'
						<div class="pb-image-type-audio pb-image-type-audio-'.esc_attr($postMeta['post_format_audio_source']).' pb-image-box">
							<a href="#" title="'.esc_attr__('Click to open an audio.','portada').'" class="pb-image">
								'.get_the_post_thumbnail($post->ID,$Page->getImageClass($sidebar)).'
							</a>
							<div data-url="https://w.soundcloud.com/player/?url='.$postMeta['post_format_audio_url'].'&auto_play=true&hide_related=false&show_comments=false&show_user=true&show_reposts=false&visual=true">
								'.do_shortcode('[pb_iframe src="#" width="100%"][/pb_iframe]').'
							</div>
						</div>				
					';		
					
				break;
						
				case 'video':
			
					$html=
					'
						<div class="pb-image-type-video pb-image-type-video-'.esc_attr($postMeta['post_format_video_source']).' pb-image-box">
							<a href="#" title="'.esc_attr__('Click to open a video.','portada').'" class="pb-image">
								'.get_the_post_thumbnail($post->ID,$Page->getImageClass($sidebar)).'
							</a>
							<div>
								'.do_shortcode('[pb_video type="'.$postMeta['post_format_video_source'].'" src="'.$postMeta['post_format_video_url'].'" player_width="100%"][/pb_video]').'
							</div>
						</div>				
					';
					
				break;
			}	
		}
		else
		{
			if(in_array($postFormat,array('audio','video')))
			{
				$html=
				'	
					<div class="pb-image-type-image pb-image-box pb-image-preloader-enable pb-fancybox-disabled">
						<a href="'.get_the_permalink($post).'" title="'.esc_attr(sprintf(__('View post "%s".','portada'),strip_tags(get_the_title($post)))).'" class="pb-image">
							'.get_the_post_thumbnail($post->ID,$Page->getImageClass($sidebar)).'
						</a>
					</div>
				';					
			}
		}
		
		if($postFormat==='gallery')
		{
			if($Validation->isEmpty($postMeta['post_format_gallery_file_id']))
				$postFormat='image';
			if(!$Plugin->isActive('PBPageBuilder'))
				$postFormat='image';			
		}
		
		if($postFormat==='gallery')
		{
			$html=
			'
				<div class="pb-image-type-gallery pb-image-box">
					<div>
						'.do_shortcode('[pb_nivo_slider image="'.$postMeta['post_format_gallery_file_id'].'" image_size="'.$Page->getImageClass($sidebar).'" transition_effect="fade" preloader_enable="1" direction_navigation_enable="0" control_navigation_enable="1" control_navigation_thumbs_enable="0" manual_advance_enable="0" pause_time="6000" url="'.($position=='blog' ? get_the_permalink($post) : null).'"][/pb_nivo_slider]').'
					</div>
				</div>				
			';				
		}
		
		if($postFormat=='image')
		{
			if($position==='blog')
			{
				$html=
				'	
					<div class="pb-image-type-image pb-image-box pb-image-preloader-enable pb-fancybox-disabled">
						<a href="'.get_the_permalink($post).'" title="'.esc_attr(sprintf(__('View post "%s".','portada'),strip_tags(get_the_title($post)))).'" class="pb-image">
							'.get_the_post_thumbnail($post->ID,$Page->getImageClass($sidebar)).'
						</a>
					</div>
				';					
			}
			else
			{
				list($link)=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
				
				$html=
				'	
					<div class="pb-image-type-image pb-image-box pb-image-preloader-enable">
						<a href="'.$link.'" title="'.esc_attr__('Click to open an image.','portada').'" class="pb-image">
							'.get_the_post_thumbnail($post->ID,$Page->getImageClass($sidebar)).'
						</a>
					</div>
				';				
			}
		}
		
		$html=
		'
			<div class="theme-post-image theme-clear-fix">
				'.$html.'
			</div>
		';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createPostExcerpt($post,$dropcap=true)
	{
		$html=null;
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_excerpt_visible')!=1) return($html);
		
		$excerpt=get_the_excerpt($post);
		
		$class=array('theme-post-excerpt','theme-clear-fix');
		
		if(($dropcap) && (!post_password_required($post)))
			array_push($class,'theme-post-excerpt-dropcap');
			
		global $portadaBlogAutomaticExcerptLength2;
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_read_more_button_visible')==1 && $portadaBlogAutomaticExcerptLength2)
			$excerpt.=' <a href="'.get_the_permalink().'">'.__('Read More','portada').'</a>';
	
		$html=
		'
			<div'.Portada_ThemeHelper::createClassAttribute($class).'>
				<p>'.$excerpt.'</p>
			</div>
		';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createPostContent($post)
	{
		$html=null;
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_content_visible')!=1) return($html);		
		
		$content=apply_filters('the_content',do_shortcode(get_the_content($post)));
		
		$attribute=array
		(
			'before'															=>	'',
			'after'																=>	'',
			'next_or_number'													=>	'number',		
			'previouspagelink'													=>	__('Previous','portada'),
			'nextpagelink'														=>	__('Next','portada'),
			'link_before'														=> '<span>',
			'link_after'														=> '</span>',
			'echo'																=>	0
		);
		
		$html=
		'
			<div class="theme-post-content theme-clear-fix">'.$content.'</div>
			<div class="theme-pagination theme-clear-fix">
				'.wp_link_pages($attribute).'
			</div>
		';

		return($html);
	}
	
	/**************************************************************************/
	
	function createPostReadMoreButton($post)
	{
		$html=null;
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_read_more_button_visible')!=1) return($html);	
		
		$html=
		'
			<div class="theme-post-read-more-button theme-clear-fix">
				<a href="'.get_the_permalink($post).'" class="theme-button-1" title="'.esc_attr(sprintf(__('View post "%s".','portada'),strip_tags(get_the_title($post)))).'">'.esc_html__('Read more','portada').'</a>
			</div>
		';
			
		return($html);
	}
	
	/**************************************************************************/
	
	function createPostSummary($post)
	{
		if(post_password_required($post)) return;
		
		$html=null;
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_summary_visible')!=1) return($html);	
		
		$Validation=new Portada_ThemeValidation();
		
		$meta=Portada_ThemeOption::getPostMeta($post);
		
		if(!$Validation->isScore($meta['post_summary_score'])) return($html);
		
		$html=
		'
			<div class="theme-post-summary-score" data-value="'.esc_attr($meta['post_summary_score']/10).'">
				<div></div>
				<b></b>
				<b></b>
			</div>	
			<span>'.esc_html__('Summary','portada').'</span>
		';
		
		if($Validation->isNotEmpty($meta['post_summary_description']))
		{
			$html.=
			'
				<p class="theme-paragraph-small">'.$meta['post_summary_description'].'</p>
				<span>&mdash; '.get_the_author_meta('display_name',$post->user_id).'</span>
			';
		}
		
		$html=
		'
			<div class="theme-post-summary theme-clear-fix">
				'.$html.'
			</div>
		';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createPostTag($post)
	{
		if(post_password_required($post)) return;
		
		$html=null;
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_tag_visible')!=1) return($html);	
		
		$tag=get_the_tags($post->ID);
						
		if(!$tag) return($html); 
		
		foreach($tag as $value)
		{
			$html.=
			'
				<li><a href="'.esc_url(get_tag_link($value->term_id)).'" title="'.esc_attr(sprintf(__('View all posts marked as "%s".','portada'),$value->name)).'">'.esc_html($value->name).'</a></li>
			';
		}
		
		$html=
		'	
			<div class="theme-post-tag theme-clear-fix">
				<ul class="theme-reset-list theme-clear-fix">
					'.$html.'
				</ul>
			</div>
		';
		
		return($html);	
	}
	
	/**************************************************************************/
	
	function createPostBar($post)
	{
		$html=null;
		$Validation=new Portada_ThemeValidation();
		
		if(post_password_required($post)) return($html);
		if((Portada_ThemeOption::getGlobalOption($post,'post_comment_visible')!=1 || $this->getCommentCount($post)===false) && (Portada_ThemeOption::getGlobalOption($post,'post_share_visible')!=1) && (Portada_ThemeOption::getGlobalOption($post,'post_like_visible')!=1)) return($html);
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_comment_visible')==1)
		{
			if($this->getCommentCount($post)!==false)
			{
				$html.=
				'
					<div class="theme-post-bar-comment">
						<span>
							<a href="'.get_the_permalink($post->ID).'#comments">'.sprintf(esc_html__('%d comments','portada'),$this->getCommentCount($post)).'</a>
						</span>
					</div>
				';
			}
		}
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_share_visible')==1)
		{
			$SocialProfile=new Portada_ThemeSocialProfile();
			
			$socialProfileShare=array
			(
				'twitter'		=>	array('address'=>$this->createTwitterShareURL($post),'order'=>1),
				'facebook'		=>	array('address'=>$this->createFacebookShareURL($post),'order'=>2),
				'googleplus'	=>	array('address'=>$this->createGooglePlusShareURL($post),'order'=>3),
				'pinterest'		=>	array('address'=>$this->createPinterestShareURL($post),'order'=>4)
			);

			$htmlSocial=$SocialProfile->createSocialProfile($socialProfileShare);
			
			if($Validation->isNotEmpty($htmlSocial))
			{
				$html.=
				'
					<div class="theme-post-bar-share">
						'.$htmlSocial.'
					</div>
				';
			}
		}
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_like_visible')==1)
		{
			$html.=
			'
				<div class="theme-post-bar-like">
					<span>'.$this->getPostLikeCount($post).'</span>
				</div>
			';
		}		
				
		$html=
		'
			<div class="theme-post-bar theme-clear-fix">
				'.$html.'
			</div>
		';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createPostShare($post)
	{
		if(post_password_required($post)) return;
		
		$html=null;
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_share_visible')!=1) return($html);
		
		$SocialProfile=new Portada_ThemeSocialProfile();
			
		$socialProfileShare=array
		(
			'twitter'		=>	array('address'=>$this->createTwitterShareURL($post),'order'=>1),
			'facebook'		=>	array('address'=>$this->createFacebookShareURL($post),'order'=>2),
			'googleplus'	=>	array('address'=>$this->createGooglePlusShareURL($post),'order'=>3),
			'pinterest'		=>	array('address'=>$this->createPinterestShareURL($post),'order'=>4)
		);
			
		$html.=
		'
			<div class="theme-post-share theme-clear-fix">
				'.$SocialProfile->createSocialProfile($socialProfileShare).'
			</div>
		';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createTwitterShareURL($post)
	{
		$postTile=get_the_title($post->ID);
		$postURL=get_the_permalink($post->ID);
		
		$twitterStatus=mb_substr($postTile,0,139-mb_strlen($postURL)).' '.$postURL;		
	
		return('https://twitter.com/home?status='.urlencode($twitterStatus));
	}
	
	/**************************************************************************/
	
	function createFacebookShareURL($post)
	{
		return('https://www.facebook.com/sharer/sharer.php?u='.esc_url(get_the_permalink($post->ID)));
	}
	
	/**************************************************************************/
	
	function createPinterestShareURL($post)
	{
		if(!has_post_thumbnail($post->ID)) return(null);
		
		return('https://pinterest.com/pin/create/button/?url='.esc_url(get_the_permalink($post->ID)).'&amp;media='.esc_url(wp_get_attachment_url(get_post_thumbnail_id($post->ID))).'&amp;description='.urlencode(strip_tags(Portada_ThemeHelper::getTheExcerpt($post->ID))));
	}
	
	/**************************************************************************/
	
	function createGooglePlusShareURL($post)
	{
		return('https://plus.google.com/share?url='.get_the_permalink($post->ID));
	}
	
	/**************************************************************************/
	
	function createPostAuthorInfo($post)
	{
		$html=null;
				
		if(post_password_required($post)) return($html);;
		if(Portada_ThemeOption::getGlobalOption($post,'post_author_info_visible')!=1) return($html);	
		
		$Validation=new Portada_ThemeValidation();
		
		$htmlDescription=get_the_author_meta('user_description',$post->user_id);
		if($Validation->isEmpty($htmlDescription)) return($html);
		
		$htmlDescription='<p class="theme-paragraph-small">'.$htmlDescription.'</p>';	
		
		$User=new Portada_ThemeUser();
		$SocialProfile=new Portada_ThemeSocialProfile();
		
		$htmlAvatar=get_avatar(get_the_author_meta('ID',$post->user_ID),120,'',get_the_author_meta('display_name'));
		
		$i=0;
		$socialProfileUser=array();
		foreach(array_keys($User->social) as $value)
			$socialProfileUser[$value]=array('address'=>get_the_author_meta($value),'order'=>(++$i));
		
		$html=
		'
			<div class="theme-post-author-info theme-clear-fix">
				'.$htmlAvatar.'
				<span><a href="'.esc_url(get_author_posts_url($post->post_author)).'" title="'.sprintf(esc_attr('View all posts from author "%s".','portada'),get_the_author_meta('display_name',$post->user_id)).'">'.get_the_author_meta('display_name',$post->user_id).'</a></span>
				'.$htmlDescription.'
				'.$SocialProfile->createSocialProfile($socialProfileUser).'
			</div>
		';
	
		return($html);
	}
	
	/**************************************************************************/
	
	function createPostNavigation($post)
	{
		if(post_password_required($post)) return;
		
		$html=null;
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_navigation_visible')!=1) return($html);	
		
		$Validation=new Portada_ThemeValidation();
		
		$prevPost=get_previous_post();
		if(!empty($prevPost)) 
			$html.='<a class="theme-post-navigation-prev" href="'.esc_url(get_permalink($prevPost->ID)).'" title="'.the_title_attribute(array('post'=>$prevPost->ID,'echo'=>false)).'">'.sprintf(esc_html__('Prev post: %s','portada'),get_the_title($prevPost->ID)).'</a>';
		
		$nextPost=get_next_post();
		if(!empty($nextPost)) 
			$html.='<a class="theme-post-navigation-next" href="'.esc_url(get_permalink($nextPost->ID)).'" title="'.the_title_attribute(array('post'=>$nextPost->ID,'echo'=>false)).'">'.sprintf(esc_html__('Next post: %s','portada'),get_the_title($nextPost->ID)).'</a>';		
			
		if($Validation->isNotEmpty($html))
		{
			$html=
			'
				<div class="theme-post-navigation theme-clear-fix">
					'.$html.'
				</div>				
			';
		}	
		
		return($html);		
	}
	
	/**************************************************************************/
	
	function createPostRelated($post)
	{
		$html=null;
		
		if(Portada_ThemeOption::getGlobalOption($post,'post_related_post_visible')!=1) return($html);
		
		if(post_password_required($post)) return($html);
		
		$Plugin=new Portada_ThemePlugin();
		if(!$Plugin->isActive('PBPageBuilder')) return($html);
		
		$Layout=new PBLayout();

		$argument=array
		(
			'post_type'															=>	'post',
			'posts_per_page'													=>	3,
			'post__not_in'														=>	array($post->ID),
			'orderby'															=>	'date',
			'order'																=>	'desc',
			'meta_query'														=>	array(array('key'=>'_thumbnail_id')),
			'tag__in'															=>	wp_get_post_tags($post->ID,array('fields'=>'ids'))
		);

		$query=new WP_Query($argument);

		if(!$query) return($html);
		if(!count($query->posts)) return($html);
		
		$i=0;
		global $post;
		$bPost=$post;

		while($query->have_posts())
		{
			$query->the_post();

			if(!has_post_thumbnail()) continue;

			$class=array
			(
				array
				(
					'pb-layout-'.$Layout->getLayoutColumnCSSClass('33x33x33',$i)
				)
			);
			
			$url=esc_url(get_the_permalink());
			$title=$this->getPostTitle($post,false);
			$titleAttr=esc_attr(sprintf(__('View post "%s".','portada'),get_the_title($post->ID)));
	
			$html.=
			'
				<li'.Portada_ThemeHelper::createClassAttribute($class[0]).'>
					<a href="'.$url.'" title="'.$titleAttr.'" class="theme-post-related-image">
						'.get_the_post_thumbnail(get_the_ID(),'portada-image-750').'
					</a>
					<a href="'.$url.'" title="'.$titleAttr.'" class="theme-post-related-title">
						'.$this->getPostTitle($post,false).'
					</a>
					<span class="theme-post-related-date">
						'.get_the_date('',$post->ID).'
					</span>
				</li>
			';

			$i++;

			/***/
		}

		$post=$bPost;

		$class=array('theme-reset-list','theme-clear-fix','pb-layout-33x33x33');

		$html=
		'
			<div class="theme-post-related theme-clear-fix">
				<h4>'.esc_html__('Related posts','portada').'</h4>
				<ul'.Portada_ThemeHelper::createClassAttribute($class).'>
					'.$html.'
				</ul>
			</div>
		';
		
		return($html);
	}
	
	/**************************************************************************/
	
	function createPostComment()
	{		
		get_template_part('comment');
	}
		
	/**************************************************************************/
	
	function setPostMetaDefault(&$meta)
	{
		Portada_ThemeHelper::setDefaultOption($meta,'post_title','');
		
		Portada_ThemeHelper::setDefaultOption($meta,'post_category_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_title_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_author_name_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_date_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_divider_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_image_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_excerpt_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_content_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_read_more_button_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_summary_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_tag_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_comment_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_share_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_like_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_author_info_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_navigation_visible',-1);
		Portada_ThemeHelper::setDefaultOption($meta,'post_related_post_visible',-1);
		
		Portada_ThemeHelper::setDefaultOption($meta,'post_summary_score','');
		Portada_ThemeHelper::setDefaultOption($meta,'post_summary_description','');
		
		Portada_ThemeHelper::setDefaultOption($meta,'post_format_video_url','');
		Portada_ThemeHelper::setDefaultOption($meta,'post_format_video_source','youtube');
		
		Portada_ThemeHelper::setDefaultOption($meta,'post_format_audio_url','');
		Portada_ThemeHelper::setDefaultOption($meta,'post_format_audio_source','soundcloud');
		
		Portada_ThemeHelper::setDefaultOption($meta,'post_format_gallery_file_id','');
	}
	
	/**************************************************************************/
	
	function getCommentCount($post)
	{
		if(!comments_open($post->ID)) return(false);
		return(get_comments_number($post->ID));
	}
		
	/**************************************************************************/

	function getPostMostComment($argument)
	{
		$parameter=array
		(
			'post_type'							=>	'post',
			'posts_per_page'					=>	(int)$argument['post_count'],
			'meta_query'						=>	array(array('key'=>'_thumbnail_id')),
			'orderby'							=>	'comment_count',
			'order'								=>	'desc'
		);
		
		$query=new WP_Query($parameter);
		return($query);
	}
	
	/**************************************************************************/
	
	function getPostMostLike($argument)
	{
		$parameter=array
		(
			'post_type'							=>	'post',
			'posts_per_page'					=>	(int)$argument['post_count'],
			'meta_key'							=>	PORTADA_THEME_COOKIE_NAME_POST_LIKE_COUNT,
			'meta_query'						=>	array(array('key'=>'_thumbnail_id')),
			'orderby'							=>	'meta_value_num',
			'order'								=>	'desc'
		);
		
		$query=new WP_Query($parameter);
		return($query);		
	}
	
	/**************************************************************************/
	
	function getPostRecent($argument)
	{
		$parameter=array
		(
			'post_type'							=>	'post',
			'posts_per_page'					=>	(int)$argument['post_count'],
			'meta_query'						=>	array(array('key'=>'_thumbnail_id')),
			'orderby'							=>	'date',
			'order'								=>	'desc'
		);

		$query=new WP_Query($parameter);
		return($query);
	}	
	
	/**************************************************************************/
	
	static function getPostTitle($postID=false,$echo=true)
	{
		if(!$postID) $postID=get_the_ID();
		
		$Validation=new Portada_ThemeValidation();
		
		$meta=Portada_ThemeOption::getPostMeta($postID);
		
		$title=$Validation->isEmpty($meta['post_title']) ? get_the_title($postID) : $meta['post_title'];
				
		if($echo) echo $title;
		else return($title);
	}
	
	/**************************************************************************/
	
	function isPostLike($postId,&$cookiePostId=array())
	{
		$cookiePostId=array();
		if(array_key_exists(PORTADA_THEME_COOKIE_NAME_POST_LIKE_COUNT,$_COOKIE))
			$cookiePostId=array_map('intval',preg_split('/\./',$_COOKIE[PORTADA_THEME_COOKIE_NAME_POST_LIKE_COUNT]));
		
		return(in_array($postId,$cookiePostId));
	}
	
	/**************************************************************************/
	
	function setPostLikeCount()
	{
		$cookiePostId=array();
		$postId=(int)$_GET['post_id'];
		$response=array('post_id'=>$postId);
				
		if(get_post_status($postId)===false)
		{
			echo json_encode($response);
			die();
		}
				
		if($this->isPostLike($postId,$cookiePostId))
		{
			echo json_encode($response);
			die();			
		}
		
		array_push($cookiePostId,$postId);
		
		$url=parse_url(get_site_url());

		setcookie(PORTADA_THEME_COOKIE_NAME_POST_LIKE_COUNT,join('.',$cookiePostId),0,$url['path']);
		$_COOKIE[PORTADA_THEME_COOKIE_NAME_POST_LIKE_COUNT]=join('.',$cookiePostId);
		
		$likeCount=$this->getPostLikeCount($postId,false)+1;
		
		update_post_meta($postId,PORTADA_THEME_COOKIE_NAME_POST_LIKE_COUNT,$likeCount);
		
		$response['html']=$this->getPostLikeCount($postId);
		
		echo json_encode($response);
		die();			
	}
	
	/**************************************************************************/
	
	function getPostLikeCount($post,$createHtml=true)
	{
		$html=null;
		
		$postId=is_object($post) ? $post->ID : (int)$post;
		
		$likeCount=(int)get_post_meta($postId,PORTADA_THEME_COOKIE_NAME_POST_LIKE_COUNT,true);
		
		if($createHtml)
		{
			if($likeCount==0) $label=__('0 likes','portada');
			else if($likeCount==1) $label=__('1 like','portada');
			else $label=sprintf(__('%s likes','portada'),$likeCount);
				
			$class=array('theme-value-post-id-'.$postId);
			
			if($this->isPostLike($postId))
				array_push($class,'theme-state-disabled');
				
			$html='<a href="#" class="'.join(' ',$class).'" title="'.esc_attr($label).'">'.esc_html($label).'</a>';
		}
		else $html=$likeCount;
		
		return($html);	
	}

	/**************************************************************************/

	function getPost()
	{
		$data=new stdClass();

		global $post,$wp_query;
		
		$categoryId=(int)get_query_var('cat');

		if((function_exists('is_woocommerce')) && (is_woocommerce()))
		{
			$data->post=get_post(get_option('woocommerce_shop_page_id'));
			
			if(is_product())
			{
				$data->post=$post;
			}
			elseif((is_product_category()) || (is_product_tag()))
			{
				$data->post->post_title=esc_html($wp_query->queried_object->name);	
			}
			elseif(is_search())
			{
				$data->post->post_title=sprintf(__('Search products for phrase <i>%s</i>','portada'),esc_html(get_query_var('s')));
			}
			
			setup_postdata($data->post);
		}
		else
		{
			if(is_tag()) 
			{
				$post=get_post(Portada_ThemeOption::getOption('blog_category_post_id'));
				if(is_null($post)) return(false);

				$tagQuery=get_query_var('tag');
				$tagData=get_tags(array('slug'=>$tagQuery));

				$data->post=$post;
				$data->post->post_title=$tagData[0]->name;
			}
			elseif(is_author())
			{
				$author=get_userdata(get_query_var('author'));
				$post=get_post(Portada_ThemeOption::getOption('blog_author_post_id'));
				if(is_null($post)) return(false);

				$data->post=$post;
				$data->post->post_title=get_the_author_meta('display_name',$author->data->ID);			
			}
			elseif(is_category($categoryId)) 
			{			
				$category=get_category($categoryId);
				$post=get_post(Portada_ThemeOption::getOption('blog_category_post_id'));	
				if(is_null($post)) return(false);

				$data->post=$post;
				$data->post->post_title=esc_html($category->name);	
			}
			elseif(is_day()) 
			{
				$post=get_post(Portada_ThemeOption::getOption('blog_archive_post_id'));
				if(is_null($post)) return(false);

				$data->post=$post;
				$data->post->post_title=get_the_date();
			}
			elseif(is_archive()) 
			{
				$post=get_post(Portada_ThemeOption::getOption('blog_archive_post_id'));
				if(is_null($post)) return(false);

				$data->post=$post;
				$data->post->post_title=single_month_title(' ',false);
			}
			elseif(is_search())
			{
				$post=get_post(Portada_ThemeOption::getOption('blog_search_post_id'));
				if(is_null($post)) return(false);

				$data->post=$post;
				$data->post->post_title=sprintf(__('Search Result for "%s"','portada'),get_query_var('s'));
			}
			elseif(is_404())
			{
				$post=get_post(Portada_ThemeOption::getOption('page_404_page_id'));
				if(is_null($post)) return(false);

				$data->post=$post;
				$data->post->post_title=$data->post->post_title;
			}
			else return(false);
		}

		return($data);
	}
	
	/**************************************************************************/
	
	function getTitle($htmlTag=true,$echo=true)
	{
		global $portadaParentPost;
		
		$Validation=new Portada_ThemeValidation();
		
		$html=null;
		
		if(is_single())
		{
			$html=get_the_title($portadaParentPost->post->ID);
		}
		else
		{	
			if((int)Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'page_header_visible')!==1) return;
		
			if(is_object($portadaParentPost->post))
			{
				$html=$portadaParentPost->post->post_title;

				if(($Validation->isNotEmpty($html)) && ($htmlTag))
				{
					$html=
					'
						<div class="theme-content-header">
							<h1>'.$html.'</h1>
						</div>					
					';
				}
			}
		}
		
		if($echo) echo $html;
		return($html);
	}
    
    /**************************************************************************/
    
    function filterBodyClass($class)
    {
        if((function_exists('has_blocks')) && (has_blocks()))
            array_push($class,'page-gutenberg-block');
         
        return($class);
    }
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/