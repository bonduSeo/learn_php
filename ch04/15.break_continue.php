<?php
    print "-------break-------<br>";
    for($i=0; $i<20; $i++)
    {
        if($i == 12) { break; }
        print $i."<br>";
    }

    print "--------continue-------<br>";
    for($i=0; $i<20; $i++)
    {
        if($i ==12) {continue;} //스킵(밑에꺼 실행안하고 다음반복으로)
        print $i."<br>";
    }
?>