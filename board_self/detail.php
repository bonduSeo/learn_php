<?php
    include_once 'fn.php';
    $t_no = $_GET["t_no"];
    
    $sql = 
    "
        SELECT * FROM t_board2
        WHERE t_no=${t_no}
    ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result)) {
        $title = $row["title"];
        $ctnt = $row["ctnt"];
        $created_at = $row["created_at"];
        $updated_at = $row["updated_at"];
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
    <a href=""><button>수정</button></a>
    <a href="del.php?t_no=<?=$t_no?>"><button>삭제</button></a>
    <h1>제목: <?=$title?></h1>
    <div>
        작성일시: <?=$created_at?>
        <?php
            if($updated_at) {
                echo " | 수정일시: $updated_at";
            }
        ?>
    </div>
    <div id="ctct">내용: <?=$ctnt?></div>
</body>
</html>