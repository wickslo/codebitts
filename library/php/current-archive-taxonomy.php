<?php
/**
 * Get the current taxonomy
 * 
 * @return string $current_taxonomy - the current taxonomy
 */
if (!function_exists('bitt_current_archive_taxonomy')) {

    function bitt_current_archive_taxonomy()
    {
        $current_taxonomy = get_queried_object()->taxonomy;
        return $current_taxonomy;
    }
}
?>