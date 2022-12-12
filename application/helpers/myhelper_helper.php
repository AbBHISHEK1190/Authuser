<?php
if ( ! function_exists('pr'))
{
    function pr($var=false,$die=false)
{
    if($die==false)
    {
        
        print_r($var);
    }
else
{
    
    print_r($var);  exit(); 
}

}
}

