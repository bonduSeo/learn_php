<?php

    for ($i=1; $i<=9; $i++)
    {
        for($j=2; $j<=9; $j++)
        {
            $result = $i * $j;
            echo "{$j} x {$i} = {$result}&nbsp&nbsp&nbsp&nbsp&nbsp";
            if ($result < 10)
            {
                echo "&nbsp";
            }
        }
        echo "<br>";
    }

?>

