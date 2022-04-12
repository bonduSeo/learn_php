<?php
    $dan = rand(2,9);

    print_gugudan($dan);

    function print_gugudan($n) {
        for($i=1; $i<=9; $i++) {
            $result = $n*$i;
            print "$n x $i = $result<br>";
        }
    }
?>