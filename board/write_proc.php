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
    

?>