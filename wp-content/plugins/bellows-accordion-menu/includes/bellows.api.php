<?php

function bellows_menu_toggle( $menu_id, $content, $btn_class, $args ){
	$content = apply_filters( 'bellows_menu_toggle_content', $content, $menu_id, $args );
	$btn = '<button class="bellows-menu-toggle '.$btn_class.'" aria-controls="'.$menu_id.'">'.$content.'</button>';
	return apply_filters( 'bellows_menu_toggle', $btn, $menu_id, $args );
}

function bellows( $config_id = 'main' , $menu_args = array() ){

	_BELLOWS()->set_current_config_id( $config_id );

	$menu_args['bellows_source'] = 'menu';
	$args = bellows_get_nav_menu_args( $config_id , $menu_args );

	return bellows_menu_toggle_default( $args['container_id'], $config_id, $args ) . wp_nav_menu( $args );
}


add_shortcode( 'bellows' , 'bellows_shortcode' );
function bellows_shortcode( $atts, $content = null ){

	extract( shortcode_atts( array(
		'config_id'			=> 'main',
		'theme_location' 	=> '',
		'menu'				=> '',


	), $atts));

	$args = array();
	$args['echo'] = false;


	if( $theme_location ){
		$args['theme_location'] = $theme_location;
	}
	if( $menu ){
		$args['menu'] = $menu;
	}

	return bellows( $config_id , $args );


}


function bellows_terms( $config_id = 'main' , $term_args = array() , $menu_args = array() ){

	if( !BELLOWS_PRO ){
		return bellows_admin_notice(
			'Upgrade to <a href="' . BELLOWS_PRO_URL . '">Bellows Pro</a> to use the Terms Autopopulation feature.' ,
			false
		);
	}

	// If 'taxonomies' is passed, convert to 'taxonomy'
	if( isset( $term_args['taxonomies'] ) && !isset( $term_args['taxonomy'] ) ){
		$term_args['taxonomy'] = $term_args['taxonomies'];
	}

	$term_args_defaults = array(
		'taxonomy' 		=> 'category',
		'number'		=> 0,
		'offset'		=> '',
		'child_of'		=> 0,
		'order'			=> 'ASC',
		'orderby'		=> 'name',
		'hide_empty'	=> true,
		'hierarchical' 	=> true,
		'exclude'		=> '',
	);
	$term_args = wp_parse_args( $term_args, $term_args_defaults );
	

	_BELLOWS()->set_current_config_id( $config_id );


	$menu_args['bellows_source'] = 'terms';
	$menu_args['bellows_terms'] = $term_args;
	$menu_args['bellows_populate_terms'] = true;

	// Assign the depth, but only if it's actually set - if we set it to '', which is the default coming from
	// the generator due to the empty string text field, that blows everything up
	if( isset( $term_args['depth'] ) && $term_args['depth'] !== '' ){
		$menu_args['depth'] = $term_args['depth'];
	}


	$menu_args = bellows_get_nav_menu_args( $config_id , $menu_args );
	// bellp( $menu_args );

	//add_filter( 'wp_get_nav_menu_items' , 'bellows_populate_terms' , 10, 3 );
	add_filter( 'wp_nav_menu_objects' , 'bellows_populate_terms' , 10, 2 );
	$menu = wp_nav_menu( $menu_args );
	remove_filter( 'wp_nav_menu_objects' , 'bellows_populate_terms' , 10, 2 );
	//remove_filter( 'wp_get_nav_menu_items' , 'bellows_populate_terms' , 10, 3 );

	//TODO: ECHO OR RETURN CHECK

	return $menu;
}


add_shortcode( 'bellows_terms' , 'bellows_terms_shortcode' );
function bellows_terms_shortcode( $atts, $content = null ){

	$term_args = shortcode_atts( array(
		'config_id'			=> 'main',
		
		'taxonomy'			=> 'category',
		'number'			=> '',
		'offset'			=> '',
		'orderby'			=> 'name',
		'order'				=> 'ASC',
		'hide_empty'		=> 'true',
		'hierarchical'		=> 'true',
		'child_of'			=> 0,
		'depth'				=> 0,
		'exclude'			=> '',

	), $atts);

	extract( $term_args );

	$menu_args = array();
	$menu_args['echo'] = false;

	$taxonomies = isset( $atts['taxonomies'] ) ? $atts['taxonomies'] : $taxonomy;

	if( $taxonomies ){

		unset( $term_args['config_id'] );

		//Taxonomies
		$taxonomies = explode( ',' , $taxonomies );
		foreach( $taxonomies as $key => $tax ){
			$taxonomies[$key] = trim( $tax );
		}
		$term_args['taxonomy'] = $taxonomies;

		//TODO: Handle booleans that are strings
		if( $term_args['hide_empty'] == 'false' ) $term_args['hide_empty'] = false;
		else if( $term_args['hide_empty'] == 'true'  ) $term_args['hide_empty'] = true;
		if( $term_args['hierarchical'] == 'false' ) $term_args['hierarchical'] = false;
		else if( $term_args['hierarchical'] == 'true' ) $term_args['hierarchical'] = true;

		//if( $child_of ) $term_args['child_of'] = $child_of;

		//bellp( $term_args );
		return bellows_terms( $config_id , $term_args , $menu_args );
	}

	//else need to set a taxonomy (alert?)

}




function bellows_posts( $config_id = 'main' , $post_args = array() , $menu_args = array( 'echo' => true ) ){

	if( !BELLOWS_PRO ){
		return bellows_admin_notice(
			'Upgrade to <a href="' . BELLOWS_PRO_URL . '">Bellows Pro</a> to use the Posts Autopopulation feature.' ,
			false
		);
	}

	$post_arg_defaults = array(
		'post_type'		=> 'page',
		'post_parent'	=> '', //0,
		'include_parent' => false,
		'numberposts' 	=> -1,
		'offset'		=> 0,
		'orderby'		=> 'title',
		'order'			=> 'ASC',
		'author'		=> '',
		'cat'			=> '', //ID
		'category__and'	=> '',
		'category__in'	=> '',
		'tag_id'			=> '', //ID
		'tag__and'		=> '',
		'tag__in'		=> '',
		'depth'			=> 2,
		'exclude'		=> '',

	);

	$taxonomies = get_taxonomies( array(
					'public'	=> true,
					//'_builtin'	=> true,
					) );
	foreach( $taxonomies as $tax_name ){
		$post_arg_defaults['tax_'.$tax_name] = '';
	}

	$post_args = wp_parse_args( $post_args, $post_arg_defaults );
//bellp( $post_args );

	//Inherit current page as parent
	if( $post_args['post_parent'] < 0 ){
		$post_args['post_parent'] = bellows_get_dynamic_post_parent( $post_args['post_parent'] );
	}
//bellp( $post_args );

	foreach( $post_args as $arg_name => $val ){

		//Expand taxonomy queries
		if( $val && strpos( $arg_name , 'tax_' ) === 0 ){
			$tax_id = substr( $arg_name , 4 );
			unset( $post_args[$arg_name] );

			if( !isset( $post_args['tax_query'] ) ){
				$post_args['tax_query'] = array();
			}
			$post_args['tax_query'][] = array(
				'taxonomy'	=> $tax_id,
				'field'		=> 'term_id',
				'terms'		=> $val,
			);
		}
	}
	//bellp( $post_args );

	_BELLOWS()->set_current_config_id( $config_id );


	$menu_args['bellows_source'] = 'posts';
	$menu_args['bellows_posts'] = $post_args;
	$menu_args['bellows_populate_posts'] = true;

	$menu_args = bellows_get_nav_menu_args( $config_id , $menu_args );

	//bellp( get_term( 73, 'nav_menu' ) );

	// bellp( $post_args );
	// bellp( $menu_args );

	//add_filter( 'wp_get_nav_menu_items' , 'bellows_populate_terms' , 10, 3 );
	//add_filter( 'wp_get_nav_menu_object' , 'bellows_dummy_menu_object' , 10 );
	add_filter( 'wp_nav_menu_objects' , 'bellows_populate_posts' , 10, 2 );
	$menu = wp_nav_menu( $menu_args );
	remove_filter( 'wp_nav_menu_objects' , 'bellows_populate_posts' , 10, 2 );
	//remove_filter( 'wp_get_nav_menu_items' , 'bellows_populate_terms' , 10, 3 );

	//TODO: ECHO OR RETURN CHECK
	return $menu;

}

function bellows_posts_shortcode( $atts, $content = null ){

	$post_arg_defaults = array(
		'config_id'			=> 'main',
		'post_type'			=> 'page',
		'post_parent'		=> '',
		'include_parent'	=> false,
		'numberposts'		=> -1,
		'orderby'			=> 'title',
		'order'				=> 'ASC',
		'depth'				=> 2,
		'exclude'			=> '',
	);
	$taxonomies = get_taxonomies( array(
					'public'	=> true,
					//'_builtin'	=> true,
					) );
	foreach( $taxonomies as $tax_name ){
		$post_arg_defaults['tax_'.$tax_name] = '';
	}

	$post_args = shortcode_atts( $post_arg_defaults , $atts);

	extract( $post_args );

	//Menu Arguments
	$menu_args = array();
	$menu_args['echo'] = false;


	//Post Query Arguments
	unset( $post_args['config_id'] );


	// Handle booleans that are strings
	if( $post_args['include_parent'] === 'false' ) $post_args['include_parent'] = false;
	else if( $post_args['include_parent'] === 'true'  ) $post_args['include_parent'] = true;


	return bellows_posts( $config_id , $post_args , $menu_args );

}
add_shortcode( 'bellows_posts' , 'bellows_posts_shortcode' );





function bellows_menu( $query_id , $menu_args = array() ){

	if( !$query_id ){
		bellows_admin_notice( 'No Saved Query ID provided, cannot display menu' );
		return;
	}

	$query = get_post( $query_id );
	if( $query->post_type != 'bellows_query' ){
		bellows_admin_notice( 'Post is not a Bellow Query ' . '['.$query_id.'].' );
		return;
	}


	$query_type = get_post_meta( $query_id , 'query_type' , true );
	$query_args = get_post_meta( $query_id , 'query_args' , true );
//bellp( $query_args );
	$config_id = $query_args['config_id'];
	unset( $query_args['config_id'] );

	switch( $query_type ){
		case 'post':
			return bellows_posts( $config_id , $query_args , $menu_args );
			break;
		case 'term':
			//Convert saved string to array if necessary
			$taxonomies = explode( ',' , $query_args['taxonomies'] );
			foreach( $taxonomies as $key => $tax ){
				$taxonomies[$key] = trim( $tax );
			}
			$query_args['taxonomies'] = $taxonomies;

			return bellows_terms( $config_id , $query_args , $menu_args );
			break;

		default:
			break;
	}


}
function bellows_menu_shortcode( $atts , $content = null ){
	$defaults = array(
		'qid'	=> 0,
	);
	extract( shortcode_atts( $defaults , $atts ) );

	return bellows_menu( $qid , array( 'echo' => false ));
}
add_shortcode( 'bellows_menu' , 'bellows_menu_shortcode' );
