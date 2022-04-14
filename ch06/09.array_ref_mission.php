<?php
    $arr = [10, 20, 30, 40, 50];
    plus_array($arr, 10);
    print_r($arr);
    print "<br>";
    plus_array($arr, 10);
    print_r($arr);

    function plus_array(&$ar, $val) {
        for($i=0; $i<count($ar); $i++) {
            $ar[$i] += $val;
        }
    }

    function plus_array2(&$arr, $val) {
        foreach($arr as $k => $v) {
            $arr[$k] = $v + $val;
        }
    }
?>