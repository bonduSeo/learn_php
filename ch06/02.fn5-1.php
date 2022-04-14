<?php
    $snum = 4;
    $enum = 9;
    print_num_from_to($snum, $enum);
    print_num2($snum,$enum);

    //[4,5,6,7,8,9,10] 이렇게 출력하게
    // 만약 enum값이 더 작으면 "종료값이 더 작을 수 없습니다" 가 출력되게

    function print_num_from_to($snum, $enum) {
       
        if($snum<=$enum) {
            print "[";
            for($i=$snum; $i<$enum; $i++) {
                print "$i, ";
            }
            print "$enum]<br>";
        } else {
            print "종료값이 더 작을 수 없습니다";
        }
    }

    //선생님코드
    function print_num2($snum, $enum) {
        if($enum < $snum)
        {
            print "<div>종료값어쩌구</div>";
            return;
            // 요렇게하면 else도 안쓰고 코드를 플랫하게(탭많이안들억가게) 짤수있다
        }
        print "[";
        for($i=$snum; $i<=$enum; $i++)
        {
            if($i>$snum)
            {
                print", ";
            }
            print $i;
        }
        print "]";
    }
?>