<?php

    // 정의함수. 상수를 정의할수있음
    define("NAME", "홍길동");
    // define("NAME", "박박박"); 에러남
    define("NAME2", "장보고");

    print NAME;
    print "<br>";
    print NAME2;

    // 상수 constant, 리터럴 literal
    define("STAND_AGE", 25);
    // STAND_AGE 는 상수, 25(값 그자체)는 리터럴
    // 즉 STAND_AGE라는 상수는 25라는 리터럴값을 가지고있는 상수
?>