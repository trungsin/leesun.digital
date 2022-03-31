<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeSocialProfile
{
	/**************************************************************************/
	
	function __construct()
	{		
		$this->socialProfile=array
		(
			'behance'															=>	array('Behance','behance','',''),
			'deviantart'														=>	array('Deviantart','deviantart','',''),
			'dribbble'															=>	array('Dribbble','dribbble','',''),
			'email'																=>	array('E-mail','email','',''),
			'facebook'															=>	array('Facebook','facebook','https://www.facebook.com/QuanticaLabs/','2'),
			'flickr'															=>	array('Flickr','flickr','',''),
			'foursquare'														=>	array('Foursquare','foursquare','',''),
			'github'															=>	array('Github','github','',''),
			'googleplus'														=>	array('Google+','googleplus','#','3'),
			'houzz'																=>	array('Houzz','houzz','',''),
			'instagram'															=>	array('Instagram','instagram','https://www.instagram.com/quanticalabs/','5'),
			'linkedin'															=>	array('Linkedin','linkedin','',''),
			'paypal'															=>	array('Paypal','paypal','',''),
			'pinterest'															=>	array('Pinterest','pinterest','http://pinterest.com/quanticalabs','4'),
			'reddit'															=>	array('Reddit','reddit','',''),
			'rss'																=>	array('RSS','rss','',''),
			'skype'																=>	array('Skype','skype','',''),
			'soundcloud'														=>	array('Soundcloud','soundcloud','',''),
			'spotify'															=>	array('Spotify','spotify','',''),
			'stumbleupon'														=>	array('Stumbleupon','stumbleupon','',''),
			'tumblr'															=>	array('Tumblr','tumblr','',''),
			'twitter'															=>	array('Twitter','twitter','https://twitter.com/quanticalabs','1'),
			'vine'																=>	array('Vine','vine','',''),
			'vimeo'																=>	array('Vimeo','vimeo','',''),
			'weibo'																=>	array('Weibo','weibo','',''),
			'xing'																=>	array('Xing','xing','',''),
			'yelp'																=>	array('Yelp','yelp','',''),
			'youtube'															=>	array('Youtube','youtube','',''),
			'vk'																=>	array('VK','vk','','')
		);	
	}
	
	/**************************************************************************/
	
	function createSocialProfile($socialProfile=null)
	{
		$Plugin=new Portada_ThemePlugin();
		$Validation=new Portada_ThemeValidation();
		
		if(!$Plugin->isActive('PBPageBuilder')) return;
		
		if(!is_array($socialProfile))
		{
			$socialProfile=array();
			
			foreach($this->socialProfile as $index=>$value)
			{
				$address=Portada_ThemeOption::getOption('social_profile_address_'.$index);
				
				if($Validation->isEmpty($address)) continue;
				
				$socialProfile[$index]['order']=Portada_ThemeOption::getOption('social_profile_order_'.$index);
				$socialProfile[$index]['address']=$address;
			}
		}
		
		$shortcode=null;
		foreach($socialProfile as $index=>$value)
			$shortcode.=' native_color_enable ="1" profile_'.$index.'_url="'.$value['address'].'" profile_'.$index.'_order="'.$value['order'].'"';
		
		return(do_shortcode('[pb_social_icon '.$shortcode.'][/pb_social_icon]'));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/