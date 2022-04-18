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
                <td>올릴 이미지:</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td>제목</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td colspan = 2>
                    <input type="submit" value="이미지전송">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>