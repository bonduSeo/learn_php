<?php
    $num = rand(1,10);


    function print_odd_even($n1) {
        if ($n1 % 2 == 0) {
            print "숫자 {$n1}(는)은 짝수입니다";
        } else {
            print "숫자 {$n1}(는)은 홀수입니다";
        }
    }

    print_odd_even($num);
    print "<br>";

   
    function print_odd_even2($n1) {
        $result = $n1 % 2 === 0 ? "짝" : "홀";
        print "숫자 ${n1}(은)는 ${result}수입니다";
    }
    print_odd_even2($num);

?>