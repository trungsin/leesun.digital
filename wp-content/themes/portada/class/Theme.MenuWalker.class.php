<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeMenuWalker extends Walker_Nav_Menu 
{
	/**************************************************************************/
	
	function start_lvl(&$output,$depth=0,$args=array()) 
	{
		$output.=
		'
			<ul>
		';
	}

	/**************************************************************************/
	
	function end_lvl(&$output,$depth=0,$args=array()) 
	{
		$output.=
		'
			</ul>
		';			
	}

	/**************************************************************************/
	
	function start_el(&$output,$object,$depth=0,$args=array(),$current_object_id=0) 
	{	
		$Validation=new Portada_ThemeValidation();
		
		$linkClass=array();
		if($Validation->isNotEmpty($object->target))
			array_push($linkClass,'theme-window-target-blank');
		
		$output.=
		'
			<li class="'.esc_attr(join(' ',(array)$object->classes)).'">
				<a href="'.esc_url($object->url).'"'.Portada_ThemeHelper::createClassAttribute($linkClass).'>'.esc_html($object->title).'</a>
		';
	}

	/**************************************************************************/
	
	function end_el(&$output,$object,$depth=0,$args=array())
	{
		$output.=
		'
			</li>
		';			
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/