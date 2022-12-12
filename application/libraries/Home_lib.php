<?php
class Home_lib{

    // public $ci;
    function __construct()
    {
        $this->CI=& get_instance();
        $this->CI->load->model('Home_model');
    }

    public function __call($method, $arguments)
    {
        if (!method_exists($this->CI->Home_model, $method)) {
            throw new Exception('Undefined method Home_model::' . $method . '() called');
        }

        return call_user_func_array([$this->CI->Home_model, $method], $arguments);
    }
    public function xyz()
    {

        return 'jsjsjjsjs';
    }
}