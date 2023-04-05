<?php
/**
 * Get the connected posts
 * 
 * @param string $relationship - the name of the Meta Box relationship
 * @return string $list_array - comma separated list of connected post IDs
 */
if (!function_exists('bitt_mb_field_relationship')) {

    function bitt_mb_field_relationship($relationship)
    {

        // If Meta Box is deactivated, return nothing
        if (!function_exists('rwmb_meta')) {
            return '';
        }

        global $post;
        $pages = MB_Relationships_API::get_connected([
            'id' => $relationship,
            'from' => get_the_ID(),
        ]);

        $list = array();
        foreach ($pages as $p) {
            $list[] = $p->ID;
        }

        $list_array = implode(", ", $list);

        return $list_array;
    }
}
?>