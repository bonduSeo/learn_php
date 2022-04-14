<?php
    //getdate
    $seoul = getdate(); 
    // 현제 로컬시간 배열로 반환
 
    foreach($seoul as $k => $v) {
        print "[$k] => $v <br>" ;
    }
    print "<br>";

    print "현재시간 : ".
        $seoul["year"]."년 ".
        $seoul["mon"]."월 ".
        $seoul["mday"]."일 ".
        $seoul["hours"]."시 ".
        $seoul["minutes"]."분 ".
        $seoul["seconds"]."초";

    print "<br>-------------<br>";
    //gmdate
    //현제시스템의 G.M.T(세계표준시간:Greenwich Mean Time)-런던.. 시간 반환(배열아님)

    $year = gmdate("Y");
    $mon = gmdate("m");
    $day = gmdate("d");
    $hour = gmdate("H");
    $min = gmdate("i");
    $sec = gmdate("s");

    print "현재시간 : ${year}년 ${mon}월 ${day}일 ${hour}:${min}:${sec}<br>";
    
    
?>