<?php
    $scores = array(
            //국, 영, 수
        array(100,100,100), //영수
        array(90,80,70),    //순자
        array(55,65,77),    //영철
        array(12,11,12), 
        
    );
    $names = array("영수","순자","영철","박박박");
    $each_sum = array();

    for($i=0; $i<count($scores); $i++)
    {
        for($j=0; $j<count($scores[$i]); $j++)
        {
            $total_sum += $scores[$i][$j];
            $each_sum[$names[$i]] += $scores[$i][$j];
        }
    }

    print "토탈합계 : ".$total_sum."<br>";
    
    // for($i=0; $i<count($each_sum); $i++)
    // {
    //     print $names[$i]." : ".$each_sum[$i]."<br>";
    // }



    foreach($each_sum as $key => $sum)
    {
        print $key." : ".$sum."<br>";
    }

   

?>