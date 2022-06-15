<?php
$data = file("./major.txt");
print_r($data);

print "<br>----------<br>";
foreach ($data as $line) {

    $str = explode(" ", $line);
    // print "Name : " . $str[0] . " , Major : " . $str[1] . "<br>";
    print "Name: {$str[0]}, Major : {$str[1]}<br>";
}
