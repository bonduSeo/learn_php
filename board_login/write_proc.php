<?php
    session_start();
    $login_user = $_SESSION["login_user"];
    $i_user = $login_user["i_user"];

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    $param = [
        "title" => $title,
        "ctnt" => $ctnt,
        "i_user" => $i_user
    ];

    include_once('db/db_board.php');
    if($result = ins_board($param)) {
        header('Location: list.php');
    } else {
        echo "인서트오류";
    }


?>