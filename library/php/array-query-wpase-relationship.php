<?php

$list_ids = array();
if (function_exists('get_cf_related_to')) {
    $key_ids = get_cf_related_to('wpase_field_slug');

    if ($key_ids) {
        foreach ($key_ids as $key_id) {
            $list_ids[] = $key_id->ID;
        }
    }
}

return ['post__in' => $list_ids];
