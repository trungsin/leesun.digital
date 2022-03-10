<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeOption
{
	/**************************************************************************/
	
	static function createOption($refresh=false)
	{
		$GlobalData=new Portada_ThemeGlobalData();
		return($GlobalData->setGlobalData(PORTADA_THEME_OPTION_GLOBAL_ARRAY_KEY,array('Portada_ThemeOption','createOptionObject'),$refresh));				
	}
	
	/**************************************************************************/
	
	static function createOptionObject()
	{	
		return((array)get_option(PORTADA_THEME_OPTION_PREFIX));
	}
	
	/**************************************************************************/
	
	static function refreshOption()
	{
		return(self::createOption(true));
	}
	
	/**************************************************************************/
	
	static function getOption($name)
	{
		global $portada_globalData;

		self::createOption();

		if(!array_key_exists($name,$portada_globalData[PORTADA_THEME_OPTION_GLOBAL_ARRAY_KEY])) return(null);
		return($portada_globalData[PORTADA_THEME_OPTION_GLOBAL_ARRAY_KEY][$name]);		
	}
	
	/**************************************************************************/
	
	static function getGlobalOption($post,$name,$postfix=null)
	{
		self::createOption();

		if(!is_null($postfix)) $postfix='_'.$postfix;
		
		$value=0;
		if(is_object($post)) 
		{
			$option=self::getPostMeta($post);
			
			if(array_key_exists($name,(array)$option)) $value=$option[$name];
			if($value==-1) $value=self::getOption($name.$postfix);
		}
		else $value=self::getOption($name.$postfix);
		
		return($value);
	}
	
	/**************************************************************************/
	
	static function getOptionObject()
	{
		global $portada_globalData;
		return($portada_globalData[PORTADA_THEME_OPTION_GLOBAL_ARRAY_KEY]);
	}
	
	/**************************************************************************/
	
	static function updateOption($option)
	{
		$nOption=array();
		foreach($option as $index=>$value) $nOption[$index]=$value;
		
		$oOption=self::refreshOption();

		update_option(PORTADA_THEME_OPTION_PREFIX,array_merge($oOption,$nOption));
		
		self::refreshOption();
	}
	
	/**************************************************************************/
	
	static function resetOption()
	{
		update_option(PORTADA_THEME_OPTION_PREFIX,array());
		self::refreshOption();		
	}
	
	/**************************************************************************/
	
	static function getPostMeta($post)
	{
		$id=is_object($post) ? $post->ID : (int)$post;
		
		$meta=get_post_meta($id,PORTADA_THEME_OPTION_PREFIX,false);
		
		if(!is_array($meta)) $meta=array();
		if(isset($meta[0])) $meta=$meta[0];
		
		$postType=get_post_type($id);
		
		if(in_array($postType,array('portada_widget_area'))) return($meta);
		
		$Theme=new Portada_Theme();
		$Post=new Portada_ThemePost();
		$Page=new Portada_ThemePage();
		
		$Theme->setPostMetaDefault($meta,'all');

		switch($postType)
		{
			case 'post':
				$Post->setPostMetaDefault($meta);
			break;
			case 'page':
				$Page->setPostMetaDefault($meta);
			break;
		}
		
		return($meta);
	}
	
	/**************************************************************************/
	
	static function getOptionPostfix()
	{
		$WooCommerce=new Portada_ThemeWooCommerce();
		return($WooCommerce->isWooCommercePost() ? 'woocommerce' : null);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/