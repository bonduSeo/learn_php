<?php
$data = file('./exam6.txt');

// print_r($data);

// echo strtoupper($data[0]);

$filep = fopen("./exam6_capital.txt", 'w');


foreach ($data as $v) {
    fputs($filep, strtoupper($v));
    print $v;
}
fclose($filep);
