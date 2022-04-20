<?php
    include_once('db_connect.php');

    $image = $_FILES["image"]["tmp_name"];
    $title = $_POST["title"];
    $account = $_POST["account"];
    // echo $account;

    // print_r($image);

    $size = getimagesize($image);
    $width = $size[0];
    $height = $size[1];
    $filesize = filesize($image);
    $imageblob = addslashes(fread(fopen($image,"r"), $filesize));

    $sql = 
    "
        INSERT INTO gallery3
        (writer, image, title, width, height, file_size)
        VALUES
        ('$account','$imageblob', '$title', '$width', '$height', '$filesize')

    ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    // echo $result;

    header("Location:list.php");



?>