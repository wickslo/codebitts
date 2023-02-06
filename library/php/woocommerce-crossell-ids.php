<?php

if (!function_exists('bitt_wooco_crossell_ids')) {
    function bitt_wooco_crossell_ids()
    {
        $crossells = get_post_meta(get_the_ID(), '_crosssell_ids', true);

        if (!empty($crossells)) {
            $ids = implode(', ', $crossells);

            return $ids;
        }
    }
}
?>