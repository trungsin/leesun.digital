<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeMenu
{
	/**************************************************************************/

	function __construct()
	{
		
	}
	
	/**************************************************************************/
	
	function getMenuDictionary($useNone=true,$useGlobal=true,$useLeftUnchaged=false)
	{
		$menu=get_terms('nav_menu');
		
		$data=array();
		
		if($useNone) $data[0]=array(__('[None]','portada'));
		if($useGlobal) $data[-1]=array(__('[Use global settings]','portada'));
		if($useLeftUnchaged) $data[-10]=array(__('[Left unchanged]','portada'));

		foreach($menu as $singlePost)
			$data[$singlePost->term_id]=array($singlePost->name);
		
		return($data);
	}
	
	/**************************************************************************/
	
	function create()
	{
		global $portadaParentPost;
		
		$menuId=0;
		$locationId='header_menu';
		
		$menu=wp_get_nav_menus();
		$menuLocation=get_nav_menu_locations();

		if(isset($menuLocation[$locationId])) 
		{
			foreach($menu as $m)
			{
				if($m->term_id==$menuLocation[$locationId])
					$menuId=$m->term_id;
			}
		}
		
		if($menuId==0)
			if(Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'header_menu_id')==0) return;
		if($menuId==0)
			$menuId=Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'header_menu_id');
		
		$classMenu=array('theme-header-menu-default');
		$classMenuResponsive=array('theme-header-menu-responsive');

		$class=array('theme-header-menu');

		$menuAttribute=array
		(
			'menu'				=>	$menuId,
			'walker'			=>	new Portada_ThemeMenuWalker(),
			'menu_class'		=>	'theme-clear-fix sf-menu',
			'container'			=>	'',
			'container_class'	=>	'',
			'echo'				=>	0,
			'items_wrap'		=>	'<ul class="%2$s">%3$s</ul>'
		);

		$menuResponsiveAttribute=array
		(
			'menu'				=>	$menuId,
			'walker'			=>	new Portada_ThemeMenuWalker(),
			'menu_class'		=>	'theme-clear-fix',
			'container'			=>	'',
			'container_class'	=>	'',
			'echo'				=>	0,
			'items_wrap'		=>	'<ul class="%2$s">%3$s</ul>'
		);
	
		$htmlWooCommerce=null;
		// if(Portada_ThemePlugin::isActive('WooCommerce'))
		// {
		// 	global $woocommerce;
		// 	$htmlWooCommerce=
		// 	'
		// 		<div class="theme-header-menu-responsive-woocommerce-icon">
		// 			<a class="theme-woocommerce-icon" href="'.esc_url(wc_get_cart_url()).'">
		// 				<span>'.(int)$woocommerce->cart->cart_contents_count.'</span>
		// 			</a>
		// 		</div>
		// 	';
		// }
	
		if(Portada_ThemeOption::getGlobalOption($portadaParentPost->post,'header_top_social_icon_enable')==1)
		{
			$SocialProfile=new Portada_ThemeSocialProfile();
			$htmlSocialProfile=
			'
				<div class="theme-header-menu-responsive-social-profile">
					'.$SocialProfile->createSocialProfile() .'
				</div>				
			';
		}
		?>
<style type="text/css">
.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
}

.overlay-content {
  position: relative;
  top: 46%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}

.overlay .closebtn:hover {
  color: #ccc;
}

.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: left;
  width: 80%;
  background: white;
}

.overlay input[type=text]:hover {
  background: #f1f1f1;
}

.overlay button {
  float: left;
  width: 20%;
  padding: 15px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background: #bbb;
}
</style><div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
<script>
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}
document.getElementById("myOverlay").children.addEventListener("click", document.getElementById("myOverlay").style.display = "block");

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
</script>
		<?php
		$html=
		'
			<div class="theme-header-menu-box"></div>
			<div'.Portada_ThemeHelper::createClassAttribute($class).'>
				<div'.Portada_ThemeHelper::createClassAttribute($classMenu).'>
					'.wp_nav_menu($menuAttribute).'
				</div>
				<div'.Portada_ThemeHelper::createClassAttribute($classMenuResponsive).'>
					<div class="theme-clear-fix">
						<a href="#"></a>
						<img style="height:25px; width:108px; display:inline;" id="logomobile" src="'.esc_url(Portada_ThemeOption::getOption('header_logo_src')).'"/>
						'.$htmlWooCommerce.'
						<div class="theme-header-top-bar-search">
								<form action="'.get_site_url().'" method="GET">
									<div>
										<input type="text" id="s_" name="s" value=""/>
									</div>
								</form>
							</div>		
						
					</div>
					'.wp_nav_menu($menuResponsiveAttribute).'
				</div>
			</div>
		';

		return($html);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/