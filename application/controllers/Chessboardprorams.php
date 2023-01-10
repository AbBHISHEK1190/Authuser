<table width="400px" border="1px" cellspacing="0px">
 
<?php

for($i=0;$i<8;$i++)
{
    echo "<tr>";

    for($j=0;$j<8;$j++)
    {
        if($j%2==0)
        {
            // echo "*";
         echo   "<td height=40px width=20px bgcolor=black></td>";
        // echo "<apan height=40px width=20px bgcolor=black>sales</span>";

        }
        else
        {
         echo  "<td height=40px width=20px bgcolor=white></td>";

            // echo "+";
        }
    }
    echo "<tr>";

    echo "<br>";
}
?>

</table>