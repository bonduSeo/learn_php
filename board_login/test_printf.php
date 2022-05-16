<?php
    $name = "홍길동";
    $age = 22;
    $height = 177.32;
    $blood_type = "O";

    printf("제이름은 %s입니다. 나이는 %d세이고, 키는 %.2fcm입니다. 혈액형은 %s입니다."
    , $name, $age, $height, $blood_type);

    echo "<br>";
    $sss = "ab테스트";
    print_r($sss);
    echo "<br>";
    print $sss;
    echo "<br>";
    print $sss[0]."<br>";
    print $sss[1]."<br>";
    print $sss[2]."<br>";
    print $sss[3]."<br>";
    print $sss[4]."<br>";
    print $sss[5]."<br>";
    print $sss[6]."<br>";

    foreach($sss as $k => $v) {
        print "key: $k, value:$v <br>";
    }

    $bbb = [
        "a","b","c","d","e","f","g"
    ];

    foreach($bbb as $k => $v) {
        print "key: $k, value:$v <br>";
    }