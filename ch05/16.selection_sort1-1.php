<?php
    //선택정렬(selection sort) :인덱스 기록을 이용
    //이론 https://gmlwjd9405.github.io/2018/05/06/algorithm-selection-sort.html

    $arr = [10,33,12,8,1,89,44];
    // print_r($arr);
    // print "<br>";

  
    $ct = count($arr);

    for($i=0; $i<$ct-1; $i++)
    {
        $idx=$i;
        for($j=$i+1; $j<$ct; $j++)
        {
            if($arr[$idx] > $arr[$j])
            {
                $idx = $j; 
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$idx];
        $arr[$idx] = $temp;
        // print $idx."<br>";
        // print_r($arr);
        // print "<br>";
        // print "<br>";
    }


    foreach($arr as $sort)
   {
       print $sort."<br>";
   }

// 알고리즘을 공부하기위해서 해봤고
//실제로는 구현되어있는 sort 사용할것
// "퀵정렬" 이라는 아주 효율적인 방식으로 구현되어있다. 궁금하면 검색 ㄱㄱ

// 프로그래머스 라는 사이트에 채용정보 및 코딩테스트 있음

?>