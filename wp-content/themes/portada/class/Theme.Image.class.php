<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeImage
{
	/**************************************************************************/
	
	function __construct()
	{
		$this->image=array
		(
			'portada-image-1080'		=>	array(1080,null,__('Full width','portada'),1,true),	
			'portada-image-750'			=>	array(750,null,__('Full width with sidebar','portada'),1,true)
		);
	}
	
	/**************************************************************************/
	
	function register()
	{
		foreach($this->image as $index=>$data)
			add_image_size($index,$data[0],$data[1],$data[3]);
	}
	
	/**************************************************************************/
	
	function addImageSupport($size)
	{
		$addsize=array();
		foreach($this->image as $index=>$data)
			$addsize[$index]=$data[2];
		
		return(array_merge($size,$addsize));
	}
	
	/**************************************************************************/
	
	function getImageDimension($id)
	{
		return(array($this->image[$id][0],$this->image[$id][1]));
	}
	
	/**************************************************************************/
	
	function itemExist($id)
	{
		return((bool)$this->image[$id]);
	}
	
	/**************************************************************************/
	
	function getImageNameByColumnCount($columnCount)
	{
		foreach($this->image as $index=>$value)
		{
			if($value[4]==$columnCount) return($index);
		}
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/