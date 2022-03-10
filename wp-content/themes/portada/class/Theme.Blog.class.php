<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeBlog
{
	/**************************************************************************/
	
	function __construct()
	{
		$this->sortPostBlogField=array
		(
			'post_id'		=>	array(__('Post ID','portada')),
			'post_date'		=>	array(__('Post date','portada')),
			'title'			=>	array(__('Post title','portada'))
		);

		$this->sortDirection=array
		(
			'asc'			=>	array(__('Ascending','portada')),
			'desc'			=>	array(__('Descending','portada'))
		);		
	}
	
	/**************************************************************************/	
	
	function automaticExcerptLength()
	{
		global $post,$portadaBlogAutomaticExcerptLength2;
		
		$length=55;
		
		switch($post->post_type)
		{
			case 'post':
				
				if($portadaBlogAutomaticExcerptLength2)
					$length=Portada_ThemeOption::getOption('blog_automatic_excerpt_length_2');
				else $length=Portada_ThemeOption::getOption('blog_automatic_excerpt_length_1');
				
			break;
		}
		
		return($length);
	}
	
	/**************************************************************************/
	
	function filterExcerptMore()
	{

	}
	
	/**************************************************************************/
	
	function getPost($postPerPage=-1,$offset=-1)
	{
		$Page=new Portada_ThemePage();
		$Validation=new Portada_ThemeValidation();
		
		$argument=array();
		
		$s=get_query_var('s');
		$tag=get_query_var('tag');
		$day=(int)get_query_var('day');
		$year=(int)get_query_var('year');
		$month=(int)get_query_var('monthnum');
		$categoryId=(int)get_query_var('cat');
		$authorId=(int)get_query_var('author');
		
		if($Validation->isNotEmpty($s))
			$argument['s']=$s;
		if($Validation->isNotEmpty($tag))
			$argument['tag']=$tag;
		if($categoryId>0)
			$argument['cat']=(int)$categoryId;
		if($authorId>0)
			$argument['author']=(int)$authorId;
		if($year>0)
			$argument['year']=$year;
		if($month>0)
			$argument['monthnum']=$month;
		if($day>0)
			$argument['day']=$day;
			
		if($offset!=-1)
			$argument['offset']=$offset;
			
		if(in_array($Page->getCurrentTemplate(),array('blog-grid-leading-post.php','blog-list-leading-post.php')))
			$argument['ignore_sticky_posts']=true;
		
		$default=array
		(
			'post_type'			=>	'post',
			'post_status'		=>	'publish',
			'posts_per_page'	=>	($postPerPage==-1 ? (int)get_option('posts_per_page') : $postPerPage),
			'paged'				=>	(int)Portada_ThemeHelper::getPageNumber(),
			'orderby'			=>	Portada_ThemeOption::getOption('blog_sort_field'),
			'order'				=>	Portada_ThemeOption::getOption('blog_sort_direction')
		);
		
		$query=new WP_Query(array_merge($argument,$default));
		return($query);
	}
	
	/**************************************************************************/
	
	function createPagination($query)
	{
		global $wp_rewrite;  
		
		$total=$query->max_num_pages;

		$Page=new Portada_ThemePage();
		
		if(in_array($Page->getCurrentTemplate(),array('blog-grid-leading-post.php','blog-list-leading-post.php')))
		{
			$total=ceil(($query->found_posts-((int)get_option('posts_per_page')+1))/get_option('posts_per_page'))+1;
			if($total<=0) $total=1; 
		}

		$current=max(1,Portada_ThemeHelper::getPageNumber()); 
		
		$Validation=new Portada_ThemeValidation();
		
		$pagination=array
		(
			'base'			=>	add_query_arg('paged','%#%'),
			'format'		=>	'',
			'current'		=>	$current,  
			'total'			=>	$total,  
			'next_text'		=>	__('Older posts','portada'),
			'prev_text'		=>	__('Newer posts','portada')
		);

		if($wp_rewrite->using_permalinks())
			$pagination['base']=user_trailingslashit(trailingslashit(remove_query_arg('s',get_pagenum_link(1))).'page/%#%/','paged');

		if(is_search()) $pagination['add_args']=array('s'=>urlencode(get_query_var('s')));

		$html=paginate_links($pagination);
		
		if($Validation->isNotEmpty($html))
		{
			$html=
			'
				<div class="theme-pagination">
					'.$html.'
				</div>
			';
		}
		
		return($html);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/