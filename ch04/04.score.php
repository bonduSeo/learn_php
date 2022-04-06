<?php
    $score = 91;

    // switch 문. 범위지정 안되-는줄알았는데 아래처럼 됨, 왠만한 언어들은 안된다고함
    switch($score)
    {
        case 100:
        case 99:
            print "당신의 성적은 A입니다.";
            break;
        case ($score >= 90):
            print "당신의 성적은 ABABAB";
            break;
        case 80:
            print "당신의 성적은 B입니다.";
            break;
        case 60:
            print "당신의 성적은 C입니다.";
            break;
        case 0:
            print "당신의 성적은 F입니다";
            break;
        default:
            print "디폴트!";
            break;
    }


?>
