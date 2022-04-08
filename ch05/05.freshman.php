<?php
    //자바에서는 map이라불리는데
    //php에서는 (연상)배열로 퉁치는?? 인덱스를 문자로하는것

    $freshman = array(
        "David" =>  "computer",
        "Alice" =>  "Math",
        "Elsa"  =>  "Physics",
        "Bob"   =>  "Music",
        "Chris" =>  "Electronics" 
    );
    print_r($freshman);
    print "------<br>";

    print $freshman["David"]."<br>";
    print $freshman["Alice"]."<br>";
    print $freshman["Elsa"]."<br>";
    print $freshman["Bob"]."<br>";
    print $freshman["Chris"]."<br>";
    
    print "------<br>";
    $freshman["Bob"] = "Dance";
    print $freshman["Bob"]."<br>";

    print "-----<br>";
    $freshman["Frank"] = "History";
    print_r($freshman);


    
?>