<?php
    $start_num = 1;
    $end_num = 100;

    function sum_from_to($n1, $n2) {
        for($i=$n1; $i <= $n2; $i++) 
        {
            $ssum += $i;
        }
        return $ssum;
    }

    $result = sum_from_to($start_num, $end_num);
    print "$start_num - $end_num 를(을) 모두 더한 값은 $result <br>";
?>