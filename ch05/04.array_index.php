<?php
    $numbers = array(10,20,30,40);

    print_r($numbers);
    print "<br>";
    print "count : ".count($numbers)."<br>";

    for($i=0; $i<count($numbers); $i++)
    {
        print $numbers[$i]."<br>";
    }
    print "--끝--<br>";

    $numbers = array(10,20,5=>30,40);
    $numbers[2] = 120; //숫자가 낮아도 뒤에 들어가는
    print_r($numbers);
    print "<br>";
    print "count : ".count($numbers)."<br>";

    for($i=0; $i<count($numbers); $i++)
    {
        print $numbers[$i]."<br>";
    }
    print "--끝--<br>";
    $numbers = array(10,20,'a'=>30,40);

    print_r($numbers);
    print "<br>";
    print "count : ".count($numbers)."<br>";

    for($i=0; $i<count($numbers); $i++)
    {
        print $numbers[$i]."<br>";
    }
    print "--끝--";
?>