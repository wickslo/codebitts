<?php

$list_ids = array();
if (function_exists('get_cf_related_to')) {
    $list_ids = get_cf_related_to('wpase_field_slug');
}

return [
    'post__in' => $list_ids,
    'post_type' => 'any'
];
