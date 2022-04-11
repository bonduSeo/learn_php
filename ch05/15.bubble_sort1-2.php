<?php
    //php에서 제공해주는 sort를 사용하지않고 이렇게 연습하는이유는 알고리즘을 공부하기위해
    $arr = [10,33,12,8,1,89,11,44]; 
   
    
   
    for($i = count($arr)-1 ; $i > 0; $i--)
    {
        for($j=0; $j<$i; $j++)
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
  
    ?>