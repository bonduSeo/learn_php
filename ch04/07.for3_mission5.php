<?php
    //구구단 2단- 9 단

    for ($i=2; $i<=9; $i++)
    {
        print "{$i}단 <br>";
        for($j=1;$j<=9; $j++)
        {   $result = $i * $j;
            print "{$i} x {$j} = {$result}<br>";
            
        }
        print "--------<br>";
    }
    

?>