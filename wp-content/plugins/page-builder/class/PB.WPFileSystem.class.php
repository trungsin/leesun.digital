<?php

/******************************************************************************/
/******************************************************************************/

class PBWPFileSystem
{
	/**************************************************************************/
	
	function __construct() 
	{
		global $wp_filesystem;
		
		if(empty($wp_filesystem))
		{
			require_once(ABSPATH.'/wp-admin/includes/file.php');
			WP_Filesystem();
		}
	}
	
	/**************************************************************************/
	
	function put_contents($path,$content)
	{
		return(file_put_contents($path,$content));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/