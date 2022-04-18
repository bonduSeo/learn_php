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
     $conn = get_conn();
     $result = mysqli_query($conn, $sql);

    
    header("Location:create_account_success.php?id=$nickname&result=$result");
     

