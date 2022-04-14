<?php
    include_once 'db.php';

    $i_board = $_GET['i_board'];  // 주소에 있는 i_board="xxx"의 정보를 가져옴
    // print "i_board : ${i_board} <br>"; 
    //값을 잘받는지 확인해봄

    $sql = " SELECT * FROM t_board WHERE i_board = $i_board ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    // print_r(mysqli_fetch_assoc($result));
    // print "<br>";

    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row["title"];
        $ctnt = $row["ctnt"];
        $create_at = $row["create_at"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="list.php"><button>리스트</button></a>
    <div>제목 : <?= $title ?></div>
    <!--  타이틀변수 앞에 있는 꺽쇠물음표는: 표현식. 꺽쇠?php print 와 동일? -->
    <div>작성일시 : <?= $create_at ?></div>
    <div>내용 : <?= $ctnt ?></div>
</body>
</html>