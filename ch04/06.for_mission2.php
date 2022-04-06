<?php

    $dan = rand(2, 9);

    echo $dan . "단";

    for ($i=1 ; $i <= 9 ; $i++)
    {
        echo "<br>";
        echo "{$dan} x $i = ".$dan*$i;
        
    }

    echo "<hr>";

    for ($d=1 ; $d<=9 ; $d++)
    {
        echo "{$d}단";
        for ($u=1 ;$u<=9 ; $u++)
        {
            echo "<br>";
            echo "$d x $u = ". $d*$u;
        }
        echo "<br><br>";
    }

?>