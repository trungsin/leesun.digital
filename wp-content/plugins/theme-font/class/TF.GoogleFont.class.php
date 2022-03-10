<?php

/******************************************************************************/
/******************************************************************************/

class TFGoogleFont
{
	/**************************************************************************/
	
	function __construct()
	{
		
	}
	
	/**************************************************************************/
	
	function unpack()
	{
		if(($content=file_get_contents(PLUGIN_THEME_FONT_FONT_PATH))===false) return(false);
		
		$data=array();
		
		$font=json_decode($content);
		
		foreach((array)$font->items as $value)
			$data[$value->family]=array('variant'=>$value->variants,'subset'=>$value->subsets);	
		
		return($data);
	}
	
	/**************************************************************************/
	
	function getFontByName()
	{
		$query=$_GET['query'];
		
		$data=array();
		
		if(($dictionary=$this->unpack())===false)
		{
			echo json_encode($data);
			exit;			
		}
		
		foreach($dictionary as $index=>$value)
		{
			if(preg_match('/^'.preg_quote($query,'/').'/i',$index,$result))
			{
				$data[]=array('label'=>$index,'value'=>$index,'variant'=>json_encode($value['variant']));
				if(count($data)==10) break;
			}
		}
		
		echo json_encode($data);
		exit;	
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/