<?php
    //php에서 제공해주는 sort를 사용하지않고 이렇게 연습하는이유는 알고리즘을 공부하기위해
    $arr = [10,33,12,8,1,89,11,44]; 
    $ct = count($arr);
    
   
    for($i=1; $i<$ct; $i++)
    {
        for($j=0; $j < ($ct-$i); $j++)
        {
            if($arr[$j] > $arr[$j+1])
            {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }

    foreach($arr as $sort)
   {
       print $sort."<br>";
   }
   
    //미션 하면서 한 실수: for( ; ; ) 세미콜론말고 쉼표써버림, array[] 0부터시작하는거 깜빡함
    //buble sorting 이론 관련: https://gmlwjd9405.github.io/2018/05/06/algorithm-bubble-sort.html

    // 쌤풀이는 같은데 for 부분--로 함. 깃헙가져와서 읽어볼것
    ?>