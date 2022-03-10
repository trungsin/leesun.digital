"use strict";
/******************************************************************************/
/******************************************************************************/

jQuery(document).ready(function($) 
{	
	/**************************************************************************/
	
	var element=$('.to').themeOptionElement();
	element.bindBrowseMedia('.to-button-browse');
	
	/**************************************************************************/
		
	$('.to-button-gallery').on('click',function(e)
	{
		e.preventDefault();

		var hidden=$(this).next('input[type="hidden"]').first();
		var shortcode='[gallery ids="'+hidden.val()+'"]';

		wp.media.gallery.edit(shortcode).on('update',function(g) 
		{
			var id_array=[];
			$.each(g.models,function(id,img)
			{
				id_array.push(img.id); 
			});

			hidden.val(id_array.join(','));
		});
	});					
			
	/**************************************************************************/
});

/******************************************************************************/
/******************************************************************************/