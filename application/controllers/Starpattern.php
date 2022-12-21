<?php
class Starpattern extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function first()
    {

        for($i=0;$i<5;$i++)
        {
            for($j=0;$j<5-$i;$j++)
            {
                echo "*";
            }
            echo "<br>";
        }
    }

    function second()
    {
        for($i=0;$i<5;$i++)
        {
            for($j=0;$j<=$i;$j++
            )
            {
                echo "*";
            }
            echo "<br>";
        }
    }

    function third()
    {

        for($i=0;$i<=5;$i++){  
            for($k=5;$k>=$i;$k--){  
            echo "&nbsp;&nbsp";  

        }  
            for($j=0;$j<=$i;$j++){  
            echo "*&nbsp";  
            }  
            echo "<br>";  
            }  

            
            }
}