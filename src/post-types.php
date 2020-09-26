<?php
/**
 * This file adds functions and actions for classes.
 *
 * @package cunis
 */

if ( ! function_exists( 'cunis_fas_post_type' ) ) :

	/**
	 * FAQ Post Type
	 *
	 * @return void
	 */
	function cunis_faq_post_type() {

		$labels = array(
			'name'                  => _x( 'faqs', 'Post Type General Name', 'cunis' ),
			'singular_name'         => _x( 'faq', 'Post Type Singular Name', 'cunis' ),
			'menu_name'             => __( 'FAQ\'s', 'cunis' ),
			'name_admin_bar'        => __( 'FAQ\'s', 'cunis' ),
			'archives'              => __( 'FAQ\'s Archives', 'cunis' ),
			'attributes'            => __( 'FAQ Attributes', 'cunis' ),
			'parent_item_colon'     => __( 'Parent FAQ:', 'cunis' ),
			'all_items'             => __( 'All Items', 'cunis' ),
			'add_new_item'          => __( 'Add New Item', 'cunis' ),
			'add_new'               => __( 'Add New', 'cunis' ),
			'new_item'              => __( 'New FAQ', 'cunis' ),
			'edit_item'             => __( 'Edit FAQ', 'cunis' ),
			'update_item'           => __( 'Update FAQ', 'cunis' ),
			'view_item'             => __( 'View FAQ', 'cunis' ),
			'view_items'            => __( 'View FAQ', 'cunis' ),
			'search_items'          => __( 'Search FAQ', 'cunis' ),
			'not_found'             => __( 'Not found', 'cunis' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'cunis' ),
			'featured_image'        => __( 'Featured Image', 'cunis' ),
			'set_featured_image'    => __( 'Set featured image', 'cunis' ),
			'remove_featured_image' => __( 'Remove featured image', 'cunis' ),
			'use_featured_image'    => __( 'Use as featured image', 'cunis' ),
			'insert_into_item'      => __( 'Insert into FAQ', 'cunis' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'cunis' ),
			'items_list'            => __( 'FAQ list', 'cunis' ),
			'items_list_navigation' => __( 'FAQ list navigation', 'cunis' ),
			'filter_items_list'     => __( 'Filter FAQ list', 'cunis' ),
		);
		$args   = array(
			'label'                 => __( 'faq', 'cunis' ),
			'description'           => __( 'frequently Asked Questions', 'cunis' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'custom-fields' ),
			'hierarchical'          => false,
			'public'                => false,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => false,
		);
		register_post_type( 'faq', $args );

	}
	// add_action( 'init', 'cunis_faq_post_type', 0 );

endif;


/**
 * Add order column to admin listing screen for platform
 *
 * @param array $platform_columns array of columns.
 * @return array new Order column.
 */
function cunis_add_platform_column( $platform_columns ) {
	$platform_columns['menu_order'] = 'Order';
	return $platform_columns;
}
// add_filter( 'manage_platform_posts_columns', 'cunis_add_platform_column' );


/**
 * Add menu order to post column
 *
 * @param array $name order menu column.
 * @return void
 */
function cunis_show_platform_order_column( $name ) {
	global $post;
	switch ( $name ) {
		case 'menu_order':
			$order = $post->menu_order;
			echo esc_html( $order );
			break;
		default:
			break;
	}
}
// add_action( 'manage_platform_posts_custom_column', 'cunis_show_platform_order_column', 10, 2 );

/**
 * Platform admin sort by menu order
 *
 * @param array $columns the columnss to sort by.
 * @return array new array returned.
 */
function cunis_order_column_register_sortable( $columns ) {
	$columns['menu_order'] = 'menu_order';
	return $columns;
}

// add_filter( 'manage_edit-platform_sortable_columns', 'cunis_order_column_faqegister_sortable' );


if ( ! function_exists( 'cunis_testimonial_post_type' ) ) :

	/**
	 * testimonial Post Type
	 *
	 * @return void
	 */
	function cunis_testimonial_post_type() {

		$labels = array(
			'name'                  => _x( 'testimonial', 'Post Type General Name', 'cunis' ),
			'singular_name'         => _x( 'testimonial', 'Post Type Singular Name', 'cunis' ),
			'menu_name'             => __( 'Testimonial\'s', 'cunis' ),
			'name_admin_bar'        => __( 'Testimonial\'s', 'cunis' ),
			'archives'              => __( 'Testimonial\'s Archives', 'cunis' ),
			'attributes'            => __( 'Testimonial Attributes', 'cunis' ),
			'parent_item_colon'     => __( 'Parent Testimonial:', 'cunis' ),
			'all_items'             => __( 'All Items', 'cunis' ),
			'add_new_item'          => __( 'Add New Item', 'cunis' ),
			'add_new'               => __( 'Add New', 'cunis' ),
			'new_item'              => __( 'New Testimonial', 'cunis' ),
			'edit_item'             => __( 'Edit Testimonial', 'cunis' ),
			'update_item'           => __( 'Update Testimonial', 'cunis' ),
			'view_item'             => __( 'View Testimonial', 'cunis' ),
			'view_items'            => __( 'View Testimonial', 'cunis' ),
			'search_items'          => __( 'Search Testimonial', 'cunis' ),
			'not_found'             => __( 'Not found', 'cunis' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'cunis' ),
			'featured_image'        => __( 'Featured Image', 'cunis' ),
			'set_featured_image'    => __( 'Set featured image', 'cunis' ),
			'remove_featured_image' => __( 'Remove featured image', 'cunis' ),
			'use_featured_image'    => __( 'Use as featured image', 'cunis' ),
			'insert_into_item'      => __( 'Insert into Testimonial', 'cunis' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'cunis' ),
			'items_list'            => __( 'Testimonial list', 'cunis' ),
			'items_list_navigation' => __( 'Testimonial list navigation', 'cunis' ),
			'filter_items_list'     => __( 'Filter Testimonial list', 'cunis' ),
		);
		$args   = array(
			'label'                 => __( 'testimonial', 'cunis' ),
			'description'           => __( 'frequently Asked Questions', 'cunis' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'custom-fields' ),
			'hierarchical'          => false,
			'public'                => false,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => false,
		);
		register_post_type( 'testimonial', $args );

	}
	add_action( 'init', 'cunis_testimonial_post_type', 0 );

endif;
