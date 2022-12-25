<?php

class Test extends CI_Controller
{
   public $unique=array();
 function __construct()
 {
    parent::__construct();
 }

 
function getinfo(){
   print_r(phpinfo());die;
}
}