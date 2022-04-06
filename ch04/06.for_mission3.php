<?php
    //for문을 활용해서 1-100더한값을 구하시오

    $pac = $_GET['pac'];
    // echo "$pac";


    $result = 0;
    for ($i=1; $i<=$pac; $i++)
    {
        $result = $result + $i;
        // $result += $i;
    }
    echo $result;


?>