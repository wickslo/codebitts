<?php
/**
 * Get the cross-sell IDs
 * 
 * @return string $ids - comma separated list of cross-sell IDs
 */
if (!function_exists('bitt_wooco_crossell_ids')) {
    function bitt_wooco_crossell_ids()
    {

        // If WooCommerce is deactivated, return nothing
        if (!class_exists('woocommerce')) {
            return '';
        }

        $crossells = get_post_meta(get_the_ID(), '_crosssell_ids', true);

        if (!empty($crossells)) {
            $ids = implode(', ', $crossells);

            return $ids;
        }
    }
}
?>