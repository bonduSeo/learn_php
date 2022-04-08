<?php
    $scores = array(
            //국, 영, 수
        array(100,100,100), //영수
        array(90,80,70),    //순자
        array(55,65,77),    //영철
        array(12,11,12), 
    );
    $names = array("영수","순자","영철","박박박");
    $each_scores = array(0,0,0);

    for($i=0; $i<count($scores); $i++)
    {
        for($z=0; $z<count($scores[$i]); $z++)
        {
            $each_scores[$i] += $scores[$i][$z];
        }
    }

    for($i=0; $i<count($names); $i++)
    {
        print $names[$i]." : ".$each_scores[$i]."<br>";
    }


    // vsc 개꿀팁: ctl+D 몇번 누르면 같은텍스트 한번에 선택됨
    // ctl+F2 같은텍스트 모두 선택
?>