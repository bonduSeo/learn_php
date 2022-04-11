<?php
    $arr1 = [1,2,3];
    $arr2 = [1,2,3,4,5];

    $arr3 = [1,2,3,4,5];

    $diff_arr = array_diff($arr1,$arr2);


    print_r($diff_arr);
    print "<br>";

    print ($arr === $arr2)."<br>";
    print ($arr === $arr3)."<br>";

?>
<!-- 왜안되노 -->