<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="get" action="04.switch_mission1_test.php">
        <input type="text" name="month" >
        <input type="submit" value="입력">

    </form>
    <?php

    // $mon = 13;
    $mon = $_GET['month'];
    switch($mon)
    {
        case 3:
        case 4:
        case 5:
            print "봄";
            break;
        case 6:
        case 7:
        case 8:
            print "여름";
            break;
        case 9:
        case 10:
        case 11:
            print "가을";
            break;
        case 12:
        case 1:
        case 2:
            print "겨울";
            break;
        default:
            print "멍멍";
            break;
    }
    ?>
</body>
</html>