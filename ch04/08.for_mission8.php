<?php
// $star = rand(2,20);
$star = date("s")*0.5;

    // for ($i = 1; $i <= $star; $i++ )
    // {
    //     for ($j = 1; $j <= $star; $j++)
    //     {
    //         print " * &nbsp";
    //     }
    //     print "<br>";
    // }


    for ($i = 1; $i <= $star; $i++ )
    {
        for ($j = 1; $j <= $star; $j++)
        {
            if ($j % 2 = 0)
            {
                print "<div>";
                print " * &nbsp";
                print "</div>";
            }
            else 
            {
                print "<div>";
                print " * &nbsp";
                print "</div>";
            }
        }
        print "<br>";
    }

?>