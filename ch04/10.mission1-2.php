<?php
    $score = rand(0, 120);
    // $score = 90;
  
   if ($score < 0 || $score > 100)
   {
       $grade = "잘못된값";
   } elseif ($score >= 90)
   {
       $grade = "A";
       $pl = $score - 90;

   } elseif ($score >=80)
   {
        $grade = "B";
        $pl = $score - 80;
   } elseif ($score >=70)
   {
         $grade = "C";
         $pl = $score - 70;
   } elseif ($score >=60)
   {
         $grade = "D";
         $pl = $score - 60;
   }else {
       $grade = "F";
   }


   
   if ($score >100 || $score < 60)
   {
        $grade2="";
   }elseif ($pl >= 7)
   {
       $grade2 = "+";
   } elseif ($pl <= 3)
   {
       $grade2 = "-";
   }

   
//    echo $pl."<br>";
    echo $score."<br>";
    echo $grade.$grade2;

?>