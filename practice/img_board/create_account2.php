<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create_account2_proc.php" method="post">
        <label for="idn">아이디: </label><input type="text" name="idn" id="idn"><br>
        <label for="pass1">비밀번호: </label><input type="password" name="pass1" id="pass1"><br>
        <label for="pass2">비밀번호확인: </label><input type="password" name="pass2" id="pass2"><br>
        <input type="submit" value="제출">
        <input type="reset" value="리셋">
    </form>
    <a href="list.php"><button>메인으로</button></a>
</body>
</html>