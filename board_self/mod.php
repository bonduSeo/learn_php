<?php
    include_once 'fn.php';
    $t_no = $_GET["t_no"];

    $sql = 
    "
        SELECT title, ctnt
        FROM t_board2
        WHERE t_no = $t_no
    ";
    $conn = get_conn();
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result)) {
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
    <h1>글쓰기</h1>
        <a href="detail.php?t_no=<?=$t_no?>"><button>수정취소</button></a>
        <form action="mod_proc.php" method="post">
            <input type="hidden" name="t_no" value="<?=$t_no?>">
            <div><input type="text" name="title_mod" value="<?=$title?>" ></div>
            <div><textarea name="ctnt_mod" id="txt_area" cols="30" rows="10" ><?=$ctnt?></textarea></div>
            <input type="submit" value="수정">
            <input type="reset" value="초기화">
        </form>
</body>
</html>