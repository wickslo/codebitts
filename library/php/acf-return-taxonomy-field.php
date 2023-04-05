<?php
/**
 * ACF Taxonomy Field
 *
 * @param string $tax - taxonomy name (e.g. 'product_taxonomy') 
 * @param string $relationship - relationship name (e.g. 'product_taxonomy_to_product')
 * @return string $results - comma separated list of taxonomy IDs (e.g. '1,2,3')
 */
if (!function_exists('bitt_acf_taxonomy')) {


    function bitt_acf_taxonomy()
    {

        // If ACF is deactivated, return nothing
        if (!class_exists('acf')) {
            return '';
        }

        $terms = get_field('product_taxonomy');

        $term_list = array();
        if ($terms) {

            foreach ($terms as $term) {

                array_push($term_list, $term->term_id);
            }

        }

        $results = implode(',', $term_list);
        return $results;
    }
}
?>