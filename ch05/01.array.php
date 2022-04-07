<?php

    // 배열
  
    $week = array("일","월","화", "수", "목", "금", "토");

    $weekend = array($week[6], $week[0]);

    print $weekend[0]. ",".$weekend[1];

    $week[3] = "wed";
    print $week[3]."<br>";
    $week[0] = "sun";
    print $weekend[1]."<br>";;

    print "count(\$week) :".count($week)."<br>";  //  \없으면 변수내용을 출력해뻐림

    array_push($week, "AA", "DD"); // 자동으로 바로뒤의 인덱스에 추가하는 함수.
    print $week."<br>";
    print_r($week)."<br>";
    print "<hr>";
    $week[10]="HH";   // 이렇게 직접 인덱스를 지정해서 저장하게되면 실수가 있을수있기때문에 위의 array_push로 값을 추가해주는것을 권장
    print_r($week)."<br>";

    print "<hr>";

    $test2 = array(1, 3.44, "안녕"); //php 에서는 배열에 이렇게 다른 타입의 값이 들어가서 언뜻 편리하지만, 되도록이면 같은 배열당 같은 타입으로 관리해주는것이 좋다
    print $test2[0];
    print $test2[1];
    print $test2[2];
    print_r($test2);

?>