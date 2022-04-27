<?php
    $i_board = $_GET["i_board"];
    session_start();
    $login_user = $_SESSION["login_user"];
    $param = [
        "i_board" => $i_board
    ];
    include_once('db/db_board.php');
    $result = sel_board($param);
    if($result) {
        $title = $result["title"];
        $ctnt = $result["ctnt"];
        $nm = $result["nm"];
        $i_user = $result["i_user"];
    }
    if(!isset($_SESSION["login_user"]) || $login_user["i_user"] != $i_user) {
        header("Location:detail.php?i_board=$i_board");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글 수정</title>
</head>
<body>
    <h1>수정</h1>
    <form action="mod_proc.php" method="post">
        <div><input type="hidden" name="i_board" value="<?=$i_board?>" readonly></div>
        <div><input type="text" name="title" value="<?=$title?>"></div>
        <div><textarea name="ctnt"><?=$ctnt?></textarea></div>
        <div>
            <input type="submit" value="수정">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>