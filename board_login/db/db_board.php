<?php
    include_once('db.php');

    function ins_board($param) {
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        $i_user = $param["i_user"];

        $conn = get_conn();
        $sql = 
        "   INSERT INTO t_board
            (title, ctnt, i_user)
            VALUES
            ('$title', '$ctnt', '$i_user')  
        ";
        $result = mysqli_query($conn, $sql);
        return $result;
    }

    function sel_list() {
        $sql =
        "   SELECT A.i_board, A.title, B.nm, A.created_at
            FROM t_board AS A
            INNER JOIN t_user AS B
            ON A.i_user = B.i_user
            ORDER BY i_board DESC;
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        return $result;
    }