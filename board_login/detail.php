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
    $pre_board = sel_pre_board($i_board);
    $next_board = sel_next_board($i_board);
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
            if($_SESSION["login_user"]["i_user"] === $i_user ) { ?>
                <div>
                <a href='mod.php?i_board=<?=$i_board?>'><button>수정</button></a>
                <button onclick="isDel();">삭제</button>
                </div>
    <?php   }
        }
    ?>

    <h1>제목 : <?=$title?></h1>
    <div>글 번호 : <?=$i_board?></div>
    <div>글쓴이 : <?=$nm?></div>
    <div>등록일시 : <?=$created_at?>
        <?php if(isset($updated_at)) {
            echo " | 수정일시 : ".$updated_at;
        } ?>
    </div>
    <div>내용 : <?=$ctnt?></div>
    <div>
        <?php if($pre_board) {           ?>
            <a href="detail.php?i_board=<?=$pre_board?>"><button>이전글</button></a>
        <?php } if($next_board) {        ?>
            <a href="detail.php?i_board=<?=$next_board?>"><button>다음글</button></a>
        <?php }                          ?>
    </div>

    
    <script>
        // 요렇게 자바스크립트 추가할수있지만 , 파일만들어서하는게 깔끔하고 유지보수좋음
        function isDel() {
            // console.log('isDel 실행됨');
            // const result = confirm('삭제하시겠습니까?');
            // console.log(result);
            // if(result) {
            //     console.log('삭제할게요');
            // } else {
            //     console.log('취소할게요');
            // }

            if(confirm('삭제하시겠습니까?')) {
                location.href = "del.php?i_board=<?=$i_board?>";
            } 

            //자바스크립트는 보통문자열에서 홑따옴표
            //console.log f12창 콘솔에서 볼수있음
        }
    </script>
   
</body>
</html>