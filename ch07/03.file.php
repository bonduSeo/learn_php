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
?>