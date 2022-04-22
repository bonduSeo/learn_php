<?php
    session_start();
    // print $g;
    print $_SESSION["g"];
    print_r($_SESSION);
    print "<br>";
    print session_id();
    print "<br>";
    // session_unset();
session_destroy();
    session_start();
  
    // print $_SESSION["g"];
    // print_r($_SESSION);
    echo session_id(), "<br>";
    
    $g = "aaaaa::";
    echo $g , "aasadf<br>";

    //echo 에 , 기능이있네