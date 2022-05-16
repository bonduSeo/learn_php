<?php

include_once('db_connect.php');
session_start();


if(!isset($_SESSION['log_status'])) {
    echo "로그인이 필요합니다<br>";
    echo "<a href=login.php><button>로그인</button></a>";
    echo "<a href='list.php'><button>뒤로가기</button></a>";
    die();
} 

$log_id = $_SESSION['log_id'];
$id = $_GET['id'];

$wholike = liked($id, $log_id);

foreach($wholike as $key=>$who) {
    print $key."=>";
    print $who."<br>";
}

