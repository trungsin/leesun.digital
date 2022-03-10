<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeBackground
{
	/**************************************************************************/

	function __construct() 
	{ 
		$this->backgroundRepeat=array
		(
			'no-repeat'															=>	array(__('Image will not be repeated','portada')),
			'repeat-y'															=>	array(__('Image will be repeated only vertically','portada')),
			'repeat-x'															=>	array(__('Image will be repeated only horizontally','portada')),
			'repeat'															=>	array(__('Image will be repeated both vertically and horizontally','portada')),
			'inherit'															=>	array(__('Property should be inherited from the parent element','portada'))
		);
		
		$this->backgroundSize=array
		(
			'auto'																=>	array(__('Auto','portada')),
			'length'															=>	array(__('Length','portada')),
			'percentage'														=>	array(__('Percentage','portada')),
			'cover'																=>	array(__('Cover','portada')),
			'contain'															=>	array(__('Contain','portada')),
			'initial'															=>	array(__('Initial','portada')),
			'inherit'															=>	array(__('Inherit','portada'))
		);	
	}

	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/