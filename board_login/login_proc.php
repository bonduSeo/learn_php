<?php
include_once ('db/db_user.php');
    //login.php에서 넘어오는값을 적절한변수에 담는다
    $uid = $_POST["uid"];
    $upw = $_POST["upw"];

    echo "uid : ".$uid."<br>";
    echo "upw : ".$upw."<br>";

    $param = [
        "uid" => $uid
    ];
    $result = sel_user($param);

    if(empty($result)) {
        echo "해당하는아이디없음";
        exit;
    }
    echo "i_user : ".$result["i_user"]."<br>";
    echo "pw : ".$result["upw"]."<br>";

    if($upw === $result["upw"]) {
        session_start();
        $_SESSION["login_user"] = $result;
      
        header("Location: list.php");
    } else {
        header("Location: login.php");
    }