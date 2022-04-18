<?php

    include_once('db_connect.php');

    $conn = get_conn();
    mysqli_close($conn);
    print_r($conn);
    print "<br>";
    $conn = get_conn();
    mysqli_close($conn);
    print_r($conn);