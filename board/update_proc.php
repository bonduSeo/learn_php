<?php
    include_once 'db.php';
    $i_board = $_GET["i_board"];

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print "title : $title <br>";
    print "ctnt : $ctnt <br>";

    $sql = 
    "
        UPDATE t_board
        SET 
        title='{$title}'
        ,ctnt='{$ctnt}'
        WHERE i_board={$i_board}
    ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    // print $result;
    header("Location: detail.php?i_board=${i_board}");
