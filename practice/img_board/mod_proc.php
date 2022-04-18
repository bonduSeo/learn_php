<?php
    include_once('db_connect.php');
    $id = $_POST["id"];
    $title = $_POST["title"];

    $sql = 
    "
        UPDATE gallery2
        SET title = '$title'
        WHERE id=$id
    ";
    $conn = get_conn();
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: list.php");
?>