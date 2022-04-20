<?php
    include_once('db_connect.php');
    session_start();
    $conn = get_conn();
    if(isset($_SESSION['log_status'])) {
        $log_id = $_SESSION['log_id'];
        // print $log_id;
        $sql2 =
        "
            SELECT icon_url FROM accounts2
            WHERE id = '$log_id'
        ";
        $result_log_status = mysqli_query($conn, $sql2);
        $row = mysqli_fetch_assoc($result_log_status);
        $profile_url = $row['icon_url'];
    }

    
    $sql = 
    "
        SELECT A.id, A.title, A.writer,A.img_url, B.icon_url
        FROM gallery3 A
        INNER JOIN accounts2 B
            ON A.writer=B.id
        ORDER BY id DESC
    ";

    $result = mysqli_query($conn, $sql);
    
    // mysqli_close($conn);
   


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
    <?php
        if(isset($_SESSION['log_status'])) {
        echo "<div id='profile'><a href='myprofile.php'><img src=$profile_url></a></div>";
        }
    
    
    


    if(isset($_SESSION['log_status'])){
        echo "<a href='write.php'><button>글쓰기</button></a>";
        echo "<a href='logout.php'><button>로그아웃</button></a>";
    } 
    else {
        echo "<a href='login.php'><button>로그인</button></a>";
    }
?>
    
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
                if(isset($_SESSION['log_status'])) {
                    if($log_id==$writer) {
                        echo "
                                <form action='mod.php' method='post'>
                                    <input type='hidden' name='id' value='$id'>
                                    <input type='submit' value='수정'>
                                </form>   
                            ";
                    }
                }
            echo "</div>";

        echo "<img src=$img_url>";
        echo "<div id=textbox>${title}</div>";
        echo "</div>";
    }
    mysqli_free_result($result);

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
    }
    #crop img {
        height: 2rem;
        object-fit:cover;
    }
    #profile {
        overflow: hidden;
        width: 2rem;
        height: 2rem;
        border-radius:50%;
    }
    #profile img {
       height: 2rem;
       object-fit:cover;
    }
</style>