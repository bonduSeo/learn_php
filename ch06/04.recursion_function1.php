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
        if ($n===1) {
            return 1;
        } 
        return ($n*factorial2($n-1));
    }

 

    print "<hr>";

    for($i=1; $i<11; $i++) {
        print "{$i}! = ".factorial2($i)."<br>";
    }

   
?>