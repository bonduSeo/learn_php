<?php
    include_once('db_connect.php');
    $id = $_POST['id'];
    $a_password = $_POST['a_password'];

    $sql = 
    "
        SELECT id, a_password
        FROM accounts2
        WHERE id='$id' && a_password=password('$a_password')
    ";
    
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
 

    
    if(isset($row)) {
        session_start();
        $_SESSION['log_id'] = $id;
        $_SESSION['log_status'] = 1;

        header("Location: list.php");
    }

    print "아이디or비밀번호 오류<br>";
    print "<a href='login.php'><button>뒤로가기</button></a>";
?>