<?php

/******************************************************************************/
/******************************************************************************/

TIData::set('value','dummy_content_file',array
(
	array('path'=>get_template_directory().'/config/1/dummy_content/content.xml'))
);

TIData::set('value','widget_settings_file',array
(
	array('path'=>get_template_directory().'/config/1/dummy_content/widget_data.json')
));

TIData::set('plugin_revslider','path',array
(
	get_template_directory().'/config/1/dummy_content/revslider/main.zip',
	get_template_directory().'/config/1/dummy_content/revslider/sidebar.zip'	
));

TIData::set('path',PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX.'_header_logo_src',array('title'=>'logo_header','postType'=>'attachment'));
TIData::set('path',PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX.'_footer_logo_src',array('title'=>'logo_footer','postType'=>'attachment'));
TIData::set('path',PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX.'_maintenance_logo_src',array('title'=>'logo_header','postType'=>'attachment'));

/******************************************************************************/
/******************************************************************************/