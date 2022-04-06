<?php
    //[1,2,3,4,5,6,7] 요렇게 출력되게

    $end_val = 100;
   
    
    echo "[";
    for ($i=1; $i <= $end_val; $i++)
    {
        echo $i;
        if($i < $end_val)
        {
            echo ", ";
        }
    }
    echo "]";

?>