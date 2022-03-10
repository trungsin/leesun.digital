<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeNotice
{
	/**************************************************************************/

	function __construct()
	{
		$this->error=array();
	}

	/**************************************************************************/

	function addError($fieldName,$errorMessage)
	{
		$this->error[]=array($fieldName,$errorMessage);
	}

	/**************************************************************************/

	function getError()
	{
		return($this->error);
	}

	/**************************************************************************/

	function isError()
	{
		return(count($this->error));
	}
	
	/**************************************************************************/
	
	function createHTML($templatePath)
	{
		$data=array();
		
		$data['type']=$this->isError() ? 'error' : 'success';
		
		if($this->isError())
		{
			$data['title']=esc_html__('Error','portada');
			$data['subtitle']=esc_html__('Changes can not be saved.','portada');				
		}
		else
		{
			$data['title']=esc_html__('Success','portada');
			$data['subtitle']=esc_html__('All changes have been saved.','portada');			
		}
		
		$ThemeTemplate=new Portada_ThemeTemplate($data,$templatePath);
		return($ThemeTemplate->output());
	}

	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/