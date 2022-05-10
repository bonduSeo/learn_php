<?php
    include_once('db.php');

    function ins_board(&$param) {
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

    function sel_board_list(&$param) {
        $start_idx = $param["start_idx"];
        $row_count = $param["row_count"];
        $sql =
        "   SELECT A.i_board, A.title, B.nm, A.created_at, B.profile_img, A.i_user
            FROM t_board AS A
            INNER JOIN t_user AS B
            ON A.i_user = B.i_user
            ORDER BY i_board DESC
            LIMIT $start_idx, $row_count
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    function sel_paging_count(&$param) {
        $row_count = $param["row_count"];
        $sql =
        "   SELECT CEIL(COUNT(i_board) / $row_count) as cnt
            FROM t_board
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row["cnt"];
    }

    function sel_board(&$param) {
        $i_board = $param["i_board"];
        $sql = 
        "   SELECT A.title, A.ctnt, B.nm, A.created_at, A.updated_at, A.i_user
            FROM t_board AS A
            INNER JOIN t_user AS B
            ON A.i_user = B.i_user
            WHERE i_board = '$i_board'
        ";
        $conn = get_conn();
        $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
        return $result;
    }

    function upd_board(&$param) {
        $i_board = $param["i_board"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        $i_user = $param["i_user"];
        $sql = 
        "   UPDATE t_board
            SET title = '$title'
            ,ctnt = '$ctnt'
            WHERE i_board = $i_board AND i_user = $i_user
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        return $result;
    }

    function del_board(&$param) {
        $i_board = $param["i_board"];
        $i_user = $param["i_user"];
        $sql =
        "   DELETE FROM t_board
            WHERE i_board = '$i_board' 
            AND i_user = '$i_user'
        ";
        $conn = get_conn();
        return mysqli_query($conn, $sql);
    }

   function sel_next_board($i_board) {
        $sql =
        "   SELECT i_board
            FROM t_board 
            WHERE i_board > $i_board
            LIMIT 1
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if($row) {
            return $row["i_board"];
        }
        return 0;
   }

   function sel_pre_board($i_board) {
    $sql =
    "   SELECT i_board
        FROM t_board 
        WHERE i_board < $i_board
        ORDER BY i_board DESC
        LIMIT 1
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row) {
        return $row["i_board"];
    }
    return 0;
}