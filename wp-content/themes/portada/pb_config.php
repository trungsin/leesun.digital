<?php

/******************************************************************************/
/******************************************************************************/

require_once(get_template_directory().'/define.php');
require_once(get_template_directory().'/class/Theme.User.class.php');
require_once(get_template_directory().'/class/Theme.Button.class.php');
require_once(get_template_directory().'/class/Theme.Feature.class.php');
require_once(get_template_directory().'/class/Theme.SocialProfile.class.php');
require_once(get_template_directory().'/class/Theme.ResponsiveMode.class.php');

$User=new Portada_ThemeUser();
$Button=new Portada_ThemeButton();
$Feature=new Portada_ThemeFeature();
$SocialProfile=new Portada_ThemeSocialProfile();
$ResponsiveMode=new Portada_ThemeResponsiveMode();

PBData::set('component',array
(
	'blockquote'																=>	array(),
	'button'																	=>	array(),
	'contact_form'																=>	array(),
	'divider'																	=>	array(),
	'dropcap'																	=>	array(),
	'feature'																	=>	array(),
	'header'																	=>	array(),
	'iframe'																	=>	array(),
	'layout'																	=>	array(),
	'layout_column'																=>	array(),
	'nivo_slider'																=>	array(),
	'notice'																	=>	array(),
	'preformatted_text'															=>	array(),
	'redirect'																	=>	array(),
	'sitemap'																	=>	array(),
	'social_icon'																=>	array(),
	'space'																		=>	array(),
	'tab'																		=>	array(),
	'video'																		=>	array()
));

PBData::set('visual_mode',0);

PBData::set('retina_ready',0);

PBData::set('content_width',1080);

PBData::set('responsive_mode',$ResponsiveMode->responsiveMode);

PBData::set('media_library_url_field_enable',0);
PBData::set('media_library_video_url_field_enable',0);

/******************************************************************************/

PBData::set('filter_user_contactmethods',array($User,'createUserContactMethod'));

/******************************************************************************/

$path='/multisite/'.get_current_blog_id().'/style/';

PBData::set('theme_path_multisite_style',get_template_directory().$path);
PBData::set('theme_url_multisite_style',get_template_directory_uri().$path);

/******************************************************************************/

PBData::set('modify_library',array
(
	'script'																	=>	array
	(
		'jquery-ui-tabs'														=>	array
		(
			'use'																=>	3
		),
		'jquery-ui-accordion'													=>	array
		(
			'use'																=>	1
		),
		'jquery-effects-core'													=>	array
		(
			'use'																=>	0
		),
		'jquery-effects-fade'													=>	array
		(
			'use'																=>	0
		),
		'jquery-effects-slide'													=>	array
		(
			'use'																=>	0
		),
		'jquery-effects-drop'													=>	array
		(
			'use'																=>	0
		),
		'jquery-bbq'															=>	array
		(
			'use'																=>	0
		),		
		'jquery-easing'															=> array
		(
			'use'																=>	0
		),
		'jquery-mousewheel'														=>	array
		(
			'use'																=>	0
		),
		'jquery-touchswipe'														=>	array
		(
			'use'																=>	0
		),
		'jquery-scrollTo'														=>	array
		(
			'use'																=>	0
		),
		'jquery-carouFredSel'													=>	array
		(
			'use'																=>	0
		),
		'jquery-waypoint'														=>	array
		(
			'use'																=>	0
		),
		'jquery-waypoint-sticky'												=>	array
		(
			'use'																=>	0
		),
		'jquery-parallax'														=>	array
		(
			'use'																=>	0
		),
		'pb-animationWaypoint'													=>	array
		(
			'use'																=>	0
		)
	),
	'style'																		=>	array
	(
		'font-awesome'															=>	array
		(
			'use'																=>	0
		)		
	)
));

/******************************************************************************/

PBComponentData::set('button','field_size_enable','0');
PBComponentData::set('button','field_arrow_enable_enable','0');
PBComponentData::set('button','field_icon_enable_enable','0');
PBComponentData::set('button','field_icon_enable','0');
PBComponentData::set('button','field_icon_position_enable','0');
PBComponentData::set('button','style',$Button->buttonStyle);

/******************************************************************************/

PBComponentData::set('contact_form','infieldlabel_enable','0');

/******************************************************************************/

PBComponentData::set('feature','icon',$Feature->icon);
PBComponentData::set('feature','icon_type','cf');

PBComponentData::set('feature','field_icon_size_enable','0');
PBComponentData::set('feature','field_icon_position_enable','0');
PBComponentData::set('feature','field_carousel_enable_enable','0');
PBComponentData::set('feature','field_carousel_autoplay_enable_enable','0');
PBComponentData::set('feature','field_carousel_circular_enable_enable','0');
PBComponentData::set('feature','field_carousel_infinite_enable_enable','0');
PBComponentData::set('feature','field_carousel_scroll_pause_hover_enable','0');
PBComponentData::set('feature','field_carousel_scroll_fx_enable','0');
PBComponentData::set('feature','field_carousel_scroll_easing_enable','0');
PBComponentData::set('feature','field_carousel_scroll_duration_enable','0');
PBComponentData::set('feature','field_waypoint_type_enable','0');
PBComponentData::set('feature','field_waypoint_offset_trigger_enable','0');
PBComponentData::set('feature','field_waypoint_duration_enable','0');
PBComponentData::set('feature','field_waypoint_easing_enable','0');
PBComponentData::set('feature','field_waypoint_opacity_initial_enable','0');
PBComponentData::set('feature','field_item_header_enable','0');

PBComponentData::set('feature','field_item_url_enable','0');
PBComponentData::set('feature','field_item_url_target_enable','0');

add_filter('pb_component_feature_icon_inner_html',array($Feature,'iconInnerHtml'));

/******************************************************************************/

PBComponentData::set('header','field_font_style_enable','0');
PBComponentData::set('header','field_font_weight_enable','0');

/******************************************************************************/

PBComponentData::set('layout','field_bg_image_enable','0');
PBComponentData::set('layout','field_bg_repeat_enable','0');
PBComponentData::set('layout','field_bg_position_enable','0');
PBComponentData::set('layout','field_bg_size_a_enable','0');
PBComponentData::set('layout','field_bg_size_b_enable','0');
PBComponentData::set('layout','field_bg_parallax_enable_enable','0');
PBComponentData::set('layout','field_bg_parallax_mobile_enable_enable','0');
PBComponentData::set('layout','field_bg_parallax_speed_enable','0');

PBComponentData::set('layout','field_video_format_webm_enable','0');
PBComponentData::set('layout','field_video_format_ogg_enable','0');
PBComponentData::set('layout','field_video_format_mp4_enable','0');
PBComponentData::set('layout','field_video_poster_enable','0');
PBComponentData::set('layout','field_video_autoplay_enable','0');
PBComponentData::set('layout','field_video_loop_enable','0');
PBComponentData::set('layout','field_video_muted_enable','0');
PBComponentData::set('layout','field_video_control_enable','0');
PBComponentData::set('layout','field_video_mobile_enable_enable','0');

PBComponentData::set('layout','field_bg_color_enable','0');
PBComponentData::set('layout','field_overlay_color_enable','0');

/******************************************************************************/

PBComponentData::set('nivo_slider','field_direction_navigation_enable_enable','0');
PBComponentData::set('nivo_slider','field_control_navigation_thumbs_enable_enable','0');

/******************************************************************************/

PBComponentData::set('notice','first_line_header_important_default','5');

PBComponentData::set('notice','field_icon_enable','0');
PBComponentData::set('notice','field_icon_bg_color_enable','0');

/******************************************************************************/

PBComponentData::set('social_icon','icon_type','cf');
PBComponentData::set('social_icon','social',$SocialProfile->socialProfile);

/******************************************************************************/

PBComponentData::set('sitemap','field_bullet_enable','0');
PBComponentData::set('sitemap','field_font_icon_name_enable','0');
PBComponentData::set('sitemap','field_font_icon_color_enable','0');
PBComponentData::set('sitemap','field_font_icon_size_enable','0');

/******************************************************************************/

PBData::set('css_class',array
(
	array('value'=>'pb-top-0','description'=>'Reset top margin'),
	array('value'=>'pb-bottom-0','description'=>'Reset top margin'),
	array('value'=>'pb-margin-top-0','description'=>'Set a 0px top margin'),
	array('value'=>'pb-margin-top-10','description'=>'Set a 10px top margin'),
	array('value'=>'pb-margin-top-20','description'=>'Set a 20px top margin'),
	array('value'=>'pb-margin-top-30','description'=>'Set a 30px top margin'),
	array('value'=>'pb-margin-top-40','description'=>'Set a 40px top margin'),
	array('value'=>'pb-margin-top-50','description'=>'Set a 50px top margin'),
	array('value'=>'pb-margin-top-60','description'=>'Set a 60px top margin'),
	array('value'=>'pb-margin-top-70','description'=>'Set a 70px top margin'),
	array('value'=>'pb-margin-top-80','description'=>'Set a 80px top margin'),
	array('value'=>'pb-margin-top-90','description'=>'Set a 90px top margin'),
	array('value'=>'pb-margin-top-100','description'=>'Set a 100px top margin'),
	array('value'=>'pb-margin-bottom-0','description'=>'Set a 0px bottom margin'),
	array('value'=>'pb-margin-bottom-10','description'=>'Set a 10px bottom margin'),
	array('value'=>'pb-margin-bottom-20','description'=>'Set a 20px bottom margin'),
	array('value'=>'pb-margin-bottom-30','description'=>'Set a 30px bottom margin'),
	array('value'=>'pb-margin-bottom-40','description'=>'Set a 40px bottom margin'),
	array('value'=>'pb-margin-bottom-50','description'=>'Set a 50px bottom margin'),
	array('value'=>'pb-margin-bottom-60','description'=>'Set a 60px bottom margin'),
	array('value'=>'pb-margin-bottom-70','description'=>'Set a 70px bottom margin'),
	array('value'=>'pb-margin-bottom-80','description'=>'Set a 80px bottom margin'),
	array('value'=>'pb-margin-bottom-90','description'=>'Set a 90px bottom margin'),
	array('value'=>'pb-margin-bottom-100','description'=>'Set a 100px bottom margin'),
	array('value'=>'pb-margin-left-0','description'=>'Set a 0px left margin'),
	array('value'=>'pb-margin-left-10','description'=>'Set a 10px left margin'),
	array('value'=>'pb-margin-left-20','description'=>'Set a 20px left margin'),
	array('value'=>'pb-margin-left-30','description'=>'Set a 30px left margin'),
	array('value'=>'pb-margin-left-40','description'=>'Set a 40px left margin'),
	array('value'=>'pb-margin-left-50','description'=>'Set a 50px left margin'),
	array('value'=>'pb-margin-left-60','description'=>'Set a 60px left margin'),
	array('value'=>'pb-margin-left-70','description'=>'Set a 70px left margin'),
	array('value'=>'pb-margin-left-80','description'=>'Set a 80px left margin'),
	array('value'=>'pb-margin-left-90','description'=>'Set a 90px left margin'),
	array('value'=>'pb-margin-left-100','description'=>'Set a 100px left margin'),
	array('value'=>'pb-margin-right-0','description'=>'Set a 0px right margin'),
	array('value'=>'pb-margin-right-10','description'=>'Set a 10px right margin'),
	array('value'=>'pb-margin-right-20','description'=>'Set a 20px right margin'),
	array('value'=>'pb-margin-right-30','description'=>'Set a 30px right margin'),
	array('value'=>'pb-margin-right-40','description'=>'Set a 40px right margin'),
	array('value'=>'pb-margin-right-50','description'=>'Set a 50px right margin'),
	array('value'=>'pb-margin-right-60','description'=>'Set a 60px right margin'),
	array('value'=>'pb-margin-right-70','description'=>'Set a 70px right margin'),
	array('value'=>'pb-margin-right-80','description'=>'Set a 80px right margin'),
	array('value'=>'pb-margin-right-90','description'=>'Set a 90px right margin'),
	array('value'=>'pb-margin-right-100','description'=>'Set a 100px right margin'),
	array('value'=>'pb-position-absolute','description'=>'Set element absolute'),
	array('value'=>'pb-position-relative','description'=>'Set element relative'),
	array('value'=>'pb-float-left','description'=>'Add left float'),
	array('value'=>'pb-float-right','description'=>'Add right float')
));