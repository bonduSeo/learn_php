<?php
     include_once "db.php";  
     // _once 를 쓰면 중복으로 쓰더라도 한번만 불러온다

     $conn = get_conn();
     $sql = "SELECT i_board, title, create_at FROM t_board ORDER BY i_board DESC";
     $result = mysqli_query($conn, $sql); //이안에 셀렉트 정보가 다 담겨있다고함
     mysqli_close($conn); //그래서 일찍닫음
    //  print_r($conn);
    //  print_r($result);
    //  print "<br>";
    // print_r(mysqli_fetch_assoc($result));
    // print "<br>";
    // print_r(mysqli_fetch_assoc($result));
    // print "<br>";
    // print_r(mysqli_fetch_assoc($result));

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
    <h1>리스트</h1>
    <a href="write.php"><button>글쓰기</button></a>
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성일시</th>
            
        </tr>
        <?php
            while($row=mysqli_fetch_assoc($result)) 
            // 함수결과를 순서대로 $row 에 넣어준다. while(true or false) 응용한거 =와  ==의 차이 항상 기억
            {
                $i_board = $row['i_board'];
                $title = $row['title'];
                $create_at = $row['create_at'];
                print "<tr>";
                    print "<td>${i_board}</td>";
                    print "<td><a href='detail.php?i_board=${i_board}'>${title}</td>";
                    print "<td>${create_at}</td>";
                print "<tr>";
            }
            // mysqli_close($conn);
        ?>
    </table>
</body>
</html>

<style>
    table {
        border-collapse : collapse;
    }
    th,td {
        border: 1px solid black;
    }
</style>

