<?php
$var="firstname, lastname,,age,age";
$implode=array_filter(explode(",",$var));
$implode=array_unique($implode);
print_r(array_unique($implode));

$explode=implode(",",$implode);
print_r($explode);
exit;
$a=array("a"=>"red","b"=>"green","c"=>"blue");
$b=array("red","green","blue");
echo array_shift($b)."<br>";
print_r ($b);

exit;
//$a=array("a"=>"red","1"=>"green","c"=>"blue");
$b=array("red","green","blue");
echo array_search("red",$b);

exit;
$firstname = "Peter";
$lastname = "Griffin";
$age = '';

$result = compact("firstname", "lastname", "age");

print_r($result);

exit;
// remove duplicates


$sampArray = array (1,4,2,1,6,4,9,7,2,9);
$newarray=array();

for($i=0;$i<count($sampArray);$i++)
{
      if(!in_array($sampArray[$i],$newarray))
        {
              $newarray[]=$sampArray[$i];
          
        }
       
    
  
    
}

print_r($newarray);
exit('lj');
// table
$num=19;

for($i=1;$i<=10;$i++)
{
 echo   $table=$num*$i. "  ";
  
}

// factorial  number
$num=6;

$nums=1;
for($i=$num;$i>0;$i--)
{
     $nums=$nums*$i;

}

echo "the factorial is:".  $nums;


exit();

// fibbonaci
$num=0;
$firstnum=0;
$secondnum=1;
while(10>$num)
{
            $fibnum=$firstnum+$secondnum;

$firstnum=$secondnum;
$secondnum=$fibnum;
  
    $num=$num+1;
    
    echo $fibnum.' ';
    
    
}










exit;



$num=8716151;

$newnum=0;

while($num>0)
{
   
    $newnum=($newnum*10)+$num%10;
   
   $num=floor($num/10);
}


echo "the reverse number is:". $newnum;




exit('');












$array=array(10,8,17,3,20,65,4,32);

for($i=0;$i<count($array);$i++)
{
    
    for($j=0;$j<count($array)-1;$j++)
    {

        if($array[$j] > $array[$j+1])
        {
            //echo count($array);die;
            // exit('dd');
         $temp=   $array[$j+1];
         $array[$j+1]=$array[$j];
         $array[$j]=$temp;
         
         
         
        }
    }
}
print_r($array);


