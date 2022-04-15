<?php
    print __FILE__."<br>";
    print __LINE__."<br>";
    print __LINE__."<br>";
    

    print "PHP VERSION : ".PHP_VERSION."<br>";
    print "OS : ".PHP_OS."<br>";

    print "<br>";
    print "--글로벌 상수--<br>";
    foreach($GLOBALS as $key => $var) {
        print $key." : ";
        print_r($var);
        // print $var;
        print "<br>";
    }

    print_r($GLOBALS);
    print "<hr>";
    print $_SERVER;

    // php superglobal 검색

    //$GLOBALS 배열에 전역함수가 저장됨. (함수 밖에서 선언한 모든함수, _GET _POST 등)
?>