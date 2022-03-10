<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeWidgetAdvertisement extends Portada_ThemeWidget 
{
	
	/**************************************************************************/
	
    function __construct() 
	{
		parent::__construct('portada_widget_advertisement',sprintf(__('(%s theme) Advertisement','portada'),PORTADA_THEME_NAME),array('description'=>__('Displays advertisement.','portada')),array());
    }
	
	/**************************************************************************/
	
    function widget($argument,$instance) 
	{
		$argument['_data']['file']='widget_advertisement.php';
		parent::widget($argument,$instance);
    }
	
	/**************************************************************************/
	
    function update($new_instance,$old_instance)
	{
		$instance=array();
		$instance['content']=$new_instance['content'];
		return($instance);
    }
	
	/**************************************************************************/
	
	function form($instance) 
	{	
		$instance['_data']['file']='widget_advertisement.php';
		$instance['_data']['field']=array('content');
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