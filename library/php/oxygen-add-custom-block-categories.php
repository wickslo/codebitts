<?php
add_action('plugins_loaded', 'custom_category');

function custom_category()
{
    global $ct_component_categories;
    $ct_component_categories = array(
        'Custom Category 2',
        'Custom Category 1'
    );
}
?>