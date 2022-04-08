<?php
    //  rand(1,10)실행시킬건데 10이나올때까지 반복
  
    while($r_val !== 10)
    {
        $r_val = rand(1, 10);
        print "r_val: $r_val<br>";
    }
    print "끝<br>";

    print "----<br>";


    while($r_val2 !== 10)
    {
        $r_val2 = rand(1, 10);
        if($r_val2 !== 10)
        {
            print "r_val: ".$r_val2."<br>";
        }
    }
    
    print "끝<br>";

   
    print "<hr>";
    //선생님 솔루션 깃허브에서 찾아넣기
    print "-- 시작 -- <br>";
    $r_val = rand(1, 10);

    while($r_val != 10)
    {
        print "r_val : $r_val <br>";        
        $r_val = rand(1, 10);        
    }
    print "-- 끝 -- <br>";


?>

