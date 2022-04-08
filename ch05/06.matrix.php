<?php
    $matrix = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9),
    );
    print_r($matrix);
    print "<br>";
    print $matrix[1][1]."<br>";
    print $matrix[2][0]."<br>";    // [행][열]로 이해되면서 [2번어레이][그속의0번어레이] 논리적으로도 맞음
    
    $child1 = $matrix[2];
    print $child1[0]."<br>";   //위에문단이랑 같은 접근
    print array(7,8,9)[0];   //마찬가지

    
?>