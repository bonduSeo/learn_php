<?php
    //  앞의 예제를 do while문으로
 

    $r_val = 10;


    do {
        $r_val = rand(1,10);
        print "r_val : $r_val <br>";
    } while($r_val != 10);
    print "--끝 -- <br>";
    //조건이 do보다 뒤에있어서 한번은 실행되는듯?!
?>

