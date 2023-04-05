<?php
/**
 * Get the current term
 * 
 * @return string $current_terms - the current term
 */
if (!function_exists('bitt_current_archive_term')) {

    function bitt_current_archive_taxonomy()
    {
        $current_terms = get_queried_object()->term_id;
        return $current_terms;
    }
}
?>