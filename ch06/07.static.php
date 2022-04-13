<?php
    function inc() {
        static $i = 1; //static 이 없으면 결과다름
        print $i."<br>";
        $i=$i+1;
    }
    //tmi static은 메모리영역이 따로있음

    for($j=1; $j<=10;$j++) {
        inc();
    }

    $z = 1;
    function inc2() {
        global $z;
        print $z."<br>";
        $z += 1;
    }
    for($j=1; $j<=10; $j++) {
        inc2();
    }
    //이건 그냥 global 변수로 해본것
?>