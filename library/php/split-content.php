<?php
/**
 * Function Name: bitt_split_content
 * Description: Adds the bitt_split_content function to a WordPress site.
 * Author: Luxibay - https;//luxbiay.dev
 * @version 1.0
 * 
 * @param $tag - (string) Determines what HTML tag should be split.
 * @param $split_number - (int) Tells the function at which number the split should occur.
 * @param $remainder - (bool) Return the Remaining Content only, should be true or false. Default is false.
 * 
 */

if (!function_exists('bitt_split_content')) {
    function bitt_split_content(string $html_tag = 'h2', int $split_number = 2, bool $remainder = NULL)
    {

        /* Set our Tag */
        $tag = "<" . $html_tag . ">";

        /* Get the global variables */
        global $post;
        global $content_split;

        /* Check if the global variable $content_split is empty and add defaults if it is */
        if (!$content_split) {
            $content_split['display'] = '';
            $content_split['remainder'] = apply_filters('the_content', get_the_content());
        }

        /* If we're trying to get the remainder, display it. */
        if ($remainder === true) {
            return $content_split['remainder'];
        }


        /* Split the content*/
        $slices = explode($tag, $content_split['remainder']);

        /* Update the $content_split global variable */
        $content_split['display'] = implode($tag, array_splice($slices, 0, $split_number));
        $content_split['remainder'] = $tag . implode($tag, array_splice($slices, 0));

        /* Display the intended results */
        return $content_split['display'];
    }
}
?>