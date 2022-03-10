<?php 
		/* Template Name: Maintenance */

		get_header(); 

		$Validation=new Portada_ThemeValidation();
		
		the_post();
?>
		<div>
<?php

		if($Validation->isNotEmpty(Portada_ThemeOption::getOption('maintenance_logo_src')))
		{
?>
		<a href="<?php echo esc_url(get_home_url()); ?>" title="<?php bloginfo('name'); ?>">
			<img src="<?php echo esc_url(Portada_ThemeOption::getOption('maintenance_logo_src')); ?>" alt="<?php bloginfo('name'); ?>"/>
		</a>
<?php			
		}
		
		echo apply_filters('the_content',do_shortcode(get_the_content()));
?>			
		</div>
<?php
		get_footer(); 