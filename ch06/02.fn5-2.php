<?php
    $snum = 20;
    $enum = 30;
    print_num_from_to($snum, $enum);
    print_num2($snum, $enum);
    print_num3($snum, $enum);
    // print_num4($snum, $enum);
  

    //[4,5,6,7,8,9,10] 이렇게 출력하게
    // 만약 enum값이 더 작으면 "종료값이 더 작을 수 없습니다" 가 출력되게

    function print_num_from_to($snum, $enum) {
        print "[";
        if($snum<=$enum) {
            for($i=$snum; $i<$enum; $i++) {
                print "$i, ";
            }
        } else {
            for($i=$snum; $i>$enum; $i--) {
                print "$i, ";
            }
        }
        print "$enum]<br>";
    }


    function print_num2($snum, $enum) {
        print "[";
        if($snum<=$enum) {
            for($i=$snum; $i<=$enum; $i++) {
                if($i>$snum) {
                    print ", ";
                }
                print $i;
            }
        } else {
            for($i=$snum; $i>=$enum; $i--) {
                if($i<$snum) {
                    print ", ";
                }
                print $i;
            }
        }
        print "]<br>";
    }

    function print_num3($snum,$enum) {
        print "[";
        for($i=$snum; $snum<$enum ? $i<=$enum : $i>=$enum; $snum<$enum ? $i++ : $i--) {
            if($i != $snum) {
                print ", ";
            }
            print $i;
        }
        print "]";
    }
       
    // function print_num4($snum,$enum) {
    //     print "[";
    //     for($i=$snum; $snum<$enum ? ($i<=$enum;$i++) : ($i>=$enum;$i--)) {
    //         if($i != $snum) {
    //             print ", ";
    //         }
    //         print $i;
    //     }
    //     print "]";
    // }
    // 문법오류

    ?>