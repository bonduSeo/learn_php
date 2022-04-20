<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login_proc.php" method="post">
        <label for="id">아이디: </label></label><input type="text" name="id" id="id"><br>
        <label for="a_password">패스워드</label><input type="password" name="a_password" id="a_password"><br>
        <input type="submit" value="로그인">

    </form>
    <a href="create_account2.php"><button>새로운아이디생성</button></a>
    <a href="list.php"><button>취소</button></a>
</body>
</html>