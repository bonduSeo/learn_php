<?php
    function swap_val($n1, $n2) {
        $temp = $n1;
        $n1 = $n2;
        $n2 = $temp;
    }

    $a = 10;
    $b = 30;

    print "a: $a, b: $b<br>";
    swap_val($a,$b);
    print "a: $a, b: $b<br>";
    print "----call by value<br>";
    //파라미터의 값만 (복사)전달
    //call by value


    function swap_ref(&$n1, &$n2) {
        $temp = $n1;
        $n1 = $n2;
        $n2 = $temp;
    }

    $a = 10;
    $b = 30;

    print "a: $a, b: $b<br>";
    swap_ref($a,$b);
    print "a: $a, b: $b<br>";
    print "---call by reference<br>";
    //파라미터의 저장된 위치를 전달
    // call by reference
    //레퍼런스: 참조값(주소값)

    //글로벌별수를 사용하지않고 외부의 값을 바꿀수 있는 방법
    //그리고 밸류 보다 효율이 좋다(메모리 사용면에서: 데이터의 용량이 큰경우에)
?>