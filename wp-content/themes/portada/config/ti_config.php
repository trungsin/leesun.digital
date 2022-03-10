<?php

/******************************************************************************/
/******************************************************************************/

define('PLUGIN_THEME_INSTALLER_THEME_CONTEXT','portada');
define('PLUGIN_THEME_INSTALLER_THEME_CLASS_PREFIX','Portada_');
define('PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX','pt_option');

define('PLUGIN_THEME_INSTALLER_SKIN_OPTION_NAME','pt_skin');

/****/

TIData::set('import','option',array('widget_data','content_data','theme_option'));

/***/

TIData::set('post_id',PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX.'_blog_category_post_id',array('title'=>'Blog - Category Template','postType'=>'page'));
TIData::set('post_id',PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX.'_blog_archive_post_id',array('title'=>'Blog - Archive Template','postType'=>'page'));
TIData::set('post_id',PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX.'_blog_search_post_id',array('title'=>'Blog - Search Template','postType'=>'page'));
TIData::set('post_id',PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX.'_blog_author_post_id',array('title'=>'Blog - Author Template','postType'=>'page'));

/***/

TIData::set('post_id',PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX.'_page_404_page_id',array('title'=>'Page Not Found','postType'=>'page'));

/***/

TIData::set('term_id',PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX.'_header_menu_id',array('title'=>'Header Menu','taxonomy'=>'nav_menu'));

/***/

TIData::set('term_id',PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX.'_footer_menu_1',array('title'=>'Footer Menu 1','taxonomy'=>'nav_menu'));
TIData::set('term_id',PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX.'_footer_menu_2',array('title'=>'Footer Menu 2','taxonomy'=>'nav_menu'));
TIData::set('term_id',PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX.'_footer_menu_3',array('title'=>'Footer Menu 3','taxonomy'=>'nav_menu'));

/***/

TIData::set('post_id',PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX.'_maintenance_mode_post_id',array('title'=>'Maintenance Mode','postType'=>'page'));

/***/

TIData::set('widget_area',PLUGIN_THEME_INSTALLER_THEME_OPTION_PREFIX.'_widget_area_sidebar_woocommerce',array('title'=>'Shop'));

/***/

TIData::set('post_id','page_on_front',array('title'=>'Home','postType'=>'page'));
TIData::set('option','show_on_front','page');

/***/

TIData::set('option','posts_per_page',6);
TIData::set('option','permalink_structure','/%postname%/');

TIData::set('option','thread_comments',1);
TIData::set('option','thread_comments_depth',2);
TIData::set('option','page_comments',1);
TIData::set('option','comments_per_page',5);
TIData::set('option','comment_order','desc');

TIData::set('option','show_avatars',1);
TIData::set('option','avatar_default','mystery');

TIData::set('option','date_format','F j, Y');

TIData::set('option','blogname','Portada - Elegant WordPress Blogging Theme');
TIData::set('option','blogdescription','');

/******************************************************************************/
/******************************************************************************/