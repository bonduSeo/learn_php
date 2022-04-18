<?php
    include_once('db_connect.php');
    $id = $_GET["id"];

    $sql = 
    "
        SELECT image
        FROM gallery
        WHERE id=$id
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result)) {
        $image = $row["image"];
    }

    echo $image;
