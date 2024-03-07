<?php

if (function_exists('oxygen_vsb_register_condition')) {

    global $oxy_condition_operators;

    oxygen_vsb_register_condition('URL', array('options' => array(), 'custom' => true), $oxy_condition_operators['string'], 'bitt_oxygen_url_callback', 'Other');

    function bitt_oxygen_url_callback($value, $operator)
    {

        $url = $_SERVER['REQUEST_URI'];

        return oxy_condition_eval_string($url, $value, $operator);
    }
}
