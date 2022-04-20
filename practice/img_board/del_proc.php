<?php
    include_once('db_connect.php');
    $id = $_GET['id'];

    $sql = 
    "
        DELETE FROM gallery3
        WHERE id=$id
    ";
    $conn = get_conn();
    mysqli_query($conn, $sql);

    header('Location: list.php');