<?php
    //재귀함수
    //내가 함수라면 내가 나를 호출하는것

    $num = 12;
    $result = factorial($num); //3*2*1
    print "${num}! = $result<br>";
    print "${num}! = ".factorial2($num);

    function factorial($n) {
        $result = 1;
        for($i=1; $i<=$n; $i++) {
            $result *= $i;
        }
        return $result;
    }


    function factorial2($n) {
        if ($n===0) {
            return 1;
        } 
        return ($n*factorial2($n-1));
    }

 
    function abs1($n) {
        if ($n < 0) {
            $n *= (-1);
            return $n;
        }
        return $n;
    }
    // 절대값 만드는 함수
    //if else 로 끝나는 조건문은 삼항식이 제일간단
    function abs2($n) {
        return $n < 0 ? -$n : $n;
    }
    
    
    

    print "<hr>";

    for($i=1; $i<11; $i++) {
        print "{$i}! = ".factorial2($i)."<br>";
    }

    print abs1(-3);
    print "<br>";
    print abs1(12);
    print "<br>";
    print abs1(0);
    print "<br>";
    print abs2(-2);
    print abs2(3);
   
?>