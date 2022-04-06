<?php
    //랜덤한 숫자에 따른 * 숫자
    $star = rand(1,20);
    echo $star."star<br>";
    for ($i=1; $i <= $star ; $i++ )
    {
        echo "☆";
    }

?>

