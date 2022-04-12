<?php
    $i = 20;
    $result = X($i);
    print $result."<br>";

    $i = 17;
    $result = X($i);
    print $result."<br>";


    function X($input) {
        if(($input%2)==0)
            return $input >> 2;
        else
            return $input <<1;
    }

?>