<?php
    include_once('db_connect.php');
    // print_r($_FILES);
     $image = $_FILES["image"]["tmp_name"];
     $nickname = $_POST["nickname"];
    
     $filesize = filesize($image);
     $imageblob = addslashes(fread(fopen($image,"r"), $filesize));

     $sql = 
     "
         INSERT INTO accounts
         (id, icon)
         VALUES
         ('$nickname','$imageblob')
 
     ";

     $sql_sel = 
     "
        SELECT num, id FROM accounts
     ";

     $conn = get_conn();
     $result = mysqli_query($conn,$sql_sel);


    try {
        while($row = mysqli_fetch_assoc($result)) {
            $num = $row["num"];
            $idn = $row["id"];
            if ($idn==$nickname) {
                throw new Exception ("중복된 아이디 오류");
            } 
        }
        $result = mysqli_query($conn, $sql);
    } catch(Exception $e) {
        mysqli_close($conn);
        echo $e -> getMessage();
        echo "<br>";
        echo "<a href='create_account.php'><button>다른 아이디 만들기</button></a>";
        die();
    }
     mysqli_close($conn);
    
     //이부분 중복된아이디일경우 에러뜨는데, 원하는경고문뜨는식으로 조절할수없나
     // 문법까지 맞고 정상통신했는데 실패일경우 false반환?!
     // 인서트는 false뜰일없고 update나 delete에서 그럴일있다고함
     // 예외처리 하려면 try catch방법을 쓰라고한다
    
    header("Location:create_account_success.php?id=$nickname&result=$result");
     

