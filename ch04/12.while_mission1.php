<?php
    //val변수에 있는 숫자까지 1부터 모두 더해주세요
    // 그리고 결과값 출력
    $val = rand(50,100);
    // $val = 50;
    print "val: $val <br>";

    $i = 1;
    $sum1 = 0;
    while($i <= $val)
    {
        // $sum1 = $sum1 + $i++;
        $sum1 += $i++;
    }
    print "sum1: ".$sum1."<br>";

  
    $sum3= $val*($val+1)*0.5;
    print "sum3: ".$sum3."<br>";
    




    $sum2 = 0;
    while($val!==0)
    {
        $sum2 = $sum2 + $val--; //변수하나 없에봤는데 매직넘버를 바꾸는거라서 별로인듯
    }
    print "sum2: ".$sum2;


   

?>

