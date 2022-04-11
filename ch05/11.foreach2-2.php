<table>
    <tr>
            <th>이름</th>
            <th>키</th>
  </tr>

<?php
    //
    $array = array(
        "Hong"=>182.2,
        "Hwang"=>180.4,
        "Kim"=> 176.3,
        "Park"=>174.1
    );

    foreach($array as $name => $height)
    {
        echo "<tr>
                <td>$name</td>
                <td>$height</td>
            </tr>";
    }; 
?>
</table>

<style>
    table {
        border-collapse: collapse;
    }
    table, th,td {
        border:1px solid black;
        
    }
    th,td {
        padding: 10px;
        width: 80px;
    }
</style>

<!-- ch00_start 가 딱 요기까지 배운내용으로 페이지만든것 -->