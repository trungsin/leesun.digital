<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeWidgetArea
{
	/**************************************************************************/

	function __construct()
	{
		$this->widgetAreaData=array
		(
			0																	=>	array(__('[None]','portada'),'theme-page-sidebar-disable'),
			1																	=>	array(__('Left sidebar','portada'),'theme-page-sidebar-enable theme-page-sidebar-left'),
			2																	=>	array(__('Right sidebar','portada'),'theme-page-sidebar-enable theme-page-sidebar-right')
		);		
	}
	
	/**************************************************************************/
	
	function register()
	{
		if(!function_exists('register_sidebar')) return;
			
		register_sidebar(array
		(
			'id'																=>	'portada_blog',
			'name'																=>	__('Blog','portada'),
			'description'														=>	__('Built-in sidebar designed for blog pages.','portada'),
			'before_widget'														=>	'<div id="%1$s" class="%2$s theme-clear-fix theme-widget">',
			'after_widget'														=>	'</div>',
			'before_title'														=>	'<h6 class="theme-widget-header">',
			'after_title'														=>	'</h6>'			
		));
		
		if(!class_exists('WAWidgetArea'))
		{
			$argument=array
			(
				'post_type'														=>	'wa_widget_area',
				'posts_per_page'												=>	-1,
				'orderby'														=>	'title',
				'order'															=>	'asc'
			);

			$query=new WP_Query($argument);
			if($query===false) return;
			
			foreach($query->posts as $value)
				register_sidebar(array('id'=>'wa_'.$value->ID,'name'=>$value->post_title));
		}
	}
	
	/**************************************************************************/

	function getWidgetAreaByPost($post,$sidebar=true,$widgetArea=true)
	{
		$data=array('id'=>0,'location'=>0);
		
		if(!$widgetArea) return($data);
		if(!is_object($post)) return($data);
		if($sidebar)
		{
			$id=Portada_ThemeOption::getGlobalOption($post,'widget_area_sidebar',Portada_ThemeOption::getOptionPostfix());
			$location=Portada_ThemeOption::getGlobalOption($post,'widget_area_sidebar_location',Portada_ThemeOption::getOptionPostfix());
		}
		else
		{
			$id=Portada_ThemeOption::getGlobalOption($post,'widget_area_footer');
			$location=1;
		}
		
		if(strcmp($id,'0')==0) return($data);
		if(strcmp($location,'0')==0) return($data);

		return(array('id'=>$id,'location'=>$location));
	}
	
	/**************************************************************************/
	
	function getWidgetAreaCSSClass($data)
	{
		if(isset($this->widgetAreaData[$data['location']]))
			return($this->widgetAreaData[$data['location']][1]);
		else return($this->widgetAreaData[0][1]);
	}
	
	/**************************************************************************/
	
	function getWidgetAreaDictionary($useNone=true,$useGlobal=true,$useLeftUnchanged=false)
	{
		global $wp_registered_sidebars;

		$data=array();
		$temp=array();
		
		if($useNone) $data[0]=array(__('[None]','portada'));
		if($useGlobal) $data[-1]=array(__('[Use global settings]','portada'));
		if($useLeftUnchanged) $data[-10]=array(__('[Left unchanged]','portada'));
		
		foreach($wp_registered_sidebars as $value)
			$temp[$value['id']]=$value['name'];
		
		asort($temp);
		
		foreach($temp as $index=>$value)
			$data[$index]=array($value);
		
		return($data);
	}
	
	/**************************************************************************/
	
	function getWidgetAreaLocationDictionary($useNone=true,$useGlobal=true,$useLeftUnchanged=false)
	{
		$data=array();
		
		if($useNone) $data[0]=array(__('[None]','portada'));
		if($useGlobal) $data[-1]=array(__('[Use global settings]','portada'));
		if($useLeftUnchanged) $data[-10]=array(__('[Left unchanged]','portada'));
		
		foreach($this->widgetAreaData as $index=>$value)
		{
			if($index==0) continue;
			$data[$index]=array($value[0]);
		}
		
		return($data);
	}
	
	/**************************************************************************/

	function create($widgetArea)
	{
		if(!function_exists('dynamic_sidebar')) return;
		if(is_active_sidebar($widgetArea['id'])) 
			dynamic_sidebar($widgetArea['id']);
	}
	
	/**************************************************************************/
	
	function setWidgetAreaLayout($widgetAreaId)
	{
		$Plugin=new Portada_ThemePlugin();
		$Layout=new Portada_ThemeLayout();
		
		if($Plugin->isActive('WAWidgetArea'))
		{
			$postId=0;
			
			$data=explode('_',$widgetAreaId);
			if(isset($data[1])) $postId=(int)$data[1];
	
			$meta=get_post_meta($postId,PLUGIN_WIDGET_AREA_CONTEXT,false);
			if(isset($meta[0])) $meta=$meta[0];		
			
			WAHelper::removeUIndex($meta,'layout');

			$this->widgetNumber=0;
			$this->widgetAreaLayout=$meta['layout'];
		}
		else $this->widgetAreaLayout='100';
		
		add_filter('dynamic_sidebar_params',array($this,'setWidgetLayout'),10);
		
		return($Layout->getLayoutCSSClass($this->widgetAreaLayout));
	}
	
	/**************************************************************************/
	
	function unsetWidgetAreaLayout()
	{
		remove_filter('dynamic_sidebar_params',array($this,'setWidgetLayout'));
	}
	
	/**************************************************************************/
	
	function setWidgetLayout($parameter)
	{
		$Layout=new Portada_ThemeLayout();
		
		$parameter[0]['before_widget']=preg_replace('/theme-widget/','theme-widget '.$Layout->getLayoutColumnCSSClass($this->widgetAreaLayout,$this->widgetNumber),$parameter[0]['before_widget']);
		
		$this->widgetNumber++;

		return($parameter);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/