<?php

class Home extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
    }
    function reversearray()
    {
        $array=array(23,57,89,6,77,99);
        pr($array);

for($j=0;$j<count($array);$j++)
{
   
for($i=0;$i<count($array)-1;$i++)
{
    if($array[$i] > $array[$i+1]) {
        $temp = $array[$i+1];
        $array[$i+1]=$array[$i];
        $array[$i]=$temp;
    } 

}   
}
echo '<br>'.'after sorted:'.'<br>';
pr($array); 
    }

    function removeduplicate()
    {
        $inputArray = array(1, 4, 2, 1, 6, 4, 9, 7, 2, 9);
        $outputArray = array();
        
       foreach ($inputArray as $val){
            if(!in_array($val,$outputArray)){
             $outputArray[] = $val;
            }
           }
        print_r($outputArray);
    }


    function removeduplicatesecond()
    {
        $inputArray = array(1, 4, 2, 1, 6, 4, 9, 7, 2, 9);
        $outputArray = array();  
       
        for($j=0;$j<count($inputArray)-1;$j++)
        {
            if(!in_array($inputArray[$j],$outputArray))
            {
                $outputArray[]=$inputArray[$j];

            }


       }
        print_r($outputArray);



    }
    
    function countduplicate()
    {
        $arraychars = array(1, 4, 2, 1, 6, 4, 9, 7, 2, 9,9);
        // $arraychars=array("or","red","yellow","green","red","yellow","yellow");

        $arrCount=array();
        for($i=0;$i<count($arraychars);$i++)
        {
            $key=$arraychars[$i];
            // pr($key,1);
            if(!empty($arrCount[$key])&& $arrCount[$key]>=1)
            {
                $arrCount[$key]++;
            }
            else
            {
                $arrCount[$key]=1;
            }
            // echo $arraychars[$i]."<br>";

        }

        echo "<pre>";
        print_r($arrCount);
    }

    function stringrevrese()
    {
        $string = "ABHISHEK";  
     
     
     for($i=strlen($string);$i>=0;$i--)
     {

        echo !empty($string[$i])?$string[$i]:'';
     }



    }
}