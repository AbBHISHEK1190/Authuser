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

    function palindrone()
    {

        
        // $numstore=$num;

        // $sum=0;
        $array=array();
        for($i=1;$i<=1000;$i++)
        {
            $num=$i;

            $numstore=$num;
            $reminder=0;

            while($numstore!=0)
            {

                $rem=$numstore%10;
                $reminder=$reminder*10+$rem;
                $numstore=floor($numstore/10);  

            }
            
            if($num==$reminder)
            {
                
                echo "$num Yes it is an Palindrome number".'<br>'; 
            }
            else
            {
                
                echo "$num No".'<br>'; 

            }
        }
        
    }

    function fibonnaci()
    {
    //   example=  0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233

    $num=0;
    $fibnum1=0;
    $fibnum2=1;

    $sum=array();
    while($num<10)
    {

        $fibnum=$fibnum1+$fibnum2;
        $fibnum1=$fibnum2;  
        $fibnum2=$fibnum;

      $num=  $num+1;


      echo $fibnum.'<br>';
    }
    
    }

    function reversenumber()
    {
 
        $num=8716151;
        $revnum=0;
        while($num>0)
        {
     $rem=$num%10;
    $revnum=($revnum*10)+$rem;
    $num=floor($num/10);

        }
        echo 'Revesre number is: '.$revnum;
    }

    function reversestring()
    {
        $string = "Abhishek";  
        for($i=strlen($string);$i>=0;$i--)
        {
            echo !empty($string[$i])?strtoupper($string[$i]):'';
        }

    }

    function swapnum()
    {
        $a=10;
        $b=20;
        echo 'Before swaping a '. $a .' Before swaping b '. $b; 
        $third=$a;
        $a=$b;
        $b=$third;
        echo '<br>'.'After swaping a '. $a .' After swaping b '. $b; 


    }

    function swapwithoutthirdvariable()
    {
        
        $a=10;
        $b=20;
        echo 'Before swaping a '. $a .' Before swaping b '. $b; 

        $b=$a+$b;
        $a=$b-$a;
        $b=$b-$a;
        echo '<br>'.'After swaping a '. $a .' After swaping b '. $b; 

    

    }
}