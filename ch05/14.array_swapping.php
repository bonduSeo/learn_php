<?php
    $arr = [10,33,12,8,1,89];

    print_r($arr);
    print "<br>";

    // 순서를 바꾸고 싶을경우 이렇게하면 당연히 안됨.swapping 을 할때는 임시저장소가 필요
    $arr[0] = $arr[1];
    $arr[1] = $arr[0];

    print_r($arr);
    print "<br>--------<br>";

    $arr = [10,33,12,8,1,89];
    print_r($arr);
    print "<br>";

    $temp = $arr[0];
    $arr[0] = $arr[1];
    $arr[1] = $temp;

    print_r($arr);
    print "<br>";

?>