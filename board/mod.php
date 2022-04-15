<?php
    include_once 'db.php';

    $i_board = $_GET['i_board']; 

    $sql = " SELECT title, ctnt FROM t_board WHERE i_board = $i_board ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result))  
    {
        $title = $row["title"];
        $ctnt = $row["ctnt"];
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
    <h1>수정</h1>
    <a href="detail.php?i_board=<?=$i_board?>"><button>글로 이동</button></a>  
    <form action="/board/mod_proc.php" method="post"> 
    <!-- 굳이 post로 날리는데 쿼리스트링으로 날릴 필욘 없다 -->
        <div><input type="hidden" name="i_board" value="<?=$i_board?>"></div>
        <div><input type="text" name="title" value="<?=$title?>"></div>
        <div><textarea name="ctnt"><?=$ctnt?></textarea></div>
        <div>
            <input type="submit" value="수정">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>


<!-- 하이퍼링크주소앞에 / ./ 를 붙이냐 안붙이냐에 따라 결과값 다름 -->