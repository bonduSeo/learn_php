<?php
    include_once('db_connect.php');
    // print_r($_FILES);
  
     $nickname = $_POST["nickname"];
    
     $target_dir = "../../uploads/icons";
     $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     // Check if image file is a actual image or fake image
     if(isset($_POST["submit"])) {
         $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
         if($check !== false) {
             echo "File is an image - " . $check["mime"] . ".";
             $uploadOk = 1;
         } else {
             echo "File is not an image.";
             $uploadOk = 0;
         }
     }
     // Check if file already exists
     if (file_exists($target_file)) {
         // echo "Sorry, file already exists.";
         while(file_exists($target_file)) {
             $target_file = $target_file."1";
         }
      
         // $uploadOk = 0;
     }
     // Check file size
     if ($_FILES["fileToUpload"]["size"] > 5000000) {
         echo "Sorry, your file is too large.";
         $uploadOk = 0;
     }
     // Allow certain file formats
     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
     && $imageFileType != "gif" ) {
         echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
         $uploadOk = 0;
     }
     // Check if $uploadOk is set to 0 by an error
     if ($uploadOk == 0) {
         echo "Sorry, your file was not uploaded.";
         die();
     // if everything is ok, try to upload file
     } else {
         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
             // echo "<p>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</p>";
             // echo "<br><img src=../../uploads/".basename( $_FILES["fileToUpload"]["name"]). ">";
             // echo "<br><button type='button' onclick='history.back()'>돌아가기</button>";
         } else {
             echo "<p>Sorry, there was an error uploading your file.</p>";
             echo "<br><button type='button' onclick='history.back()'>돌아가기</button>";
             die();
         }
     }
 
     $img_url = "../../uploads/icons".basename( $_FILES['fileToUpload']['name']);
     $sql = 
    "
        INSERT INTO accounts
        (id, icon_url)
        VALUES
        ('$nickname', '$img_url')
 
    ";
     $sql_account = 
    "
        SELECT id FROM accounts
    ";
    $conn = get_conn();
    
    $result_account = mysqli_query($conn, $sql_account);
   
 

  


    try {
        while($row = mysqli_fetch_assoc($result_account)) {
           
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
     

