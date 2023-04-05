<?php
/**
 * Get the upsell IDs
 * 
 * @return string $ids - comma separated list of upsell IDs
 */
if (!function_exists('bitt_wooco_upsell_ids')) {
    function bitt_wooco_upsell_ids()
    {
        // If WooCommerce is deactivated, return nothing
        if (!class_exists('woocommerce')) {
            return '';
        }
        $upsells = get_post_meta(get_the_ID(), '_upsell_ids', true);

        if (!empty($upsells)) {
            $ids = implode(', ', $upsells);

            return $ids;
        }
    }
}
?>