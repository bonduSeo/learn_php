<?php
    include_once 'fn.php';
    $t_no = $_POST["t_no"];
    $title_mod = $_POST["title_mod"];
    $ctnt_mod = $_POST["ctnt_mod"];

    $sql = 
    "
        UPDATE t_board2
        SET title = '$title_mod'
            , ctnt = '$ctnt_mod'
        WHERE t_no = '$t_no'
    ";
    $conn = get_conn();
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: detail.php?t_no=$t_no");

?>