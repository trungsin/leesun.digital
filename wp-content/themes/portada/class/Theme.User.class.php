<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeUser
{
	/**************************************************************************/
	
	function __construct() 
	{
		$this->social=array
		(
			'twitter'															=>	'Twitter',
			'facebook'															=>	'Facebook',
			'googleplus'														=>	'Google+',
			'pinterest'															=>	'Pinterest',
			'instagram'															=>	'Instagram'
		);
	}
	
	/**************************************************************************/
	
	function createUserContactMethod($contactMethod)
	{
		foreach($this->social as $socialIndex=>$socialData)
		{
			if(!isset($contactMethod[$socialIndex]))
				$contactMethod[$socialIndex]=$socialData;
		}
 
		return($contactMethod);
	}

	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/