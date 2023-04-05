<?php
/**
 * Get the rewrite slug for the current post type
 * 
 * @return string $rewrite_slug - the rewrite slug for the current post type
 * @return void
 */
if (!function_exists('bitt_get_rewrite_slug')) {

    function bitt_get_rewrite_slug()
    {
        $post_type = get_post_type();
        if ($post_type) {
            $post_type_object = get_post_type_object($post_type);
            $rewrite_slug = $post_type_object->rewrite['slug'];

            echo $rewrite_slug;
        }
    }
}
?>