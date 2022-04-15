<?php
    include_once "fn.php";

    $sql =
    "
        SELECT t_no, title, created_at
        FROM t_board2
        ORDER BY t_no DESC
    ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LIST</h1>
    <a href="write.php"><button>글쓰기</button></a>
    <table>
        <tr>
            <th>no</th>
            <th>제목</th>
            <th>작성일시</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result)) {
                $t_no = $row["t_no"];
                $title = $row["title"];
                $created_at = $row["created_at"];
                echo "<tr>";
                    echo "<td>$t_no</td>";
                    echo "<td><a href='detail.php?t_no=${t_no}'>$title</a></td>";
                    echo "<td>$created_at</td>";
                    
                echo "<tr>";
            }
        ?>
    </table>
</body>
</html>

<style>
    th,td {
        border : 1px solid black;
        padding: 5px;
    }
    table {
        border-collapse: collapse;
        margin-top: 10px;
    }
</style>