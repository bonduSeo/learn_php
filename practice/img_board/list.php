<?php

    include_once('db_connect.php');
    $sql = 
    "
        SELECT A.id, A.title, A.writer,A.img_url, B.icon_url
        FROM gallery2 A
        INNER JOIN accounts B
            ON A.writer=B.id
        ORDER BY id DESC
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
    <h1><a href="list.php" 
    style="
        color:black; 
        text-decoration:none;">jabstagram</a></h1>
    <a href="write.php"><button>글쓰기</button></a>
    <br><br>
    <div id="container">

<?php
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $title = $row['title'];
        $writer = $row['writer'];
        $img_url = $row["img_url"];
        $icon_url = $row["icon_url"];
        echo "<div class='box'>";
            echo "<div id='account_box'>";
                echo "<div>
                        <div id='crop'><img src=$icon_url></div>
                        <span> $writer</span>
                    </div>";
                echo "<a href='mod.php?id=$id'><button>수정</button></a>";
            echo "</div>";

        echo "<img src=$img_url>";
        echo "<div id=textbox>${title}</div>";
        echo "</div>";
    }

?>
    </div>
</body>
</html>

<style>
    #container {
        /* border : 1px solid red; */
        max-width: 800px
    }
    .box {
        /* border : 1px solid gray; */
    }
    .box img {
        width : 100%;
    }
    #textbox {
        min-height : 60px;
    }
    #account_box {
        display : flex;
        justify-content: space-between;
    }
    #account_box > div {
        display: flex;
    }
    span {
        margin: auto;
    }
    #crop {
        overflow:hidden;
        width: 2rem;
        height: 2rem;
        border-radius: 50%;
        display: inline-block;
       
    }
    #crop img {
        width: 2rem;
        height: 2rem;
        object-fit:cover;
    }
</style>