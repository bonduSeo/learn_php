
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="03.test.php">
        <input type="text" name="year1">
        <input type="submit" value="년도입력">
    </form>

    <?php
  
        $year = $_GET['year1'];
     
        
        if(($year % 400 === 0) || (($year % 4 === 0)&&($year % 100 != 0)))
        {
            print "{$year}년은 윤년임";
        }
        else{
            print "{$year}년은 윤년 아님";
        }
    
    ?>




</body>
</html>

