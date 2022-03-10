<?php

/******************************************************************************/
/******************************************************************************/

require_once(get_template_directory().'/define.php');

/******************************************************************************/

require_once(PORTADA_THEME_PATH_CLASS.'Theme.File.class.php');
require_once(PORTADA_THEME_PATH_CLASS.'Theme.Include.class.php');

require_once(PORTADA_THEME_PATH_CLASS.'Theme.Widget.class.php');

Portada_ThemeInclude::includeClass(PORTADA_THEME_PATH_CLASS.'Walker_Nav_Menu.php',array('Walker_Nav_Menu_Edit_Custom'));

Portada_ThemeInclude::includeFileFromDir(PORTADA_THEME_PATH_CLASS,array('Walker_Nav_Menu.php'));

Portada_ThemeInclude::includeClass(PORTADA_THEME_PATH_LIBRARY.'tgm_plugin_activation/class-tgm-plugin-activation.php',array('TGM_Plugin_Activation'));

/******************************************************************************/
/******************************************************************************/