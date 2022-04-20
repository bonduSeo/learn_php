<?php
    session_start();
   include_once('db_connect.php');

  
   $title = $_POST["title"];
    if(isset($_SESSION['log_status'])) {
        $account = $_SESSION['log_id'];
    } else {
        header('Location:list.php');
    }
    $fileToUpload = $_FILES["fileToUpload"];
    // print_r($fileToUpload);
    // die();
    $img_url = upload_file($fileToUpload);
    //
    $sql = 
   "
       INSERT INTO gallery3
       (writer, img_url, title)
       VALUES
       ('$account','$img_url', '$title')

   ";

   $conn = get_conn();
   $result = mysqli_query($conn, $sql);
   mysqli_close($conn);

   // echo $result;

   header("Location:list.php");
?>
