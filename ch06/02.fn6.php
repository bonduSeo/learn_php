<?php
    $star = rand(3,10);

    print $star."star<br>";
    // print_star($star);
    print_star_line($star);
    print_star_tri($star);

    function print_star($n) {
        for($i=0; $i<$n; $i++){
            print "* ";
        }
        print "<br>";
    }

    function print_star_line($n) {
        for($i=0; $i<$n; $i++)
        {
            print_star($n);
        }
    }

    function print_star_tri($n) {
        for($i=1; $i<=$n; $i++) {
            print_star($i);
        }
    }
?>