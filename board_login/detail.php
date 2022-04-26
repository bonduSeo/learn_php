<?php
    $i_board = $_GET['i_board'];
    $param = [
        'i_board' => $i_board
    ];
    include_once('db/db_board.php');
    $result = sel_board($param);
    if($result) {
        $title = $result['title'];
        $ctnt = $result['ctnt'];
        $nm = $result['nm'];
        $i_user = $result['i_user'];
        $created_at = $result['created_at'];
        $updated_at = $result['updated_at'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <div><a href="list.php">리스트</a></div>
    <?php 
        session_start();
        if(isset($_SESSION["login_user"])) {
            if($_SESSION["login_user"]["i_user"] === $i_user ) {
                echo    "<div>
                        <a href='mod.php'><button>수정</button></a>
                        <a href='del.php'><button>수정</button></a>
                        </div>";
            }
        }
    ?>

    <h1>제목 : <?=$title?></h1>
    <div>글쓴이 : <?=$nm?></div>
    <div>등록일시 : <?=$created_at?>
        <?php if(isset($updated_at)) {
            echo " | 수정일시 : ".$updated_at;
        } ?>
    </div>
    <div>내용 : <?=$ctnt?></div>
    
    
   
</body>
</html>