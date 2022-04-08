<?php
    //경식씨코드. 내꺼랑 가로세로 연산순서가 다름
    //남의코드 읽는능력을 길러야함 
    // 과목별 합계, 평균

        $scores = array(
            //국, 영, 수
        array(100,100,100), //영수
        array(90,80,70),    //순자
        array(55,65,77),    //영철
        array(90,88,55),
    );

    $sub = array("국어", "영어", "수학");
    $sub_sum = array();

    for ($i = 0; $i < count($scores); $i++) {
        for ($z = 0; $z < count($scores[$i]); $z++) {
             $sub_sum[$z] += $scores[$i][$z];
           }
        }

    print_r($sub_sum);
    print "<br>";
for ($i = 0; $i < count($sub_sum); $i++) {
    $sub_avg[$i] = $sub_sum[$i] / count($scores);
    print "과목 : " . $sub[$i] . "<br>" . "합계 : "
        . $sub_sum[$i] . " / 평균 : " . $sub_avg[$i] . "<br>--------------------<br>";
}

?>