<?php    
    /*
        90점 이상 A (3점 이하, '-', 7점 이상 or 100점 '+')
        => 93: A-, 95: A, 98: A+
        80점 이상 B (3점 이하, '-', 7점 이상 '+')
        70점 이상 C (3점 이하, '-', 7점 이상 '+')
        60점 이상 D (3점 이하, '-', 7점 이상 '+')
        60점 미만 F
        0~100 점수가 아니면 "잘못된 값" 출력
    */

    //선생님 솔루션

    $score = rand(0, 120);
    // $score = 80;
    print "점수 : $score <br>";
    
    if($score > 100 || $score < 0) 
    {
        print "잘못된 값";
    } 
    else 
    {
        $sign = "F";
        $symbol = "";
        $val_1 = intval($score / 10);    //실수의 정수화. 10의자리값 구하기
        switch($val_1) 
        {
            case 10: case 9:
                $sign = "A";
                break;
            case 8:
                $sign = "B";
                break;
            case 7:
                $sign = "C";
                break;
            case 6:
                $sign = "D";
                break;
        }  
        $val_2 = $score % 10;    // 1의자리수.. 캬
        if($score > 60)
        {
            if($score === 100 || $val_2 >= 7)
            {
                $symbol = "+";
            } 
            else if($val_2 <= 3)
            {
                $symbol = "-";
            }
        }
        print $sign . $symbol;
    }
    
// 소수점 관련 함수
//floor버림 ceil올림 round반올림

?>