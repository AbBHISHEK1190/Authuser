<?php
class User_lib{

    function __construct()
    {
        $this->CI=& get_instance();
        $this->CI->load->model('User_model');
    }

    public function __call($method, $arguments)
    {
        if (!method_exists($this->CI->User_model, $method)) {
            throw new Exception('Undefined method User_model::' . $method . '() called');
        }

        return call_user_func_array([$this->CI->User_model, $method], $arguments);
    }
   
}