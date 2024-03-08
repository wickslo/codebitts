<?php

$taxonomy = get_queried_object()->taxonomy;
$term = get_queried_object()->term_id;

return [
    'post_type' => 'any',
    'tax_query' => array(
        array(
            'field' => 'id',
            'taxonomy' => $taxonomy,
            'terms' => $term,
        )
    ),
];
