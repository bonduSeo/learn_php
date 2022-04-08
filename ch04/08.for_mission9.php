<?php
    // $star = rand(3,20);
    $star = date("s");
    print  $star."<br>";

    for ($i=1; $i <= $star; $i++)
    {
        for ($j=1; $j <= $i; $j++)
        {
            if($i%2 == 1)
            {

                print "<span id='odd'>★</span>";
            }
            else{
                print "<sapn id='even'>★</span>";
            }
        }
        print "<br>";
    }

?>

<style>
    #odd {
        color:#32BEBE	;
    }
    #even {
        color:#FFC6C3;
    }

</style>

