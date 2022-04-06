<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container {
            display: flex;
            flex-flow: wrap;
        }
        div.dan {
            border: 1px solid gray;
            padding: 20px;
            margin: 10px;
            width: 120px;
        }
    </style>
</head>
<body>





<?php
    //구구단 2단- 9 단
    echo "<div id='container'> ";
    for ($i=2; $i<=100; $i++)
    {   echo "<div class='dan'>";
        print "{$i}단 <br>";
        for($j=1;$j<=9; $j++)
        {   $result = $i * $j;
            print "{$i} x {$j} = {$result}<br>";
            
        }
        
        echo "</div>";
    }
    
    echo "</div>";
?>

</body>
</html>
