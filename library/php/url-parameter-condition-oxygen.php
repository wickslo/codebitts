<?php
if (function_exists('oxygen_vsb_register_condition')) {

    global $oxy_condition_operators;

    oxygen_vsb_register_condition('URL Parameter', array('options' => array(), 'custom' => true), $oxy_condition_operators['string'], 'lux_oxygen_url_parameter_callback', 'Other');

    function lux_oxygen_url_parameter_callback($value, $operator)
    {

        $parameter = $_GET[$value];

        return oxy_condition_eval_string($parameter, $value, $operator);
    }
}
