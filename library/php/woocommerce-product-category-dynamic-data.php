<?php
add_filter( 'oxygen_custom_dynamic_data', 'oxys_dynamic_data_product_category', 10, 1 );


function oxys_dynamic_data_product_category( $dynamic_data ) {
	global $post;
	
	$properties = '';

	$field_data = array(
		'name' => __( 'Product Category Image', 'oxygen-woocommerce' ),
		// Name of the field as it displays in Oxygen
		'mode' => 'image',
		// Available modes: 'content', 'custom-field', 'link' and 'image'
		'position' => 'Archive',
		// Available positions: 'Post', 'Author', 'User', 'Featured Image', 'Current User', 'Archive' 'Blog Info'
		'data' => 'product_cat_img',
		// Slug of the field in Oxygen, will render as 'custom_field_name
		'handler' => 'oxys_product_thumbnail_callback',
		// Must be a function callback
		'properties' => $properties
	);
	$dynamic_data[] = $field_data;
	// Add the field to Dynamic Data

	return $dynamic_data;
}

function oxys_product_thumbnail_callback($atts) {
	global $wp_query; // get the query object
	
	if($wp_query) {
		$cat_obj = $wp_query->get_queried_object();
		$term_id = $cat_obj->term_id;
		$thumbnail_id = get_woocommerce_term_meta( $term_id, 'thumbnail_id', true );
		$image = wp_get_attachment_url( $thumbnail_id );
		return $image;
	}
}
?>
