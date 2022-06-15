<?php
$filep = fopen("./chat.txt", "a");

if (!$filep) {
    die("파일을 열 수 없습니다");
}
// print "파일을 열었습니다.<br>";

$newText = "";
if (isset($_POST['newText'])) {
    $newText = "\n" . $_POST['newText'];
    $_POST['newText'] = "";
}


fputs($filep, $newText);
fclose($filep);

// $filep = fopen("./chat.txt", 'r');
// while ($line = fgets($filep, 1024)) {
//     print $line . "<br>";
// }
// fclose($filep);
$data = file("chat.txt");

// print_r($data);
foreach ($data as $k => $v) {
    // print $k . $v . "<br>";

    if ($v != $data[$k > 0 ? $k - 1 : $k]) {
        print $v . "<br>";
    }
}
