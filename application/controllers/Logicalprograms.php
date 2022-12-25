<?php

class Logicalprograms extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function sumofdigit()
    {
        $sum=0;
          $digit="14597";
        for($i=0;$i<strlen($digit);$i++)
        {
 $sum +=$digit[$i];
        }
        echo $sum;
    }

    function evenorodd()
    {
        $num=7;
        if($num%2==1)
        {
            echo 'number is odd';
        }
        else
        {
            echo 'number is even';
        }
    }

    function primeornot()
    {
        $num=3;
        $checreminder=0;
        for($i=2;$i<$num;$i++)
        {
            if($num%$i==0)
            {
                $checreminder=1;
                break;
            }
            
            
            
        }
        if($checreminder==0)
            {
                echo 'This is  prime number';
            }
            else
            {
                echo 'This is not prime number';

            }
    }

    function table()
    {

        $num=19;

        for($i=1;$i<=10;$i++)
        {
         echo   $result=$i*$num.'<br>';
        }
    }

    function factorial()
    {
        $num=6;
        $fac=1;
        for($i=$num;$i>0;$i--)
        {

            $fac=$fac*$i;
        }
        echo $fac;
    }

    function armstrongnumber()
    {
        $num=0;
        $number='109';
        for($i=0;$i<strlen($number);$i++)
        {
            $num+=$number[$i]*$number[$i]*$number[$i];
        }
        if($number==$num)
        {
            echo 'armstrong number';
        }
        else
        {
            echo 'armstrong not number';
        }
    }

    function listarmstrongnumber()
    {
        
        // $num=641;

        // $numstore=$num;

        // $sum=0;
        $array=array();
        for($i=1;$i<=1000;$i++)
        {
            $num=$i;

            $numstore=$num;
            $sum=0;

            while($numstore!=0)
            {

                $rem=$numstore%10;
                $sum=$sum+$rem*$rem*$rem;
                $numstore=floor($numstore/10);  

            }
            
            if($num==$sum)
            {
                echo "$num Yes it is an Armstrong number".'<br>'; 
            }
            else
            {
                echo "$num No".'<br>'; 

            }
        }
       
       
    }
}