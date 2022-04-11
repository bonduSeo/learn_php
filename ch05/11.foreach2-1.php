<?php
    //
    $array = array(
        "Hong"=>182.2,
        "Hwang"=>180.4,
        "Kim"=> 176.3,
        "Park"=>174.1
    );

    echo "<table>";
    echo "<tr>
            <th>이름</th>
            <th>키</th>
        </tr>";
    foreach($array as $name => $height)
    {
        echo "<tr>
                <td>$name</td>
                <td>$height</td>
            </tr>";
    };
    echo "</table>";
?>

<style>
    table {
        border-collapse: collapse;
    }
    table, th,tr,td {
        border:1px solid black;
        
    }
    th,td {
        padding: 10px;
        width: 80px;
    }
</style>