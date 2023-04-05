<?php
/**
 * Date Filter
 * 
 * @param string $f - date format (e.g. 'F Y') 
 * @param string $time - date (e.g. '2018-01-01') or period (e.g. '1 month ago')
 * @return string $last_month - formatted date (e.g. 'January 2018')
 */
if (!function_exists('bitt_date_filter')) {


	function bitt_date_filter($f, $time)
	{

		$last_month = date($f, strtotime($time));

		return $last_month;

	}
}
?>