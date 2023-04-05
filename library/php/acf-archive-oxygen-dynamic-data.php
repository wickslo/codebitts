<?php
/**
 * ACF Archive Dynamic Data
 * 
 * @param array $dynamic_data - the ACF field name/slug 
 * @return array $dynamic_data - the results of getting the ACF field
 */
add_filter('oxygen_custom_dynamic_data', 'bitt_acf_archive_data', 10, 1);

if (!function_exists('bitt_acf_archive_data')) {


	function bitt_acf_archive_data($dynamic_data)
	{

		$properties[] = array(
			'name' => __('ACF Field Name', 'oxygen-codebitt'),
			'data' => 'acf_name',
			'type' => 'text',
		);

		//Add Content Option
		$content_data = array(
			'name' => __('ACF Archive Field', 'oxygen-codebitt'),
			'mode' => 'content',
			'position' => 'Archive',
			'data' => 'acf_archive_field',
			'handler' => 'bitt_acf_get_field',
			'properties' => $properties
		);

		$dynamic_data[] = $content_data;

		//Add Image Option
		$image_data = array(
			'name' => __('ACF Archive Field', 'oxygen-codebitt'),
			'mode' => 'image',
			'position' => 'Archive',
			'data' => 'acf_archive_field',
			'handler' => 'bitt_acf_get_field',
			'properties' => $properties
		);

		$dynamic_data[] = $image_data;

		//Add Link Option
		$link_data = array(
			'name' => __('ACF Archive Field', 'oxygen-codebitt'),
			'mode' => 'link',
			'position' => 'Archive',
			'data' => 'acf_archive_field',
			'handler' => 'bitt_acf_get_field',
			'properties' => $properties
		);

		$dynamic_data[] = $link_data;

		//Add Custom Field Option
		$custom_data = array(
			'name' => __('ACF Archive Field', 'oxygen-codebitt'),
			'mode' => 'custom-field',
			'position' => 'Archive',
			'data' => 'acf_archive_field',
			'handler' => 'bitt_acf_get_field',
			'properties' => $properties
		);

		$dynamic_data[] = $custom_data;

		//Add Image ID Option
		$image_id_data = array(
			'name' => __('ACF Archive Field', 'oxygen-codebitt'),
			'mode' => 'image-id',
			'position' => 'Archive',
			'data' => 'acf_archive_field',
			'handler' => 'bitt_acf_get_field',
			'properties' => $properties
		);

		$dynamic_data[] = $image_id_data;

		return $dynamic_data;
	}
}


if (!function_exists('bitt_acf_get_field')) {
	/*
	 * ACF Archive Dynamic Data
	 * 
	 * @param array $atts - the ACF field name/slug 
	 * @return array $data - the results of getting the ACF field
	 */
	function bitt_acf_get_field($atts)
	{

		// If ACF is deactivated, return nothing
		if (!class_exists('acf')) {
			return '';
		}

		// Get and store the query object
		global $wp_query;
		$oxy_obj = $wp_query->get_queried_object();

		// Check and store the ACF field if the queried object exists. 
		if ($oxy_obj) {
			$data = get_field($atts['acf_name'], $oxy_obj->taxonomy . '_' . $oxy_obj->term_id);
		}

		// If the ACF field has data, display it
		if ($data) {
			return $data;
		}

		// display nothing if we get no results
		return '';
	}
}
?>