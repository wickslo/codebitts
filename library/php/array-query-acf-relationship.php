<?php

$list_ids = array();
if (function_exists('get_field')) {
    $key_ids = get_field('acf_field_slug');

    if ($key_ids) {
        foreach ($key_ids as $key_id) {
            $list_ids[] = $key_id->ID;
        }
    }
}

return ['post__in' => $list_ids];
