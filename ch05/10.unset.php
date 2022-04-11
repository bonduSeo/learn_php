<?php
    if(isset($name)) {
        print "name is ok!!";
    }
    
    $name = "HongGillDong";
    if(isset($name)) {
        print "name is ok!!";
    }
    print $name."<br>";

    unset($name);
    print $name."<br>";

    print "The End"


    // unset (연상배열에서 한 항목 지우기위해서 unset()함수 사용)
?>