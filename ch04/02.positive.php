<?php
    $result = 1;
    if($result > 0)
    {
        // to do $result 값을 반으로 만드세요
        // $result = $result / 2;
        // $result = $result * 0.5; // 곱하기가 나누기보다 퍼포먼스가 좋다?!
        $result *= 0.5;
        print "$result <br>";
        print "Positive <br>";
    }
    else
    {
        print "$result <br>";
        print "Negative <br>";
    }
?>