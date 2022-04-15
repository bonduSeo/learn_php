<?php
    include_once 'fn.php';
    $t_no = $_GET["t_no"];
    
    $sql = 
    "
        DELETE FROM t_board2
        WHERE t_no = ${t_no}
    ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("Location: list.php");