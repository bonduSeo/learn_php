<?php
    $matrix = array(
        array(1,2,3,0),
        array(4,5,6,0,1),
        array(7,8,9,0),
    );
   

    print "matrix count : ".count($matrix)."<br>";
    print "matrix[0] count :".count($matrix[0])."<br>";
    print "matrix[1] count :".count($matrix[1])."<br>";
    print "matrix[2] count :".count($matrix[2])."<br>";

    $child1 = $matrix[2];
    print_r($child1);
    print "<br>";
    $matrix[2][0] = 11;
    print_r($child1);
    print "<br>";
    print $matrix[2][0];
    print "<br>";
    print count($child1);
    

    //위 child1 처럼 배열을 복사하면 주소만 가지는게 아니라 아예 데이타가 복사됨
    
?>