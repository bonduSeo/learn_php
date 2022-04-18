<?php
    include_once('db_connect.php');
    $id = $_GET["id"];

    $sql = 
    "
        SELECT title, writer
        FROM gallery2
        WHERE id=$id
    ";
    $conn=get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result)) {
        $title = $row["title"];
        $writer = $row["writer"];
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
    <div class='box'>
        <div id="account_box">
            <div><?=$writer?></div>
            <a href='list.php'><button>수정취소</button></a>
            <a href='del_proc.php?id=<?=$id?>'><button>글 삭제</button></a>
        </div>

        <img src=./view.php?id=<?=$id?>>
        <form action="mod_proc.php" method="post">
            <input type="hidden" name="id" value="<?=$id?>">
            <textarea name="title" cols="60" rows="10"><?=$title?></textarea>
            <br>
            <input type="submit" value="수정">
            <input type="reset" value="초기화">
        </form>
        </div>
    </div>


</body>
</html>