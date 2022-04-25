<?php
    session_start();
    if(isset($_SESSION["login_user"]))  {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>리스트</title>
</head>
<body>
    <div id="container">
        <header>
            <?=isset($_SESSION["login_user"]) ? "<div>".$nm."님 환영합니다.</div>":""?>
            <div>
                <a href="list.php">리스트</a>
                <a href="write.php">글쓰기</a>
                <?=
                    isset($_SESSION["login_user"]) 
                    ? "<a href='logout.php'>로그아웃</a>" 
                    : "<a href='login.php'>로그인</a>"
                ?>      
               <!-- xxphp echo의 축약형 -->
            </div>
        </header>
        <main>
        <h1>리스트</h1>
        <table>
            <tr>
                <th>no</th>
                <th>title</th>
                <th>writer</th>
                <th>created_at</th>
            </tr>
            <?php
                include_once('db/db_board.php');
                $result = sel_list();
                while($row = mysqli_fetch_assoc($result)) {
                    $i_board = $row['i_board'];
                    $title = $row['title'];
                    $nm = $row['nm'];
                    $created_at = $row['created_at'];

                    echo "<tr>";
                        echo "<td>".$i_board."</td>";
                        echo "<td>".$title."</td>";
                        echo "<td>".$nm."</td>";
                        echo "<td>".$created_at."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        </main>
    </div>
   
   
</body>
</html>