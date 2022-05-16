<?php
    //scope 라는 단어가나오면 '살아있는 범위' 정도로 인식 'life cycle'
    function A() {
        global $n;
        $n = "A";
        $m = "A";
        print "2:$n,$m<br>";
    }

    $n = "M";
    $m = "M";

    print "1:$n, $m<br>";
    A();
    print "3:$n, $m<br>";