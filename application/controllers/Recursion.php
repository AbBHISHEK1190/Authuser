<?php

class Recursion extends CI_Controller
{


    
    function factorial($num)
{
    $facto=0;
   static $i=2;
    if($i<$num)
    {
        
          if($num%$i==1)
        {
          
            $facto=1;
            $i=$i+1;
           
             factorial($num);
           
        }
        else
        {
         $i=$i+1;
         
           factorial($num);
        }  
       
        
    }
    else
    {
       return $facto; 
    }
   
   
}

function getfactorialdate()
    {
      
        $var= factorial(7);

if($var==1)
{
    echo 'number is prime';
}
else
{
    echo 'number is not prime';
}

    }
}


