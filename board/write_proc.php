<?php
    // process aka proc

    include_once "db.php";  
    // _once 를 쓰면 중복으로 쓰더라도 한번만 불러온다
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

    
    $result = mysqli_query($conn, $sql); //결과 안보려면 $result = 빼도됨
    mysqli_close($conn); //연결닫는거! 리소스관리때문에 아주 중요하다고함
    
    print "result :$result"; //아래 리다이렉션 지우면 요 결과(입력이 성공했다)출력

    // echo "<script>location.herf='list.php';</script>"; 
    //자바스크립트를이용한 리다이렉트 방법.리다이렉션 검색 ㄱㄱ
      // 도메인주소에서 /(슬러시)검색
    header("Location: list.php");
    // die(); // exit의 별칭으로 중간에 쓰면 그이후로 실행이 안되게 하는것
?>