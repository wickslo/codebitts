<?php

if (!function_exists('bitt_wooco_upsell_ids')) {
    function bitt_wooco_upsell_ids()
    {
        $upsells = get_post_meta(get_the_ID(), '_upsell_ids', true);

        if (!empty($upsells)) {
            $ids = implode(', ', $upsells);

            return $ids;
        }
    }
}
?>