<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write</title>
</head>
<body>
    <form action="write_proc.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="mode" value="insert">
        <table>
            <tr>
                <td>아이디:</td>
                <td>
                    <input type="radio" name="account" value="admin">admin
                    <input type="radio" name="account" value="user1">user1
                    <input type="radio" name="account" value="user2">user2
                    <input type="radio" name="account" value="bondu">bondu
                </td>
            </tr>
            <tr>
                <td>올릴 이미지:</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td>할말</td>
                <td><textarea name="title" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td colspan = 2>
                    <input type="submit" value="이미지전송">
                    
                </td>
            </tr>
        </table>
    </form>
    <a href="list.php"><button>취소</button></a>
</body>
</html>