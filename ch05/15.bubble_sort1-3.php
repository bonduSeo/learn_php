<?php
    //승재씨코드 - 버블소팅이랑 다른방법으로 낮은값부터 결론적으로 오름차순만듬

   
    
   
    $arr = [100,33,12,8,1,89,44,34];

    for($i=0; $i<count($arr); $i++)
    {
        for($z=count($arr)-1; $i<$z; $z--)
        {
            if($arr[$i] > $arr[$z])
            {
                $temp = $arr[$i];
                $arr[$i] = $arr[$z];
                $arr[$z] = $temp;
            }
        }
    }

   foreach($arr as $sort)
   {
       print $sort."<br>";
   }
  
    ?>