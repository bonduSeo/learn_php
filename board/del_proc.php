<?php
    $i_board = $_GET["i_board"];
    // print $i_board;

    include_once 'db.php';

    $sql = 
    "
        DELETE FROM t_board
        WHERE i_board={$i_board}
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    print "result : ".$result;
    header('Location: list.php');
?>