<?php
    $score_arr = array(100, 90, 33, 87, 65);
    //  합계, 평균구하기
    $count = count($score_arr);

    $sum = 0;
    for ($i=0; $i<$count; $i++)
    {
        $sum = $sum + $score_arr[$i];
    }

    print_r($score_arr);
    print "<br>";
    print "합계:".$sum."<br>";
    print "평균:".$sum/$count;
?>