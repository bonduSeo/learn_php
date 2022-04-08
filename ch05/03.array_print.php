<?php
    $numbers = array(10,20,30,40,50);

    print $numbers."<br>"; // 의미없음. 
    print_r($numbers);
    print "<br>";

    array_push($numbers,60,100,200);
    print_r($numbers); // 함수이기때문에 항상()빼먹지않고, print 처럼 .<br>등은 안먹힘
    print "<br>";
?>