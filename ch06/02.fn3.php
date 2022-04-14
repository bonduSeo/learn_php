<?php
    $start_num = 1;
    $end_num = 100;

    function sum_from_to($n1, $n2) { //$n1, $n2: parameter. 매개변수
        for($i=$n1; $i <= $n2; $i++) 
        {
            $ssum += $i;
        }
        return $ssum;
    }

    $result = sum_from_to($start_num, $end_num);
    //    aka : sum_from_to(1, 100):    $start_num, $end_num: argument 전달인자: 함수호출할때 실제로 보내는 값
    print "$start_num - $end_num 를(을) 모두 더한 값은 $result <br>";
?>