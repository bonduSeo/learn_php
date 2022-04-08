<?php

    // 과목별 합계, 평균

        $scores = array(
            //국, 영, 수
        array(100,100,100), //영수
        array(90,80,70),    //순자
        array(55,65,77),    //영철
        array(90,88,55),
    );
    $sub = array("국어","영어","수학");
    $sub_sum = array();

    for($i=0; $i<count($scores[0]); $i++)
    {
        for($j=0; $j<count($scores); $j++)
        {
            $sub_sum[$i] += $scores[$j][$i];
        }
    } // 사람 생각작업의 순서대로 했는데, 그렇게 하지않는것이 더 나은듯 => 2-4 선생님코딩 참고


    // print_r($sub_sum);
    
    for($i=0; $i<count($sub_sum); $i++)
    {
        print $sub[$i]."<br>합계 : ".$sub_sum[$i].", 평균: ".$sub_sum[$i]/count($scores)."<br><br>";
    }




?>