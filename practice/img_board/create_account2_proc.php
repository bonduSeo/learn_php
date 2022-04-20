<?php
    include_once('db_connect.php');

    $idn = $_POST['idn'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    

    if($pass1 !== $pass2) {
        echo "비밀번호 확인 오류<br>";
        echo "<a href='create_account2.php'><button>다시시도</button></a>";
        die();
    }

    $sql_id = 
    "
        SELECT id FROM accounts2;
    ";
    
    $conn = get_conn();
    $result_id = mysqli_query($conn, $sql_id);

    while($row = mysqli_fetch_assoc($result_id)) {
        if($idn == $row['id']) {
            echo "중복된 아이디입니다<br>";
            echo "<a href='create_account2.php'><button>다시시도</button></a>";
            die();
        }
    }
    mysqli_free_result($result_id);

    $sql =
    "
        INSERT INTO accounts2
        (id, a_password, icon_url)
        VALUES
        ('$idn', password('$pass1'),'../../uploads/icons/basic.png' )
    ";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "아이디 생성 성공<br>";
        echo "<a href='login.php'><button>로그인</button></a>";
    }


?>