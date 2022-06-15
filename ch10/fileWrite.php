<?php
$filep = fopen("./loremC.txt", "a");

if (!$filep) {
    die("파일을 열 수 없습니다");
}
print "파일을 열었습니다.<br>";

fputs($filep, "\n 하하핫");
fclose($filep);

$filep = fopen("./loremC.txt", 'r');

while ($line = fgets($filep, 1024)) {
    print $line . "<br>";
}


//  \n \t(tap) escape string