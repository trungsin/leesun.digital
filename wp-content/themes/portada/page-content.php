<?php
		global $more;

		if(have_posts())
		{
			while(have_posts())
			{
				the_post();
?>
				<div class="theme-page-content theme-clear-fix">
<?php				
				echo apply_filters('the_content',do_shortcode(get_the_content()));
?>
				</div>
				<div class="theme-pagination theme-clear-fix">
<?php 
				wp_link_pages(array
				(
					'before'				=>	'',
					'after'					=>	'',
					'next_or_number'		=>	'number',		
					'previouspagelink'		=>	__('Previous','portada'),
					'nextpagelink'			=>	__('Next','portada'),
					'link_before'			=> '<span>',
					'link_after'			=> '</span>'
				)); 
?>
				</div>
<?php
				get_template_part('comment');
			}
		}