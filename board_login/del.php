<?php
    $i_board = $_GET['i_board'];
    $param = [
        'i_board' => $i_board
    ];
    include_once('db/db_board.php');
    $result = sel_board($param);
    if($result) {
        $i_user = $result['i_user'];
    }
    
    session_start();
    // if(!isset($_SESSION['login_user']) || $_SESSION['login_user']['i_user']!==$i_user) {
    //     header('Location:list.php');
    //     // print "fuck";
    //     die();
    // }

    $param = [
        'i_board' => $i_board,
        'i_user' => $_SESSION['login_user']['i_user']
    ];

    $result = del_board($param);

    if($result) {
        header("Location: list.php");
    } else {
        print "삭제쿼리 실패";
        print "<a href='detail.php?i_board=<?=$i_board?>'>글로 이동</a>";
    }