<?php

/******************************************************************************/
/******************************************************************************/

TFInclude::includeFile(get_template_directory().'/class/Theme.GlobalData.class.php');
TFInclude::includeFile(get_template_directory().'/class/Theme.ThemeOption.class.php');
TFInclude::includeFile(get_template_directory().'/class/Theme.ResponsiveMode.class.php');

$ResponsiveMode=new Portada_ThemeResponsiveMode();

define('PLUGIN_THEME_FONT_SKIN_OPTION_NAME','pt_skin');

$path='/multisite/'.get_current_blog_id().'/style/';

TFData::set('theme_path_multisite_style',get_template_directory().$path);
TFData::set('theme_url_multisite_style',get_template_directory_uri().$path);

TFData::set('responsive_mode',$ResponsiveMode->responsiveMode);
TFData::set('responsive_mode_enable',Portada_ThemeOption::getOption('responsive_mode_enable'));

/******************************************************************************/
/******************************************************************************/
