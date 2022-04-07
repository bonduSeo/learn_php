<?php
    $score = rand(0, 120);
  
    if ($score < 0 || $score >100)
    {
        $grade = '잘못된값';
    } elseif ($score >=97 )
    {
        $grade = "A+";
    } elseif ($score > 93)
    {
        $grade = "A";
    } elseif ($score >= 90)
    {
        $grade = "A-";
    } elseif ($socre >= 87)
    {
        $grade = "B+";
    } elseif ($score > 83)
    {
        $grade = "B";
    } elseif ($score >= 80)
    {
        $grade = "B-";
    } elseif ($score >=77)
    {
        $grade = "C+";
    } elseif ($score >73)
    {
        $grade = "C";
    } elseif ($score >= 70)
    {
        $grade = "C-";
    } elseif ($score >=67)
    {
        $grade = "D+";
    } elseif ($score >63)
    {
        $grade = "D";
    } elseif ($score >=60)
    {
        $grade = "D-";
    } elseif ($score < 60)
    {
        $grade = "F";
    }
   

    echo $score."<br>";
    echo "$grade";

?>