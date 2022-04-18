<?php
    include_once('db_connect.php');
    $idn = $_GET["idn"];

    $sql = 
    "
        SELECT icon
        FROM accounts
        WHERE id='$idn'
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result)) {
        $image = $row["icon"];
    }

    echo $image;
