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
            $sub_sum[$sub[$i]] += $scores[$j][$i];
        }
    }


    print_r($sub_sum)."<br>";
    foreach($sub_sum as $key => $sum)
    {
        print $key."<br>합계 : ".$sum.", 평균 : ".$sum/count($scores)."<br><br>";
                
    }

    unset($sub[1]);
    // $sub[1] = "";
    print_r($sub);


    
?>