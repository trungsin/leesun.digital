<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeWidgetPostRecent extends Portada_ThemeWidget 
{
	
	/**************************************************************************/
	
    function __construct() 
	{
		parent::__construct('portada_widget_post_recent',sprintf(__('(%s theme) Recent Posts','portada'),PORTADA_THEME_NAME),array('description'=>__('Displays latest posts.','portada')),array());
    }
	
	/**************************************************************************/
	
    function widget($argument,$instance) 
	{
		$argument['_data']['file']='widget_post_recent.php';
		parent::widget($argument,$instance);
    }
	
	/**************************************************************************/
	
    function update($new_instance,$old_instance)
	{
		$instance=array();
		$instance['title']=$new_instance['title'];
		$instance['post_count']=(int)$new_instance['post_count'];
		return($instance);
    }
	
	/**************************************************************************/
	
	function form($instance) 
	{	
		$instance['_data']['file']='widget_post_recent.php';
		$instance['_data']['field']=array('title','post_count');
		parent::form($instance);
	}
	
	/**************************************************************************/
	
	function register($class=null)
	{
		parent::register(is_null($class) ? get_class() : $class);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/