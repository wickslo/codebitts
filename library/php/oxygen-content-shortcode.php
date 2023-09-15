<?php
/**
* Displays Oxygen Content in a shortcode elsewhere on a WordPress site.
* 
* @param $atts['id'] - the ID of the Oxygen Content (Template, Reusable Post, or Oxyberg Block) you'd like to display
*/
add_shortcode('oxygen-content', 'bitt_oxygen_content_shortcode');

if (!function_exists('bitt_oxygen_content_shortcode')) {
    function bitt_oxygen_content_shortcode($atts)
    {
        if (!class_exists('OxygenElement')) {
            return '';
        } else {

            $json = get_post_meta($atts['id'], "ct_builder_json", true);

            if ($json) {
                global $oxygen_doing_oxygen_elements;
                $oxygen_doing_oxygen_elements = true;
                return do_oxygen_elements(json_decode($json, true));
            } else {
                $shortcodes = get_post_meta($atts['id'], "ct_builder_shortcodes", true);
                return do_shortcode($shortcodes);
            }
        }

    }
}
?>
