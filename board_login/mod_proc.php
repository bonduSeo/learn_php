<?php
    $i_board = $_POST["i_board"];
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];
    session_start();
    $login_user = $_SESSION["login_user"];

    $param = [
        "i_board" => $i_board,
        "title" => $title,
        "ctnt" => $ctnt,
        "i_user" => $login_user["i_user"]
    ];

    include_once("db/db_board.php");
    $result = upd_board($param);
    if($result) {
        header("Location: detail.php?i_board=$i_board");
    } else {
        print "쿼리 실패";
    }

?>