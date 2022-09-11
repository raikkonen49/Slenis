<?php

// sidebars
if(function_exists('register_sidebar'))
{
	register_sidebar( 'name=Sidebar right&id=sideright');
}

// image sizes
if ( function_exists( 'add_theme_support' ) ) {

add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)

add_theme_support( 'post-thumbnails', array( 'soc' ) );
add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)


add_image_size( 'full', 9999, 9999 );
add_image_size( 'work-thumb', 700, 9999 );
add_image_size( 'thumb', 275, 9999, true );

}

// option page

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

// excerpt length (chars)
function wpdocs_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


add_filter('excerpt_more', function($more) {
	return '...';
});

// Gallery CPT
function my_custom_post_gallery() {
    $labels = array(
        'name'               => _x( 'gallery', 'post type general name' ),
        'singular_name'      => _x( 'gallery', 'post type singular name' ),
        'add_new'            => _x( 'Add new', 'book' ),
        'add_new_item'       => __( 'Add new' ),
        'edit_item'          => __( 'Edit' ),
        'new_item'           => __( 'New gallery' ),
        'all_items'          => __( 'All gallery' ),
        'view_item'          => __( 'View gallery' ),
        'search_items'       => __( 'Search gallery' ),
        'not_found'          => __( 'Nėra' ),
        'not_found_in_trash' => __( 'Nėra' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Galerija'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'gallery desc.',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes'),
        'has_archive'   => true,
        'hierarchical'  => true,
        'rewrite'       => array('slug' => 'galerija','with_front' => false),
        'query_var'     => true,
        // 'rewrite'     => true,
        // 'publicly_queryable' => false,
    );
    register_post_type( 'gallery', $args );
}
add_action( 'init', 'my_custom_post_gallery' );


add_action( 'init', 'create_metai_tax' );

function create_metai_tax() {
	register_taxonomy(
		'metai',
		array( 'gallery', 'Metai' ),
		array(
			'label' => __( 'Metai' ),
			'rewrite' => array('slug' => 'metai', 'with_front' => false ),
			'hierarchical' => true,
            'show_ui' => true,
		)
	);
}


?>
