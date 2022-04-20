<?php
    include_once('db_connect.php');
   
    session_start();
   
    if(isset($_SESSION['log_status'])) {
        $log_id = $_SESSION['log_id'];
    }

// print_r($_FILES["new_profile"]);
    $fileToUpload = $_FILES["new_profile"];
    
    $img_url = upload_file($fileToUpload);

    $sql = 
    "
        UPDATE accounts2
        SET icon_url = '$img_url'
        WHERE id = '$log_id'
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);

    if($result) {
        header('Location: myprofile.php');
    } else {
        echo "실패하였습니다";
    }
 ?>