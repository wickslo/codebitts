<?php

global $product;
if ($product) {

    $type = 'simple';
    if ($product->get_type()) {
        $type = $product->get_type();
    }

    do_action('woocommerce_' . $type . '_add_to_cart');
}
?>