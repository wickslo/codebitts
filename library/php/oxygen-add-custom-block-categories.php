<?php
add_action('plugins_loaded', 'bitt_oxyberg_add_category');

/**
 * Add Custom Category to Oxygen Block Categories
 * 
 * @return void
 */
if (!function_exists('bitt_oxyberg_add_category')) {
    function bitt_oxyberg_add_category()
    {
        global $ct_component_categories;
        $ct_component_categories = array(
            'Custom Category 2',
            'Custom Category 1'
        );
    }
}
?>