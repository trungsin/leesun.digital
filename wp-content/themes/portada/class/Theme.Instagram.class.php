<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeInstagram
{
	/**************************************************************************/
	
	function __construct()
	{
		
	}
	
	/**************************************************************************/
	
	function getLatestUserFeed($token,$count)
	{
		$html=null;
		
		$field="id,caption,media_type,media_url,permalink";

		$url='https://graph.instagram.com/me/media?fields='.$field.'&access_token='.$token.'&limit='.$count;
		
		$data=json_decode(file_get_contents($url),true,512,JSON_BIGINT_AS_STRING);
	
		if(is_array($data))
		{
			if((array_key_exists('data',$data)) && (count($data['data'])))
			{
				foreach($data['data'] as $value)
				{
					if($value['media_type']==='IMAGE')
					{
						$html.=
						'
							<li>
								<a href="'.esc_url($value['permalink']).'" target="_blank">
									<img src="'.esc_url($value['media_url']).'"/>
								</a>
							</li>
						';
					}
				}
				
				$html=
				'
					<ul class="theme-instagram-feed">
						'.$html.'
					</ul>
				';
			}
		}

		return($html);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/