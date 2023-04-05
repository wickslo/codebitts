<?php
/**
 * Get the sticky posts
 * 
 * @return string $sticky_posts - comma separated list of sticky post IDs
 */
if (!function_exists('bitt_get_sticky_posts')) {

	function bitt_get_sticky_posts()
	{
		$sticky = get_option('sticky_posts');
		if ($sticky) {
			$sticky_posts = implode(',', $sticky);
			return $sticky_posts;
		}
	}
}
?>