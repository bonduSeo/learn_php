<?php
    $i = 0;
    while($i <10) {
        counts(); //전역변수$i 값을 1씩 증가시키는 함수
        print $i."<br>";
    }

    function counts() {
        global $i;
        $i++;
    }
    
?>