<?php
    $score = array(1,2,3,4);
    $score2 = $score;
    // 객체지향언어에서는 주소값복사(얕은복사)하지만
    //php에서는 값을 복사해서 새로운 배열을 만듬(깊은복사)

    print_r($score);
    print "<br>";
    print_r($score2);
    print "<br>";

    $score2[0] = 100;

    print_r($score);
    print "<br>";
    print_r($score2);
    print "<br>";



?>