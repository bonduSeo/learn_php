<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="fruit" method="post" action="./fruitdata.php"> <!-- method=post 는 주소에 정보 안나옴. get 은 주소에 데이터정보 뜸 근데 get 이 가벼움 -->
        원하는 가격을 입력하세요 <br>
        가격: <input type="text" name="low"><br>
        <input type = "submit" value="찾기">
    </form>
</body>
</html>