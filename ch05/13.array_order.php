<?php
    $arr_age = array(
        "Peter" => 35,
        "Ben" => 37,
        "Joe" => 43,
        "John" => 24,
    );

    //값정렬
    //sort(오름차순),rsort(내림차순)

    $copy_arr_1 = $arr_age;
    print "copy : ";
    print_r($copy_arr_1);
    print "<br>";


    print "origin : ";
    print_r($arr_age);
    print"<br>";
    sort($copy_arr_1); // 오름차순정렬(자동인덱스)
    print "sort : ";
    print_r($copy_arr_1);
    print "<br>";
    rsort($copy_arr_1); // 내림차순정렬(자동인덱스)
    print "rsort : ";
    print_r($copy_arr_1);
    print "<br>";
    print "<br>----------------<br>";

    $copy_arr_2 = $arr_age;
    print "copy2 : ";
    print_r($copy_arr_2);
    print "<br>";

    ksort($copy_arr_2);  //키정렬 오름차순

    print "ksort : ";
    print_r($copy_arr_2);
    print "<br>";

    krsort($copy_arr_2);  //키정렬 내림차순

    print "krsort : ";
    print_r($copy_arr_2);
    print "<br>";

    asort($copy_arr_2);  //값정렬 내림차순

    print "asort : ";
    print_r($copy_arr_2);
    print "<br>";

    arsort($copy_arr_2);  //값정렬 내림차순

    print "arsort : ";
    print_r($copy_arr_2);
    print "<br>";
?>