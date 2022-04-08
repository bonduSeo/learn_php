<?php
    $val = rand(3,10);
    $num = 1;
    echo $val;
    echo "<table>";
    
    for($i=1;$i<=$val;$i++)
    {
        echo "<tr>";
            for($j=1;$j<=$val;$j++)
            {
                echo "<td>";
             //   echo $j+$val*($i-1);
                echo $num++;
              
                echo "</td>";
            }


        echo "</tr>";


    }
    echo "</table>";
?>

<style>
    /* * {margin:0; padding:0;} */
    table {
        border-collapse : collapse;
    }
    table, tr, td {
        border : 1px solid black;
    }
    td {
        height: 40px;
        width: 40px;
        text-align:center;
 
        }
   
</style>