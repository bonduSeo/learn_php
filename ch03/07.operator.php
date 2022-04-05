<?php
    $num = 22;

    // 10은 짝수입니다 홀수입니다

    if ($num % 2)
    {
        print $num ."은 홀수입니다";
    }
    else{
        print $num ."은 짝수입니다";
    } 

    print "<br>";
    if($num %2 === 0)
    {
        print "{$num}는(은) 짝수입니다.";
    }
    else
    {
        print "{$num}는(은) 홀수입니다."; // "" 안에서 변수랑 문자랑 붙이고싶으면 {}
    }

    print "<br>";
    // 고도화. 디폴트값을 주는방법
    $odd_even = "홀"; 
    if($num % 2 === 0)
    {
        $odd_even = "짝";
    }
    print "${num}는(은) ${odd_even}수 입니다.";
?>