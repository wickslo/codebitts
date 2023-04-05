<?php
/**
 * Get the IDs of products on sale
 * 
 * @return string $product_ids - comma separated list of product IDs
 */
if (!function_exists('bitt_wooco_sale_ids')) {
    function bitt_wooco_sale_ids()
    {

        // If WooCommerce is deactivated, return nothing
        if (!class_exists('woocommerce')) {
            return '';
        }

        $product_array = wc_get_product_ids_on_sale();

        $product_ids = implode(", ", $product_array);

        return $product_ids;

    }
}
?>