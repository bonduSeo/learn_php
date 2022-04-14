<?php
    include "db.php";
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print "title : $title <br>";
    print "ctnt : $ctnt <br>";

    $conn = get_conn();

    $sql = 
    "
      INSERT INTO t_board
      (title, ctnt)
      VALUES
      ('${title}', '${ctnt}')  
    ";

    
    mysqli_query($conn, $sql);
    mysqli_close($conn); //연결닫는거! 리소스관리때문에 아주 중요하다고함
    
    // echo "<script>location.herf='list.php';</script>"; 
    //자바스크립트를이용한 리다이렉트 방법.리다이렉션 검색 ㄱㄱ
      // 도메인주소에서 /(슬러시)검색

    header("Location: list.php");
    die();
?>