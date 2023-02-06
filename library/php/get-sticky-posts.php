<?php
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