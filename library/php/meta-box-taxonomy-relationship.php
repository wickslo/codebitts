<?php
/**
 * Meta Box Taxonomy Relationship
 *
 * @param string $tax - taxonomy name (e.g. 'product_taxonomy') 
 * @param string $relationship - relationship name (e.g. 'product_taxonomy_to_product')
 * @return string $list_array - comma separated list of taxonomy IDs (e.g. '1,2,3')
 */

if (!function_exists('bitt_mb_tax_relationship')) {

    function bitt_mb_tax_relationship($tax, $relationship)
    {

        //If Meta Box is deactivated, return nothing
        if (!function_exists('rwmb_meta')) {
            return '';
        }

        global $post;
        $term_list = get_the_terms(get_the_ID(), $tax);
        $terms_id = wp_list_pluck($term_list, 'term_id');

        $pages = MB_Relationships_API::get_connected([
            'id' => $relationship,
            'from' => $terms_id,
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