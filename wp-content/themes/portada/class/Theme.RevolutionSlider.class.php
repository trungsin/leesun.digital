<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeRevolutionSlider
{
	/**************************************************************************/
	
	function __construct()
	{
		
	}
	
	/**************************************************************************/
	
	function getAllSlider()
	{
		$Plugin=new Portada_ThemePlugin();
		if(!$Plugin->isActive('RevSliderSlider')) return(array());
		
		$Slider=new RevSlider();
		return($Slider->getAllSliderForAdminMenu());		
	}
	
	/**************************************************************************/
	
	function getSliderDictionary($useNone=true,$useGlobal=true,$useLeftUnchaged=false)
	{
		$slider=$this->getAllSlider();
		
		$data=array();
		
		if($useNone) $data[0]=array(__('[None]','portada'));
		if($useGlobal) $data[-1]=array(__('[Use global settings]','portada'));
		if($useLeftUnchaged) $data[-10]=array(__('[Left unchanged]','portada'));

		if(count($slider))
		{
			foreach($slider as $sliderData)
				$data[$sliderData['alias']]=array($sliderData['title']);
		}
		
		return($data);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/