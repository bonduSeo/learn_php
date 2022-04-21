<?php
include_once('db_connect.php');
session_start();
$conn = get_conn();
if(isset($_SESSION['log_status'])) {
    $log_id = $_SESSION['log_id'];
    // print $log_id;
    $sql2 =
    "
        SELECT icon_url FROM accounts2
        WHERE id = '$log_id'
    ";
    $result_log_status = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result_log_status);
    $profile_url = $row['icon_url'];
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
    <div id=container>
    <div id="profile"><img src=<?=$profile_url?>></div><br>
    <div id = "idn"><?=$log_id?></div>
    <br>
    <a href="myprofile_change.php"><button>프로필이미지 변경</button></a>
    <a href="list.php"><button>메인으로</button></a>
    </div>
</body>
</html>

<style>
    #container {
        width : 20rem;
    }
    #profile {
        width: 20rem;
        height:20rem;
        overflow: hidden;
        border-radius: 50%;
        
    }
    img {
        height:100%;
        width:100%;
        object-fit:cover;
    }
    #idn {
        text-align: center;
    }
</style>
