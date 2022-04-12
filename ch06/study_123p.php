<?php
     error_reporting(E_ALL);
     ini_set('display_errors', '1');

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