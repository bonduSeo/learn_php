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
    foreach($wholike as $who) {
        if($who == $log_id) {
            $liked = 1;
            break;
        }
    }
 $melike = $wholike['me'];
if (isset($liked)) {
    $sql = 
    "
        DELETE FROM liketable
        WHERE num = '$melike'
    ";
} else {

    $sql= 
    "
        INSERT INTO liketable
        (id, idn)
        VALUES
        ('$id', '$log_id')
    ";
}
    $conn = get_conn();
    mysqli_query($conn, $sql);
    header('Location:list.php');
?>

