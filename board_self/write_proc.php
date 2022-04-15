<?php
    include_once 'fn.php';
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    $sql = 
    "
      INSERT INTO t_board2
      (title, ctnt)
      values
      ('$title','$ctnt')
    ";

    $conn = get_conn();
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: list.php");

?>