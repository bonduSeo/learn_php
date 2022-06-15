<?php
$data = file("./name.txt");
print_r($data);

print "<br>-------<br>";
foreach ($data as $k => $name) {
    print $name . "<br>";
}
