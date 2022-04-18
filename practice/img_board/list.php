<?php

    include_once('db_connect.php');
    $sql = 
    "
        SELECT id, title, writer
        FROM gallery2
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
    <h1>jabstagram</h1>
    <a href="write.php"><button>글쓰기</button></a>
    <br><br>
    <div id="container">

<?php
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $title = $row['title'];
        $writer = $row['writer'];
        echo "<div class='box'>";
            echo "<div id='account_box'>";
                echo "<div>
                        <div id='crop'><img src=view_icon.php?idn=$writer></div>
                        <span> $writer</span>
                    </div>";
                echo "<a href='mod.php?id=$id'><button>수정</button></a>";
            echo "</div>";

        echo "<img src=./view.php?id=$id>";
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