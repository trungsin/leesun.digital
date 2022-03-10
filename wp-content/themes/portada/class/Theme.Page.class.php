<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemePage
{
	/**************************************************************************/

	function __construct()
	{

	}
	
	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box('meta_box_page_element',__('Elements','portada'),array($this,'adminCreateMetaBoxPageElement'),'page','normal','high');
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBoxPageElement() 
	{
		global $post;
		
		$data=array();
	
		$data['option']=Portada_ThemeOption::getPostMeta($post);	
		
		$this->setPostMetaDefault($data['option'],'post');
		
		$Template=new Portada_ThemeTemplate($data,PORTADA_THEME_PATH_TEMPLATE.'admin/meta_box_page_element.php');
		echo $Template->output();	
	}
	
	/**************************************************************************/
	
	function getImageClass($sidebar)
	{
		if($sidebar==0) return('portada-image-1080');
		else return('portada-image-750');
	}
	
	/**************************************************************************/
	
	function getCurrentTemplate()
	{
		global $portadaParentPost;
		
		if(!is_object($portadaParentPost->post)) return(null);
		
		return(get_post_meta($portadaParentPost->post->ID,'_wp_page_template',true));
	}
	
	/**************************************************************************/
	
	function getCurrentTemplateCSSClass()
	{
		$template=$this->getCurrentTemplate();
		
		$class=array();
		
		$class[]='page-template-'.preg_replace(array('/ /','/\./'),array('-','-'),$template);
		$class[]='page-template-'.preg_replace(array('/ /','/\.php/'),array('-',''),$template);
		
		return($class);
	}
	
	/**************************************************************************/
	
	function getPageDictionary($useNone=true,$useGlobal=true,$useLeftUnchaged=false)
	{
		$data=array();
		
		$page=get_pages(array('hierarchical'=>0));
		
		if($useNone) $data[0]=array(__('[None]','portada'));
		if($useGlobal) $data[-1]=array(__('[Use global settings]','portada'));
		if($useLeftUnchaged) $data[-10]=array(__('[Left unchanged]','portada'));

		foreach($page as $pageData)
			$data[$pageData->ID]=array($pageData->post_title);
		
		return($data);
	}
	
	/**************************************************************************/
	
	function setPostMetaDefault(&$meta)
	{
		Portada_ThemeHelper::setDefaultOption($meta,'page_header_visible','-1');
	}
		
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/