<?php
if (!function_exists('bitt_current_archive_taxonomy')) {
    function bitt_current_archive_taxonomy()
    {
        $current_taxonomy = get_queried_object()->taxonomy;
        return $current_taxonomy;
    }
}

if (!function_exists('bitt_current_archive_term')) {
    function bitt_current_archive_taxonomy()
    {
        $current_terms = get_queried_object()->term_id;
        return $current_terms;
    }
}
?>