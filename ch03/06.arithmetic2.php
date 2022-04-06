<?php
    //증감연산자
    $n1 = 10;
    $n1++;
    print "$n1 <br>";

    ++$n1;
    print "$n1 <br>";
    // 두개 차이가 있음

    print "---------<br>";

    $n2 = 10;
    $sum = 10 + $n2++;  //읽기 먼저 한후에 ++쓰기됨
    // $sum = 10 + ++$n2;  //++쓰기후 읽기 됨. 결과값 다름
    print "$sum <br>";
    print "$n2 <br>";

    print "-------<br>";
    // - 도 메커니즘 같음

    $n3 = 10;
    $n3 = $n3 + 1; //$n3++;
    print "$n3 <br>";
    
    $n3 = $n3 + 1; //$n3++;
    print "$n3 <br>";
    
    $n3 = $n3 + 1; //$n3++;
    print "$n3 <br>";

    print "------<br>";
    $n4 = 10;
    $n4 +=2;
    print "$n4 <br>";
    $n4 +=2;
    print "$n4 <br>";
    $n4 +=2;
    print "$n4 <br>";

    // +=, -=, *=, /=, %= 좌변에 우변을 연산한 값을 좌변에 저장

    print "333------<br>";

    $oprd1 = 10;
    $oprd2 = 20;

    $result = $oprd1 == $oprd2;
    print "$oprd1 == $oprd2 : $result <br>"; // 0이 아닌 빈칸되네
   
    $result = $oprd1 != $oprd2;
    print "$oprd1 != $oprd2 : $result <br>"; //참:1

    $result = $oprd1 > $oprd2;
    print "$oprd1 > $oprd2 : $result <br>";

    print "------<br>";

    $oprd1 = '10';
    $oprd2 = 10;
    $oprd3 = 10;

    $result = $oprd1 == $oprd2;
    print "$oprd1 == $oprd2 : $result <br>"; // 값이 같음 참

    $result = $oprd1 === $oprd2;
    print "$oprd1 === $oprd2 : $result <br>"; // 값은 같지만 타입이 다름. 거짓

    $result = $oprd2 === $oprd3;
    print "$oprd1 === $oprd2 : $result <br>"; // 값과 타입이 같음. 참

    // 가능하면 확실하게 === 사용하도록, 반대는 !==
?>