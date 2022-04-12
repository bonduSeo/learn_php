<?php
    $n1 = 9;
    $n2 = 5;

    function print_sum($num1, $num2) {
        $sum = $num1 + $num2;
        print "$num1 + $num2 = $sum<br>";
    }
    function print_minus($num1,$num2) {
        $minus = $num1 - $num2;
        print "$num1 - $num2 = $minus<br>";
    }
    function print_multi($num1,$num2) {
        $multi = $num1 * $num2;
        print "$num1 * $num2 = $multi<br>";
    }
    function print_div($num1,$num2) {
        $div = $num1 / $num2;
        print " $num1 / $num2 = $div<br>";
    }
    function print_mod($num1,$num2) {
        $mod = $num1 % $num2;
        print "$num1 % $num2 = $mod<br>";
    }
    // 함수선언에서 $n1 $n2는 쓰면안됨. 오류는 안났지만 다르게해야되는거
    // 근데 책 115p에 의하면 '지역변수'라는 설정에 의해서 php에서 함수안의 정의된 변수는
    //      전영역 작동하는 변수는 global변수(전역변수)
    // 변수값의 변화가 함수밖에서는 적용되지 않기때문에 사용해도 무방한듯?
    // 즉 함수 안팍의 동일한 이름의 변수는 이름만 같을뿐 별개의 변수임.
    

    print_sum($n1, $n2);
    print_minus($n1, $n2);
    print_multi($n1,$n2);
    print_div($n1,$n2);
    print_mod($n1,$n2);
?>
