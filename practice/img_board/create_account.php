<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="create_account_proc.php" method="post" enctype="multipart/form-data">
        <label for="nickname">아이디 입력: </label><input type="text" name="nickname" id="nickname"><br>
        <label for="profile_img">프로필이미지 선택: </label><input type="file" name="image" id="profile_img">
        <br>
        <input type="submit" value="제출"><input type="reset" value="리셋">

    </form>
    <a href="write.php"><button>뒤로가기</button></a>

</body>
</html>