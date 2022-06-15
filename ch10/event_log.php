<?php
$filep = fopen("./logfile.txt", "a");
if (!$filep) {
    die("파일을 열 수 없습니다");
}
$now = date("Y-m-d H:i:s", time());
// $now = date("m-d H:i:s", time());
fputs($filep, $now . "\n");
fclose(($filep));

print "Connect Service";

$filep = fopen("./logfile.txt", "r");
while ($line = fgets($filep, 1024)) {
    print $line . "<br>";
}
