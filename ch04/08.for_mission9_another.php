<?php

// 승재씨코드
    $star = rand(3,20);
  
    print  $star."<br>";

    $sum = ""; //php에선 안해도되지만 요거 해주는 습관을 들입시다
    for ($z=1;$z <= $star; $z++)
    {
        $sum = $sum."@";
        print "{$sum}<br>";
    }
  
?>