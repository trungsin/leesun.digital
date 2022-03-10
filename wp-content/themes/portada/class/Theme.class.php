<?php

/******************************************************************************/
/******************************************************************************/

class Portada_Theme
{
	/**************************************************************************/
	
	function __construct()
	{
		$this->themeDefaultOption=array
		(
			'open_graph_enable'													=>	'1',
			'blog_category_post_id'												=>	'0',
			'blog_archive_post_id'												=>	'0',
			'blog_search_post_id'												=>	'0',
			'blog_author_post_id'												=>	'0',
			'blog_sort_field'													=>	'post_date',
			'blog_sort_direction'												=>	'desc',		
			'blog_automatic_excerpt_length_1'									=>	'60',
			'blog_automatic_excerpt_length_2'									=>	'30',
			'post_category_visible'												=>	'1',
			'post_title_visible'												=>	'1',
			'post_author_name_visible'											=>	'1',
			'post_date_visible'													=>	'1',
			'post_divider_visible'												=>	'1',
			'post_image_visible'												=>	'1',
			'post_excerpt_visible'												=>	'1',
			'post_content_visible'												=>	'1',
			'post_read_more_button_visible'										=>	'1',
			'post_summary_visible'												=>	'1',
			'post_tag_visible'													=>	'1',
			'post_comment_visible'												=>	'1',
			'post_share_visible'												=>	'1',
			'post_like_visible'													=>	'1',
			'post_author_info_visible'											=>	'1',
			'post_navigation_visible'											=>	'1',
			'post_related_post_visible'											=>	'1',
			'page_404_page_id'													=>	'0',
			'page_header_visible'												=>	'1',
			'header_logo_src'													=>	'',
			'header_top_social_icon_enable'										=>	'1',
			'header_top_bar_search_enable'										=>	'1',
			'header_revolution_slider_id'										=>	'0',
			'header_menu_id'													=>	'0',
			'header_menu_responsive_mode'										=>	'768',
			'header_menu_sticky_enable'											=>	'1',
			'header_menu_animation_enable'										=>	'0',
			'header_menu_animation_speed_open'									=>	'0',
			'header_menu_animation_speed_close'									=>	'0',
			'header_menu_animation_delay'										=>	'0',
			'footer_instagram_enable'											=>	'0',
			'footer_instagram_token'											=>	'',
			'footer_instagram_feed_count'										=>	'6',
			'footer_logo_src'													=>	'',
			'footer_menu_1'														=>	'',
			'footer_menu_2'														=>	'',
			'footer_menu_3'														=>	'',
			'footer_bottom_content'												=>	'Copyright 2016 <a href="https://themeforest.net/item/portada-elegant-wordpress-blogging-theme/19032008?ref=QuanticaLabs" target="_blank">PORTADA</a> <em>Made With Love By</em> <a href="https://themeforest.net/user/quanticalabs/portfolio?ref=QuanticaLabs" target="_blank">QuanticaLabs</a>',
			'comment_automatic_excerpt_length'									=>	'25',
			'custom_js_code'													=>	'',
			'widget_area_sidebar'												=>	'',
			'widget_area_sidebar_location'										=>	'',	
			'right_click_enable'												=>	'1',
			'copy_selection_enable'												=>	'1',
			'go_to_page_top_enable'												=>	'1',
			'go_to_page_top_hash'												=>	'up',
			'go_to_page_top_animation_enable'									=>	'1',
			'go_to_page_top_animation_duration'									=>	'500',
			'go_to_page_top_animation_easing'									=>	'easeInOutCubic',
			'widget_area_sidebar_woocommerce'									=>	'',
			'widget_area_sidebar_location_woocommerce'							=>	2,
			'responsive_mode_enable'											=>	'1',
			'fancybox_image_padding'											=>	'10',
			'fancybox_image_margin'												=>	'20',
			'fancybox_image_min_width'											=>	'100',
			'fancybox_image_min_height'											=>	'100',
			'fancybox_image_max_width'											=>	'9999',
			'fancybox_image_max_height'											=>	'9999',
			'fancybox_image_helper_button_enable'								=>	'1',
			'fancybox_image_autoresize'											=>	'1',
			'fancybox_image_autocenter'											=>	'1',
			'fancybox_image_fittoview'											=>	'1',
			'fancybox_image_arrow'												=>	'1',
			'fancybox_image_close_button'										=>	'1',
			'fancybox_image_close_click'										=>	'0',
			'fancybox_image_next_click'											=>	'0',
			'fancybox_image_mouse_wheel'										=>	'1',
			'fancybox_image_autoplay'											=>	'0',
			'fancybox_image_loop'												=>	'1',
			'fancybox_image_playspeed'											=>	'3000',
			'fancybox_image_animation_effect_open'								=>	'fade',
			'fancybox_image_animation_effect_close'								=>	'fade',
			'fancybox_image_animation_effect_next'								=>	'elastic',
			'fancybox_image_animation_effect_previous'							=>	'elastic',
			'fancybox_image_easing_open'										=>	'easeInQuad',
			'fancybox_image_easing_close'										=>	'easeInQuad',
			'fancybox_image_easing_next'										=>	'easeInQuad',
			'fancybox_image_easing_previous'									=>	'easeInQuad',
			'fancybox_image_speed_open'											=>	'250',
			'fancybox_image_speed_close'										=>	'250',
			'fancybox_image_speed_next'											=>	'250',
			'fancybox_image_speed_previous'										=>	'250',
			'maintenance_mode_enable'											=>	'0',
			'maintenance_logo_src'												=>	'',
			'maintenance_mode_post_id'											=>	'0',
			'maintenance_mode_user_id'											=>	'0',
			'maintenance_mode_ip_address'										=>	'',
			'install'															=>	'1',	
		);
		
		$SocialProfile=new Portada_ThemeSocialProfile();
		
		foreach($SocialProfile->socialProfile as $index=>$value)
		{
			$this->themeDefaultOption['social_profile_order_'.$index]=$value[3];
			$this->themeDefaultOption['social_profile_address_'.$index]=$value[2];
		}
	}
	
	/**************************************************************************/
	
	function prepareLibrary()
	{
		$Skin=new Portada_ThemeSkin();
		
		$this->libraryDefault=array
		(
			'script'															=>	array
			(
				'use'															=>	1,
				'inc'															=>	true,
				'path'															=>	PORTADA_THEME_URL_SCRIPT,
				'file'															=>	'',
				'in_footer'														=>	true,				
				'dependencies'													=>	array('jquery')
			),
			'style'																=>	array
			(
				'use'															=>	1,
				'inc'															=>	true,
				'path'															=>	PORTADA_THEME_URL_STYLE,
				'file'															=>	'',
				'dependencies'													=>	array()
			)			
		);
		
		$this->library=array
		(
			'script'															=>	array
			(
				'jquery-ui-core'												=>	array
				(
					'path'														=>	''
				),
				'jquery-ui-tabs'												=>	array
				(
                    'use'                                                       =>  1,
					'path'														=>	'',
                    'dependencies'												=>	array('jquery','jquery-ui-core')
				),
				'jquery-ui-button'												=>	array
				(
					'path'														=>	'',
					'dependencies'												=>	array('jquery','jquery-ui-core')
				),
				'jquery-ui-slider'												=>	array
				(
					'path'														=>	'',
					'dependencies'												=>	array('jquery','jquery-ui-core')
				),
				'jquery-ui-autocomplete'										=>	array
				(
					'path'														=>	'',
					'dependencies'												=>	array('jquery','jquery-ui-core')
				),
				'jquery-bbq'													=>	array
				(
					'use'														=>	3,
					'file'														=>	'jquery.ba-bbq.min.js'
				),
				'jquery-easing'													=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.easing.js'
				),	
				'jquery-scrollTo'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.scrollTo.min.js'
				),	
				'jquery-mousewheel'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.mousewheel.js'
				),	
				'jquery-blockUI'												=>	array
				(
					'use'														=>	3,
					'file'														=>	'jquery.blockUI.js'
				),
				'jquery-qtip'													=>	array
				(
					'use'														=>	3,
					'file'														=>	'jquery.qtip.min.js'
				),
				'jquery-dropkick'												=>	array
				(
					'use'														=>	3,
					'file'														=>	'jquery.dropkick.min.js'
				),
				'jquery-colorpicker'											=>	array
				(
					'file'														=>	'jquery.colorpicker.js'
				),
				'jquery-infieldlabel'											=>	array
				(
					'use'														=>	3,
					'file'														=>	'jquery.infieldlabel.min.js'
				),
				'jquery-actual'													=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.actual.min.js'
				),
				'jquery-responsiveTable'										=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.responsiveTable.js'
				), 
				'jquery-responsiveElement'										=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.responsiveElement.js'
				),
				'jquery-windowDimensionListener'								=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.windowDimensionListener.js'
				),				
				'jquery-themeOption'											=>	array
				(
					'file'														=>	'jquery.themeOption.js'
				),
				'jquery-themeOptionElement'										=>	array
				(
					'file'														=>	'jquery.themeOptionElement.js'
				),
				'jqueryysuperfish'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.superfish.min.js'
				),
				'jquery-waypoint'												=>	array
				(
					'use'														=>	3,
					'file'														=>	'jquery.waypoints.min.js'
				),
				'jquery-circle-progress'										=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.circle-progress.min.js'
				),	
				'portada-comment'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.comment.js'
				),
				'portada-header'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.header.js'
				),		
				'portada-helper'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'Theme.Helper.class.js'
				),
				'portada-public'												=>	array
				(
					'use'														=>	2,
					'file'														=>	'public.js'
				),
				'portada-admin'													=>	array
				(
					'file'														=>	'admin.js'
				)	
			),
			'style'																=>	array
			(
				'jquery-ui'														=>	array
				(
					'file'														=>	'jquery.ui.min.css',
				),
				'google-font-admin'												=>	array
				(
                    'use'														=>	3,
					'path'														=>	'', 
					'file'														=>	add_query_arg(array('family'=>'Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Lora:400,400i,700,700i|Playfair Display:400,400i,700,700i,900,900i','subset'=>'cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese'),'//fonts.googleapis.com/css')
				),				
				'jquery-dropkick'												=>	array
				(
					'use'														=>	3,
					'file'														=>	'jquery.dropkick.css',
				),
				'jquery-dropkick-rtl'											=>	array
				(
					'use'														=>	3,
                    'inc'                                                       =>  false,
					'file'														=>	'jquery.dropkick.rtl.css',
				),
				'jquery-colorpicker'											=>	array
				(
					'file'														=>	'jquery.colorpicker.css',
				),	
				'jquery-qtip'													=>	array
				(
					'use'														=>	2,
					'file'														=>	'jquery.qtip.min.css',
				),
				'jquery-themeOption'											=>	array
				(
					'file'														=>	'jquery.themeOption.css',
				),
				'jquery-themeOption-rtl'										=>	array
				(
					'inc'														=>	false,
					'file'														=>	'jquery.themeOption.rtl.css'
				),
				'jquery-themeOption-overwrite'									=>	array
				(
					'file'														=>	'jquery.themeOption.overwrite.css',
				),	
				'portada-admin'													=>	array
				(
					'file'														=>	'admin.css',
				),				
				'tf-frontend'													=>	array
				(
					'use'														=>	2,
					'inc'														=>	false,
					'file'														=>	'TF.Frontend.css',
				),	
				'ts-frontend'													=>	array
				(
					'use'														=>	2,
					'inc'														=>	false,
					'file'														=>	'TS.Frontend.css'
				),	
				'pb-frontend-main'												=>	array
				(
					'use'														=>	2,
					'inc'														=>	false,
					'file'														=>	'PB.Frontend.main.css',
				),					
				'portada-style'													=>	array
				(
					'use'														=>	2,
					'path'														=>	null,
					'file'														=>	get_stylesheet_uri(),
				),
				'portada-skin-style'											=>	array
				(
					'use'														=>	2,
					'path'														=>	null,
					'file'														=>	PORTADA_THEME_URL_CONFIG.$Skin->getSkin().'/style.css',
				),
				'portada-woocommerce'											=>	array
				(
					'use'														=>	2,
					'inc'														=>	false,
					'file'														=>	'woocommerce.css',
				),	
				'portada-style-custom'											=>	array
				(
					'use'														=>	2,
					'path'														=>	PORTADA_THEME_URL_MULTISITE_SITE_STYLE,
					'file'														=>	'style.css',
				)
			)
		);
		
		foreach($this->library as $libraryType=>$libraryTypeData)
		{
			$library=array_keys($libraryTypeData);
			
			foreach($library as $libraryName)
				$this->library[$libraryType][$libraryName]=array_merge($this->libraryDefault[$libraryType],$this->library[$libraryType][$libraryName]);
		}
	}
	
	/**************************************************************************/
	
	function addLibrary($type,$use)
	{
		foreach($this->library[$type] as $index=>$data)
		{
			if(!$data['inc']) continue;
			
			if($data['use']!=3)
			{
				if($data['use']!=$use) continue;
			}
			
			if($type=='script')
			{
				wp_enqueue_script($index,$data['path'].$data['file'],$data['dependencies'],false,$data['in_footer']);
			}
			else 
			{
				wp_enqueue_style($index,$data['path'].$data['file'],$data['dependencies'],false);
			}
		}
	}
	
	/**************************************************************************/
	
	function includeLibrary($test,$script=array(),$style=array())
	{
		if($test!=1) return;

		foreach((array)$script as $value)
		{
			if(array_key_exists($value,$this->library['script']))
				$this->library['script'][$value]['inc']=true;
		}
		foreach((array)$style as $value)
		{
			if(array_key_exists($value,$this->library['style']))
				$this->library['style'][$value]['inc']=true;	
		}
	}
	
	/**************************************************************************/

	function adminInit()
	{
        $this->prepareLibrary();

        $this->includeLibrary(is_rtl(),array(),array('jquery-themeOption-rtl','jquery-dropkick-rtl'));
        
		$this->addLibrary('style',1);
		$this->addLibrary('script',1);
	}
	
	/**************************************************************************/
	
	function adminPrintScript()
	{

	}
	
	/**************************************************************************/
	
	function adminMenuInit()
	{
		add_action('admin_print_scripts',array($this,'adminPrintScript'));
		add_theme_page(__('Theme Options','portada'),__('Theme Options','portada'),'edit_theme_options','ThemeOptions',array($this,'adminOptionPanelCreate'));
	}
	
	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		$postType=get_post_types(array('public'=>true));
		foreach($postType as $data) 
		{
			if($data==='attachment') continue;
			add_meta_box('meta_box_template_general',__('Template General Options','portada'),array($this,'adminCreateMetaBoxTemplateGeneral'),$data,'normal','high');
			add_meta_box('meta_box_template_header',__('Template Header Options','portada'),array($this,'adminCreateMetaBoxTemplateHeader'),$data,'normal','high');
			add_meta_box('meta_box_template_footer',__('Template Footer Options','portada'),array($this,'adminCreateMetaBoxTemplateFooter'),$data,'normal','high');
        }	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBoxTemplateGeneral()
	{
		global $post;
		
		$Menu=new Portada_ThemeMenu();
		$WidgetArea=new Portada_ThemeWidgetArea();
		
		$data=array();
	
		$data['option']=Portada_ThemeOption::getPostMeta($post);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox','portada_meta_box_noncename',false,false);
		
		$data['dictionary']['widgetArea']=$WidgetArea->getWidgetAreaDictionary();
		$data['dictionary']['widgetAreaLocation']=$WidgetArea->getWidgetAreaLocationDictionary(false);
		
		$data['dictionary']['menu']=$Menu->getMenuDictionary(true,true,false);
		
		$Template=new Portada_ThemeTemplate($data,PORTADA_THEME_PATH_TEMPLATE.'admin/meta_box_template_general.php');
		echo $Template->output();					
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBoxTemplateHeader()
	{
		global $post;
		
		$Menu=new Portada_ThemeMenu();
		$Slider=new Portada_ThemeRevolutionSlider();
		
		$data=array();
	
		$data['option']=Portada_ThemeOption::getPostMeta($post);
		
		$data['dictionary']['menu']=$Menu->getMenuDictionary(true,true,false);
		$data['dictionary']['revolutionSlider']=$Slider->getSliderDictionary(true,true,false);
		
		$Template=new Portada_ThemeTemplate($data,PORTADA_THEME_PATH_TEMPLATE.'admin/meta_box_template_header.php');
		echo $Template->output();			
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBoxTemplateFooter()
	{
		global $post;
		
		$Menu=new Portada_ThemeMenu();
		
		$data=array();
	
		$data['option']=Portada_ThemeOption::getPostMeta($post);
		
		$data['dictionary']['menu']=$Menu->getMenuDictionary(true,true,false);
		
		$Template=new Portada_ThemeTemplate($data,PORTADA_THEME_PATH_TEMPLATE.'admin/meta_box_template_footer.php');
		echo $Template->output();			
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($postId)
	{
		if($_POST)
		{
			if(Portada_ThemeHelper::checkSavePost($postId,'portada_meta_box_noncename','adminSaveMetaBox')===false) return(false);
			
			$option=Portada_ThemeHelper::getPostOption();

			update_post_meta($postId,PORTADA_THEME_OPTION_PREFIX,$option);
		}		
	}

	/**************************************************************************/
	
	function adminOptionPanelCreate()
	{
		wp_enqueue_media();
		
		$data=array();
		
		$CSS=new Portada_ThemeCSS();
		$Menu=new Portada_ThemeMenu();
		$Page=new Portada_ThemePage();
		$Blog=new Portada_ThemeBlog();
		$Easing=new Portada_ThemeEasing();
		$Fancybox=new Portada_ThemeFancybox();
		$WidgetArea=new Portada_ThemeWidgetArea();
		$Background=new Portada_ThemeBackground();
		$Slider=new Portada_ThemeRevolutionSlider();
		$SocialProfile=new Portada_ThemeSocialProfile();
		
		$ResponsiveMode=new Portada_ThemeResponsiveMode();
		
		$data['option']=Portada_ThemeOption::getOptionObject();
				
		$data['dictionary']['easingType']=$Easing->easingType;
		$data['dictionary']['fancyboxTransitionType']=$Fancybox->transitionType;
		
		$data['dictionary']['fontStyle']=$CSS->fontStyle;
		$data['dictionary']['fontWeight']=$CSS->fontWeight;
		
		$data['dictionary']['page']=$Page->getPageDictionary(false,false,false);
		
		$data['dictionary']['sortDirection']=$Blog->sortDirection;
		$data['dictionary']['sortPostBlogField']=$Blog->sortPostBlogField;

		$data['dictionary']['widgetArea-1']=$WidgetArea->getWidgetAreaDictionary(true,false,false);
		$data['dictionary']['widgetAreaLocation-1']=$WidgetArea->getWidgetAreaLocationDictionary(true,false,false);
		
		$data['dictionary']['widgetArea-2']=$WidgetArea->getWidgetAreaDictionary(true,true,true);
		$data['dictionary']['widgetAreaLocation-2']=$WidgetArea->getWidgetAreaLocationDictionary(true,true,true);
		
		$data['dictionary']['menu-1']=$Menu->getMenuDictionary(true,false,false);
		$data['dictionary']['menu-2']=$Menu->getMenuDictionary(true,true,true);
		
		$data['dictionary']['backgroundSize']=$Background->backgroundSize;
		$data['dictionary']['backgroundRepeat']=$Background->backgroundRepeat;
		
		$data['dictionary']['responsive']=$ResponsiveMode->getDictionary();
		$data['dictionary']['responsiveMedia']=$ResponsiveMode->getMedia();
		
		$data['dictionary']['responsiveMedia']=$ResponsiveMode->getMedia();
		
		$data['dictionary']['socialProfile']=$SocialProfile->socialProfile;
		
		$data['dictionary']['revolutionSlider']=$Slider->getSliderDictionary(true,false,false);
		
		$data['dictionary']['user']=get_users();
		
		$Template=new Portada_ThemeTemplate($data,PORTADA_THEME_PATH_TEMPLATE.'admin/admin.php');
		echo $Template->output();			
	}
	
	/**************************************************************************/

	function setupTheme()
	{	
		global $content_width;
		if(!isset($content_width)) $content_width=1180;
		
		/***/
		
		$Post=new Portada_ThemePost();
		$Blog=new Portada_ThemeBlog();
		$Page=new Portada_ThemePage();
		$Image=new Portada_ThemeImage();
		$Comment=new Portada_ThemeComment();
		$WidgetArea=new Portada_ThemeWidgetArea();
		$MaintenanceMode=new Portada_ThemeMaintenanceMode();
		$WidgetPostRecent=new Portada_ThemeWidgetPostRecent();
		$WidgetPostMostLike=new Portada_ThemeWidgetPostMostLike();
		$WidgetAdvertisement=new Portada_ThemeWidgetAdvertisement();
		$WidgetPostMostComment=new Portada_ThemeWidgetPostMostComment();
	
		/***/
		
		$Image->register();
		$WidgetArea->register();
		
		$WidgetPostRecent->register();
		$WidgetPostMostLike->register();
		$WidgetAdvertisement->register();
		$WidgetPostMostComment->register();
		
		/***/
        
        add_theme_support('wp-block-styles');
		
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails'); 
		add_theme_support('automatic-feed-links');
		
		add_theme_support('custom-header');
		add_theme_support('custom-background');
		
		add_theme_support('post-formats', array('image','gallery','quote','video','audio'));
		
		add_theme_support('woocommerce');
		
		/***/
		
		if(function_exists('register_nav_menu')) register_nav_menu('header_menu','Header Menu');
		
		/***/
        
        add_filter('body_class',array($Post,'filterBodyClass'));
		
		add_filter('image_size_names_choose',array($Image,'addImageSupport'));
		
		add_filter('excerpt_more',array($Blog,'filterExcerptMore'));
		add_filter('excerpt_length',array($Blog,'automaticExcerptLength'),999);
		
		add_filter('body_class',array($this,'filterBodyClass'));

		add_filter('the_password_form',array($this,'passwordForm'));

		/***/
		
		add_editor_style('editor-style.css');
		
		/***/
		
		add_action('save_post',array($this,'adminSaveMetaBox'));
		add_action('add_meta_boxes',array($Page,'adminInitMetaBox'));
		add_action('add_meta_boxes',array($Post,'adminInitMetaBox'));
		add_action('add_meta_boxes',array($this,'adminInitMetaBox'));
		
		add_action('wp_ajax_comment_add',array($Comment,'addComment'));
		add_action('wp_ajax_nopriv_comment_add',array($Comment,'addComment'));
		add_action('wp_ajax_comment_get',array($Comment,'getComment'));
		add_action('wp_ajax_nopriv_comment_get',array($Comment,'getComment'));

		add_action('wp_ajax_set_post_like_count',array($Post,'setPostLikeCount'));
		add_action('wp_ajax_nopriv_set_post_like_count',array($Post,'setPostLikeCount'));		

		add_action('tgmpa_register',array($this,'addPlugin'));
		
		add_action('admin_notices',array($this,'adminNotice'));
		
		add_action('init',array($MaintenanceMode,'init'));
		
		$WooCommerce=new Portada_ThemeWooCommerce();
		
		$WooCommerce->addFilter();
		$WooCommerce->addAction();
				
		/***/

		load_theme_textdomain('portada',PORTADA_THEME_PATH.'languages/');

		/***/
		
		$install=(int)Portada_ThemeOption::getOption('install');
		if($install==1) return;
		
		$option=$this->themeDefaultOption;
		
		$ResponsiveMode=new Portada_ThemeResponsiveMode();
		
		$media=$ResponsiveMode->getMedia();
		foreach($media as $index=>$value)
			$option['custom_css_responsive_'.$index]='';
		
		$optionCurrent=Portada_ThemeOption::getOptionObject();
		
		$optionSave=array();
		foreach($option as $index=>$value)
		{
			if(!array_key_exists($index,$optionCurrent))
				$optionSave[$index]=$value;
		}
		
		$optionSave=array_merge((array)$optionSave,$optionCurrent);
		foreach($optionSave as $index=>$value)
		{
			if(!array_key_exists($index,$option))
				unset($optionSave[$index]);
		}

		$optionSave['install']=1;

		Portada_ThemeOption::resetOption();
		Portada_ThemeOption::updateOption($optionSave);
		
		$this->createCSSFile();
		
		/***/
		
		$argument=array
		(
			'post_type'							=>	array('post','page'),
			'post_status'						=>	'any',
			'posts_per_page'					=>	-1
		);
		
		$query=new WP_Query($argument);		
		if($query===false) return;

		foreach($query->posts as $value)
		{
			$meta=Portada_ThemeOption::getPostMeta($value);
			if(is_array($meta)) continue;		
			
			update_post_meta($value->ID,PORTADA_THEME_OPTION_PREFIX,$meta);
		}
	}
	
	/**************************************************************************/
	
	function switchTheme()
	{
		Portada_ThemeOption::updateOption(array('install'=>0));
	}
	
	/**************************************************************************/
	
	function adminOptionPanelSave()
	{
		$option=Portada_ThemeHelper::getPostOption();
	
		Portada_ThemeHelper::removeUIndex($option,'maintenance_mode_user_id');

		$response=array('global'=>array('error'=>1));
		
		$Blog=new Portada_ThemeBlog();
		$Notice=new Portada_ThemeNotice();
		$Easing=new Portada_ThemeEasing();
		$FancyBox=new Portada_ThemeFancybox();
		$Validation=new Portada_ThemeValidation($Notice);
		$ResponsiveMode=new Portada_ThemeResponsiveMode();
		
		$invalidValue=esc_html__('Invalid value','portada');
		
		/* Main */
		$Validation->notice('isNumber',array($option['open_graph_enable'],0,1),array(Portada_ThemeHelper::getFormName('open_graph_enable',false),$invalidValue));
		
		/* Blog */
		if(!in_array($option['blog_sort_field'],array_keys($Blog->sortPostBlogField)))
			$Notice->addError(Portada_ThemeHelper::getFormName('blog_sort_field',false),$invalidValue);		
		if(!in_array($option['blog_sort_direction'],array_keys($Blog->sortDirection)))
			$Notice->addError(Portada_ThemeHelper::getFormName('blog_sort_direction',false),$invalidValue);	
		$Validation->notice('isNumber',array($option['blog_automatic_excerpt_length_1'],0,999),array(Portada_ThemeHelper::getFormName('blog_automatic_excerpt_length_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['blog_automatic_excerpt_length_2'],0,999),array(Portada_ThemeHelper::getFormName('blog_automatic_excerpt_length_2',false),$invalidValue));
		
		/* Post */
		$Validation->notice('isNumber',array($option['post_category_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_category_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_title_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_title_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_author_name_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_author_name_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_date_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_date_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_divider_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_divider_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_image_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_image_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_excerpt_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_excerpt_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_content_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_content_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_read_more_button_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_read_more_button_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_summary_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_summary_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_tag_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_tag_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_comment_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_comment_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_share_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_share_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_like_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_like_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_author_info_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_author_info_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_navigation_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_navigation_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['post_related_post_visible'],0,1),array(Portada_ThemeHelper::getFormName('post_related_post_visible',false),$invalidValue));
		
		/* Page */
		$Validation->notice('isNumber',array($option['page_header_visible'],0,1),array(Portada_ThemeHelper::getFormName('page_header_visible',false),$invalidValue));
		
		/* Header */
		$Validation->notice('isNumber',array($option['header_top_social_icon_enable'],0,1),array(Portada_ThemeHelper::getFormName('header_top_social_icon_enable',false),$invalidValue));
		$Validation->notice('isNumber',array($option['header_top_bar_search_enable'],0,1),array(Portada_ThemeHelper::getFormName('header_top_bar_search_enable',false),$invalidValue));
		if(!in_array($option['header_menu_responsive_mode'],$ResponsiveMode->responsiveMode))
			$Notice->addError(Portada_ThemeHelper::getFormName('header_menu_responsive_mode',false),$invalidValue);	
		$Validation->notice('isNumber',array($option['header_menu_sticky_enable'],0,1),array(Portada_ThemeHelper::getFormName('header_menu_sticky_enable',false),$invalidValue));
		$Validation->notice('isNumber',array($option['header_menu_animation_enable'],0,1),array(Portada_ThemeHelper::getFormName('header_menu_animation_enable',false),$invalidValue));
		$Validation->notice('isNumber',array($option['header_menu_animation_speed_open'],0,99999),array(Portada_ThemeHelper::getFormName('header_menu_animation_speed_open',false),$invalidValue));
		$Validation->notice('isNumber',array($option['header_menu_animation_speed_close'],0,99999),array(Portada_ThemeHelper::getFormName('header_menu_animation_speed_close',false),$invalidValue));
		$Validation->notice('isNumber',array($option['header_menu_animation_delay'],0,99999),array(Portada_ThemeHelper::getFormName('header_menu_animation_delay',false),$invalidValue));
		
		/* Footer */
		$Validation->notice('isNumber',array($option['footer_instagram_enable'],0,1),array(Portada_ThemeHelper::getFormName('footer_instagram_enable',false),$invalidValue));
		$Validation->notice('isNumber',array($option['footer_instagram_feed_count'],1,20),array(Portada_ThemeHelper::getFormName('footer_instagram_feed_count',false),$invalidValue));

		/* Comment */
		$Validation->notice('isNumber',array($option['comment_automatic_excerpt_length'],0,999),array(Portada_ThemeHelper::getFormName('comment_automatic_excerpt_length',false),$invalidValue));
	
		/* Widget area */
		$Validation->notice('isNumber',array($option['widget_area_sidebar_location'],0,2),array(Portada_ThemeHelper::getFormName('widget_area_sidebar_location',false),$invalidValue));
		
		/* Custom JS code */
		
		/* Content copying */
		$Validation->notice('isNumber',array($option['right_click_enable'],0,1),array(Portada_ThemeHelper::getFormName('right_click_enable',false),$invalidValue));
		$Validation->notice('isNumber',array($option['copy_selection_enable'],0,1),array(Portada_ThemeHelper::getFormName('copy_selection_enable',false),$invalidValue));
		
		/* Go to page to */
		$Validation->notice('isNumber',array($option['go_to_page_top_enable'],0,1),array(Portada_ThemeHelper::getFormName('go_to_page_top_enable',false),$invalidValue));
		$Validation->notice('isNotEmpty',array($option['go_to_page_top_hash']),array(Portada_ThemeHelper::getFormName('go_to_page_top_hash',false),$invalidValue));
		$Validation->notice('isNumber',array($option['go_to_page_top_animation_enable'],0,1),array(Portada_ThemeHelper::getFormName('go_to_page_top_animation_enable',false),$invalidValue));
		$Validation->notice('isNumber',array($option['go_to_page_top_animation_duration'],0,99999),array(Portada_ThemeHelper::getFormName('go_to_page_top_animation_duration',false),$invalidValue));
		if(!in_array($option['go_to_page_top_animation_easing'],array_keys($Easing->easingType)))
			$Notice->addError(Portada_ThemeHelper::getFormName('go_to_page_top_animation_easing',false),$invalidValue);			

		/* Responsive mode */
		$Validation->notice('isNumber',array($option['responsive_mode_enable'],0,1),array(Portada_ThemeHelper::getFormName('responsive_mode_enable',false),$invalidValue));
		
		/* Plugin / WooCommerce */
		if(Portada_ThemePlugin::isActive('WooCommerce'))
		{
			$Validation->notice('isNumber',array($option['widget_area_sidebar_location_woocommerce'],0,2),array(Portada_ThemeHelper::getFormName('widget_area_sidebar_location_woocommerce',false),$invalidValue));
		}
		
		/* Plugin / Fancybox for images */
		$Validation->notice('isNumber',array($option['fancybox_image_padding'],0,999),array(Portada_ThemeHelper::getFormName('fancybox_image_padding',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_margin'],0,999),array(Portada_ThemeHelper::getFormName('fancybox_image_margin',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_min_width'],1,9999),array(Portada_ThemeHelper::getFormName('fancybox_image_min_width',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_min_height'],1,9999),array(Portada_ThemeHelper::getFormName('fancybox_image_min_height',false),$invalidValue));		
		$Validation->notice('isNumber',array($option['fancybox_image_max_width'],1,9999),array(Portada_ThemeHelper::getFormName('fancybox_image_max_width',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_max_height'],1,9999),array(Portada_ThemeHelper::getFormName('fancybox_image_max_height',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_helper_button_enable'],0,1),array(Portada_ThemeHelper::getFormName('fancybox_image_helper_button_enable',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_autoresize'],0,1),array(Portada_ThemeHelper::getFormName('fancybox_image_autoresize',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_autocenter'],0,1),array(Portada_ThemeHelper::getFormName('fancybox_image_autocenter',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_fittoview'],0,1),array(Portada_ThemeHelper::getFormName('fancybox_image_fittoview',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_arrow'],0,1),array(Portada_ThemeHelper::getFormName('fancybox_image_arrow',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_close_button'],0,1),array(Portada_ThemeHelper::getFormName('fancybox_image_close_button',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_close_click'],0,1),array(Portada_ThemeHelper::getFormName('fancybox_image_close_click',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_next_click'],0,1),array(Portada_ThemeHelper::getFormName('fancybox_image_next_click',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_mouse_wheel'],0,1),array(Portada_ThemeHelper::getFormName('fancybox_image_mouse_wheel',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_autoplay'],0,1),array(Portada_ThemeHelper::getFormName('fancybox_image_autoplay',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_loop'],0,1),array(Portada_ThemeHelper::getFormName('fancybox_image_loop',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_playspeed'],1,99999),array(Portada_ThemeHelper::getFormName('fancybox_image_playspeed',false),$invalidValue));
		if(!in_array($option['fancybox_image_animation_effect_open'],array_keys($FancyBox->transitionType)))
			$Notice->addError(Portada_ThemeHelper::getFormName('fancybox_image_animation_effect_open',false),$invalidValue);	
		if(!in_array($option['fancybox_image_animation_effect_close'],array_keys($FancyBox->transitionType)))
			$Notice->addError(Portada_ThemeHelper::getFormName('fancybox_image_animation_effect_close',false),$invalidValue);	
		if(!in_array($option['fancybox_image_animation_effect_next'],array_keys($FancyBox->transitionType)))
			$Notice->addError(Portada_ThemeHelper::getFormName('fancybox_image_animation_effect_next',false),$invalidValue);	
		if(!in_array($option['fancybox_image_animation_effect_previous'],array_keys($FancyBox->transitionType)))
			$Notice->addError(Portada_ThemeHelper::getFormName('fancybox_image_animation_effect_previous',false),$invalidValue);	
		if(!in_array($option['fancybox_image_easing_open'],array_keys($Easing->easingType)))
			$Notice->addError(Portada_ThemeHelper::getFormName('fancybox_image_easing_open',false),$invalidValue);	
		if(!in_array($option['fancybox_image_easing_close'],array_keys($Easing->easingType)))
			$Notice->addError(Portada_ThemeHelper::getFormName('fancybox_image_easing_close',false),$invalidValue);	
		if(!in_array($option['fancybox_image_easing_next'],array_keys($Easing->easingType)))
			$Notice->addError(Portada_ThemeHelper::getFormName('fancybox_image_easing_next',false),$invalidValue);	
		if(!in_array($option['fancybox_image_easing_previous'],array_keys($Easing->easingType)))
			$Notice->addError(Portada_ThemeHelper::getFormName('fancybox_image_easing_previous',false),$invalidValue);	
		$Validation->notice('isNumber',array($option['fancybox_image_speed_open'],1,99999),array(Portada_ThemeHelper::getFormName('fancybox_image_speed_open',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_speed_close'],1,99999),array(Portada_ThemeHelper::getFormName('fancybox_image_speed_close',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_speed_next'],1,99999),array(Portada_ThemeHelper::getFormName('fancybox_image_speed_next',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_speed_previous'],1,99999),array(Portada_ThemeHelper::getFormName('fancybox_image_speed_previous',false),$invalidValue));

		/* Plugin / Maintenance mode */
		$Validation->notice('isNumber',array($option['maintenance_mode_enable'],0,1),array(Portada_ThemeHelper::getFormName('maintenance_mode_enable',false),$invalidValue));
		
		if($Notice->isError())
		{
			$response['local']=$Notice->getError();
		}
		else
		{
			$response['global']['error']=0;
			Portada_ThemeOption::updateOption($option);
            
			$this->createCSSFile();
		}

		$response['global']['notice']=$Notice->createHTML(PORTADA_THEME_PATH_TEMPLATE.'notice.php');

		echo json_encode($response);
		exit;
	}
	
	/**************************************************************************/
	
	function publicInit()
	{		
		$this->prepareLibrary();
		
		$this->includeLibrary(Portada_ThemeOption::getOption('responsive_mode_enable'),null,array('responsive'));
		$this->includeLibrary(!Portada_ThemeOption::getOption('responsive_mode_enable'),null,array('responsive-disable'));

		if (is_singular()) wp_enqueue_script('comment-reply');
		
		$this->includeLibrary(!class_exists('TSThemeStyle'),null,array('ts-frontend'));
		$this->includeLibrary(!class_exists('PBPageBuilder'),null,array('pb-frontend','pb-frontend-main'));
		$this->includeLibrary(!class_exists('TFThemeFont'),null,array('tf-frontend','google-font-public'));
		
		$this->includeLibrary(Portada_ThemePlugin::isActive('wooCommerce'),null,array('portada-woocommerce'));
		
		if(Portada_ThemePlugin::isActive('wooCommerce'))
			$this->library['style']['ts-frontend']['dependencies']=array('woocommerce-general-css');
        
        $this->includeLibrary(is_rtl(),array(),array('jquery-dropkick-rtl'));
		
		$this->addLibrary('style',2);
		$this->addLibrary('script',2);
		
		$aPattern=array
		(
			'rightClick'			=>	'/^right_click_/',
			'selection'				=>	'/^copy_selection_/',
			'fancyboxImage'			=>	'/^fancybox_image_/',
			'goToPageTop'			=>	'/^go_to_page_top_/',
			'header'				=>	'/^header_/',
            'responsiveMode'        =>  '/^responsive_mode_/'
		);
		
		$option=Portada_ThemeOption::getOptionObject();
		
		foreach($aPattern as $indexPattern=>$valuePattern)
		{
			foreach($option as $index=>$value)
			{
				if(preg_match($valuePattern,$index,$result))
				{
					$nIndex=preg_replace($valuePattern,'',$index);
					$data[$indexPattern][$nIndex]=$value;
				}
			}
		}
		
		$data['config']['theme_url']=PORTADA_THEME_URL;
		$data['config']['ajax_url']=admin_url('admin-ajax.php');
		
		$data['config']['woocommerce']['enable']=(int)Portada_ThemePlugin::isActive('WooCommerce');
		
		$param=array
		(
			'l10n_print_after'=>'themeOption='.json_encode($data).';'
		);
			
		wp_localize_script('portada-public','themeOption',$param);
	}
		
	/**************************************************************************/

	function addPlugin()
	{
		$plugin=array
		(
			array
			(
				'name'                                                          =>	'Classic Editor',
				'slug'                                                          =>	'classic-editor',
				'required'                                                      =>	true,
				'force_activation'                                              =>	true,
				'force_deactivation'                                            =>	true
			),
			array
			(
				'name'                                                          =>	'Page Builder',
				'slug'                                                          =>	'page-builder',
				'source'                                                        =>	PORTADA_THEME_PATH_SOURCE.'page-builder.zip',
				'required'                                                      =>	true,
				'version'                                                       =>	'3.5',
				'force_activation'                                              =>	false,
				'force_deactivation'                                            =>	true
			),
			array
			(
				'name'                                                          =>	'Slider Revolution Responsive WordPress Plugin',
				'slug'                                                          =>	'revslider',
				'source'                                                        =>	PORTADA_THEME_PATH_SOURCE.'revslider.zip',
				'required'                                                      =>	false,
				'version'                                                       =>	'6.5.14',
				'force_activation'                                              =>	false,
				'force_deactivation'                                            =>	true
			),
			array
			(
				'name'                                                          =>	'Theme Styles',
				'slug'                                                          =>	'theme-style',
				'source'                                                        =>	PORTADA_THEME_PATH_SOURCE.'theme-style.zip',
				'required'                                                      =>	true,
				'version'                                                       =>	'4.6',
				'force_activation'                                              =>	false,
				'force_deactivation'                                            =>	true
			),
			array
			(
				'name'                                                          =>	'Theme Fonts',
				'slug'                                                          =>	'theme-font',
				'source'                                                        =>	PORTADA_THEME_PATH_SOURCE.'theme-font.zip',
				'required'                                                      =>	true,
				'version'                                                       =>	'2.9',
				'force_activation'                                              =>	false,
				'force_deactivation'                                            =>	true
			),			
			array
			(
				'name'                                                          =>	'Widget Area',
				'slug'                                                          =>	'widget-area',
				'source'                                                        =>	PORTADA_THEME_PATH_SOURCE.'widget-area.zip',
				'required'                                                      =>	false,
				'version'                                                       =>	'2.9',
				'force_activation'                                              =>	false,
				'force_deactivation'                                            =>	true
			),
			array
			(
				'name'                                                          =>	'Theme Demo Data Installer',
				'slug'                                                          =>	'theme-demo-data-installer',
				'source'                                                        =>	PORTADA_THEME_PATH_SOURCE.'theme-demo-data-installer.zip',
				'required'                                                      =>	false,
				'version'                                                       =>	'4.6',
				'force_activation'                                              =>	false,
				'force_deactivation'                                            =>	true
			),
			array
			(
				'name'                                                          =>	'Better WordPress Minify',
				'slug'                                                          =>	'bwp-minify',
				'required'                                                      =>	false,
				'force_activation'                                              =>	false,
				'force_deactivation'                                            =>	false
			),
 			array
			(
				'name'                                                          =>	'MailChimp for WordPress',
				'slug'                                                          =>	'mailchimp-for-wp',
				'required'                                                      =>	false,
				'force_activation'                                              =>	false,
				'force_deactivation'                                            =>	false
			),   
			array
			(
				'name'                                                          =>	'Classic Widgets',
				'slug'                                                          =>	'classic-widgets',
				'required'                                                      =>	false,
				'force_activation'                                              =>	false,
				'force_deactivation'                                            =>	false
			),
			array
			(
				'name'                                                          =>	'WooCommerce',
				'slug'                                                          =>	'woocommerce',
				'required'                                                      =>	false,
				'force_activation'                                              =>	false,
				'force_deactivation'                                            =>	false
			)
		);
	
		$config=array
		(
			'default_path'							=>	'',                      
			'menu'									=>	'tgmpa-install-plugins', 
			'has_notices'							=>	true,
			'dismissable'							=>	true,
			'dismiss_msg'							=>	'',
			'is_automatic'							=>	true,
			'message'								=>	'', 
			'strings'								=>	array
			(
				'page_title'						=>	__('Install Required Plugins','portada'),
				'menu_title'						=>	__('Install Plugins','portada'),
				'installing'						=>	__('Installing Plugin: %s','portada'),
				'oops'								=>	__('Something went wrong with the plugin API.','portada'),
				'notice_can_install_required'		=>	_n_noop('This theme requires the following plugin: %1$s.','This theme requires the following plugins: %1$s.','portada'),
				'notice_can_install_recommended'	=>	_n_noop('This theme recommends the following plugin: %1$s.','This theme recommends the following plugins: %1$s.','portada'),
				'notice_cannot_install'				=>	_n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.','portada'),
				'notice_can_activate_required'		=>	_n_noop('The following required plugin is currently inactive: %1$s.','The following required plugins are currently inactive: %1$s.','portada'),
				'notice_can_activate_recommended'	=>	_n_noop('The following recommended plugin is currently inactive: %1$s.','The following recommended plugins are currently inactive: %1$s.','portada'),
				'notice_cannot_activate'			=>	_n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.','portada'),
				'notice_ask_to_update'				=>	_n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.','portada'),
				'notice_cannot_update'				=>	_n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.','portada'),
				'install_link'						=>	_n_noop('Begin installing plugin','Begin installing plugins','portada'),
				'activate_link'						=>	_n_noop('Begin activating plugin','Begin activating plugins','portada'),
				'return'							=>	__('Return to Required Plugins Installer','portada'),
				'plugin_activated'					=>	__('Plugin activated successfully.','portada'),
				'complete'							=>	__('All plugins installed and activated successfully. %s','portada'),
				'nag_type'							=>	'updated'
			)
		);

		tgmpa($plugin,$config);
	}
	
	/**************************************************************************/
	
	function createCSSFile()
	{
		if($this->createMultisitePath()===false) return;
		
		$content=null;
		
		$Validation=new Portada_ThemeValidation();
		$ResponsiveMode=new Portada_ThemeResponsiveMode();
		
		Portada_ThemeOption::refreshOption();

		$media=$ResponsiveMode->getMedia();

		if(Portada_ThemeOption::getOption('responsive_mode_enable')!=1) $media=$media[1];
		
		foreach($media as $index=>$value)
		{
			if($Validation->isNotEmpty(Portada_ThemeOption::getOption('custom_css_responsive_'.$index)))
			{
				if((array_key_exists('min-width',$value)) && (array_key_exists('max-width',$value)))
				{
					$content.=
					'
					@media only screen  and (min-width:'.$value['min-width'].'px) and (max-width:'.$value['max-width'].'px)
					{
					'.Portada_ThemeOption::getOption('custom_css_responsive_'.$index).'
					}
					';
				}
				else
				{
					$content.=Portada_ThemeOption::getOption('custom_css_responsive_'.$index);
				}
			}
		}
		
		$file=PORTADA_THEME_PATH_MULTISITE_SITE_STYLE.'style.css';
		
		$ThemeWPFileSystem=new Portada_ThemeWPFileSystem();
		if($ThemeWPFileSystem->put_contents($file,$content,0755)===false) return(false);

		return(true);		
	}
		
	/**************************************************************************/
	
	function createMultisitePath()
	{
		$data=array
		(
			PORTADA_THEME_PATH_MULTISITE_SITE,
			PORTADA_THEME_PATH_MULTISITE_SITE_STYLE
		);
		
		foreach($data as $path)
		{
			if(!Portada_ThemeFile::dirExist($path)) @mkdir($path);			
			if(!Portada_ThemeFile::dirExist($path)) return(false);
		}
		
		return(true);
	}
	
	/**************************************************************************/
	
	function adminNotice()
	{
		global $current_user;

		if(array_key_exists('portada-dismiss-notice-1',$_GET))
			add_user_meta($current_user->ID,'portada-dismiss-notice-1','true',true);

		if(get_user_meta($current_user->ID,'portada-dismiss-notice-1')) return; 
		
		$file=PORTADA_THEME_PATH_MULTISITE_SITE_STYLE.'style.css';

		if(!is_writable($file))
		{
			echo 
			'
				<div class="notice notice-error is-dismissible"> 
					<p>
						<strong>'.sprintf(__('<b>File %s cannot be created. Please make sure that this location is writeable.</b>','portada'),str_replace('\\','/',$file)).'</strong>
						<a href="?portada-dismiss-notice-1"><b>'.esc_html__('Dismiss','portada').'</b></a>
					</p>
				</div>					
			';				
		}
	}
	
	/**************************************************************************/
	
	function setPostMetaDefault(&$meta,$part='all')
	{
		if(in_array($part,array('general','all')))
		{
			Portada_ThemeHelper::setDefaultOption($meta,'widget_area_sidebar',-1);
			Portada_ThemeHelper::setDefaultOption($meta,'widget_area_sidebar_location',-1);
		}
		
		if(in_array($part,array('header','all')))
		{
			Portada_ThemeHelper::setDefaultOption($meta,'header_top_social_icon_enable',-1);
			Portada_ThemeHelper::setDefaultOption($meta,'header_top_bar_search_enable',-1);
			Portada_ThemeHelper::setDefaultOption($meta,'header_logo_enable',-1);
			Portada_ThemeHelper::setDefaultOption($meta,'header_menu_id',-1);
			Portada_ThemeHelper::setDefaultOption($meta,'header_revolution_slider_id',-1);
		}	
		
		if(in_array($part,array('footer','all')))
		{
			Portada_ThemeHelper::setDefaultOption($meta,'footer_instagram_enable',-1);
			Portada_ThemeHelper::setDefaultOption($meta,'footer_logo_enable',-1);
			Portada_ThemeHelper::setDefaultOption($meta,'footer_menu_1',-1);
			Portada_ThemeHelper::setDefaultOption($meta,'footer_menu_2',-1);
			Portada_ThemeHelper::setDefaultOption($meta,'footer_menu_3',-1);
			Portada_ThemeHelper::setDefaultOption($meta,'footer_bottom_enable',-1);
		}	
	}
	
	/**************************************************************************/
	
	function filterBodyClass($bodyClass)
	{
		$categoryId=(int)get_query_var('cat');
		
		if(is_tag() || is_author() || is_category($categoryId) || is_day() || is_archive() || is_search() || is_404())
		{
			$Page=new Portada_ThemePage();
			
			$bodyClass[]='page-template';
			array_push($bodyClass,join(' ',$Page->getCurrentTemplateCSSClass()));
		}
		
		if(Portada_ThemeOption::getOption('responsive_mode_enable')==1)
			array_push($bodyClass,'theme-responsive-mode-enable');

		return($bodyClass);
	}
			
	/**************************************************************************/
	
	function passwordForm()
	{
		$html=
		'
			<form method="post" class="theme-post-password-form" action="'.wp_login_url().'?action=postpass">
				<div>'.esc_html__('This content is password protected. To view it please enter your password below:','portada').'</div>
				<div><label for="pwbox-160" class="theme-infield-label">'.esc_html__('Password:','portada').'</label><input type="password" size="20" id="pwbox-160" name="post_password"></div>
				<div><input type="submit" name="Submit" value="'.esc_attr__('Submit','portada').'"></div>
			</form>
		';
		
		return($html);
	}

	/**************************************************************************/
	
	function createOpenGraphMetaTag()
	{
		$html=null;
		
		global $portadaParentPost;
		
		if(Portada_ThemeOption::getOption('open_graph_enable')!=1) return($html);
		
		$Post=new Portada_ThemePost();
		
		$html='<meta property="og:title" content="'.$Post->getTitle(false,false).'" />';
		$html.='<meta property="og:url" content="'.get_the_permalink($portadaParentPost->post->ID).'" />';
		
		if(is_single())
		{
			if(!has_post_thumbnail($portadaParentPost->post)) return($html);
			
			list($link)=wp_get_attachment_image_src(get_post_thumbnail_id($portadaParentPost->post->ID),'portada-image-750');
			$html.='<meta property="og:image" content="'.esc_url($link).'" />';
		}
		
		return($html);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/