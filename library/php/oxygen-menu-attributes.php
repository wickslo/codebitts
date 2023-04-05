<?php
add_filter('nav_menu_link_attributes', 'bitt_add_menu_atts', 10, 3);

/**
 * Add megamenu-link-id attribute to menu item
 * 
 * @param array $atts - the menu item attributes
 * @param object $item - the menu item object
 * @param object $args - the menu item arguments
 * @return array $atts - the menu item attributes
 * 
 * @link https://developer.wordpress.org/reference/hooks/nav_menu_link_attributes/
 */
if (!function_exists('bitt_add_menu_atts')) {
	function bitt_add_menu_atts($atts, $item, $args)
	{
		// The ID of the target menu item
		$menu_target = 32;

		// inspect $item and add megamenu-link-id attribute
		if ($item->ID == $menu_target) {
			$atts['megamenu-link-id'] = '1';
		}
		return $atts;
	}
}
?>