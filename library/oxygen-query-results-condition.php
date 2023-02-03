<?php
if( function_exists('oxygen_vsb_register_condition') ) {

	global $oxy_condition_operators;

	oxygen_vsb_register_condition('Query Results', array('options'=>array('true', 'false'), 'custom'=>false), array('=='), 'bitt_query_results_callback', 'Query');

	if(!function_exists('bitt_query_results_callback')) {

		function bitt_query_results_callback($value, $operator) {

			global $wpdb;$query = $wpdb->last_result;
			if( $value == "true" && $query) {
				return true;
			} else if( $value == "false" && !$query) {
				return true;
			}
		}
	}
}
?>
