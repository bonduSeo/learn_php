<?php
$filep = fopen("./lorem.txt", "r");

if (!$filep) {
    die("파일을 열수 없습니다.");
}
print "파일을 열었습니다<br>";

// print fgets($filep, 1024) . "<br>";
// print fgets($filep, 1024) . "<br>";
// print fgets($filep, 1024) . "<br>";
// print fgets($filep, 1024) . "<br>";
// print fgets($filep, 1024) . "<br>";
// print fgets($filep, 1024) . "<br>";
// print fgets($filep, 1024) . "<br>";
$count = 0;
while ($line = fgets($filep, 1024)) {
    print $count++ . "<br>";
    print $line . "<br>";
}

fclose($filep);
