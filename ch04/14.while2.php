<?php
    //  rand(1,10)실행시킬건데 10이나올때까지 반복
    //무한반복문에서 break를 이용한 솔루션

    // $r_val = 10;

    while(true) //이렇게하면 무한반복됨
    { 
        $r_val = rand(1,10);
        if($r_val == 10) { break; }
        print "r_val : $r_val <br>";
    }
    print "--끝---<br>";

?>

