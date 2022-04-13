<?php
    //가변파라미터 함수
    print_sum(1,2);
    print_sum(1,2,3);
    print_sum(1,2,3,4);
    print_sum(12,4,5642,1,532,1,31254,135,316,1,5,2);
    print_sum2(1,2,3,4);

    function print_sum2() {
        $sum = 0;
        $nums = func_get_args();
        foreach($nums as $n) {
            $sum += $n;
        }
        print $sum."<br>";
    }
    // 책에있는 방법 => 옛날방법
// 함수내부의 인자와 관련된 함수
    //func_num_args() :인자수 리턴
    //func_get_arg() : 인자 값 가져올때 사용
    //func_get_args() :인자 배열로 받음


    function print_sum(...$vals) { //$XXX 배열로 넘어옴 변수이름 암때나
        $sum = 0;
        foreach($vals as $n) {
            $sum += $n;
        }
        // $sum = array_sum($vals);
        // 이런 미리정의된 함수도 있긴하네
        print $sum."<br>";
    }


?>