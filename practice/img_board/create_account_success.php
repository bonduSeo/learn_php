<?php
    include('db_connect.php');
    $result = $_GET['result'];
    $id = $_GET['id'];

    if($result) {
        echo "아이디만들기 성공<br>";
        echo "<a href='list.php'><button>메인으로</button></a>";
    } else {
        echo "아이디 만들기 실패(중복된 아이디 등)";
        echo "<a href='create_account.php'><button>다시 시도</button></a>";
    }