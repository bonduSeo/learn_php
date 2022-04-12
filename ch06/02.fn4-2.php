<?php
    $dan = rand(2,9);

    // print_gugudan($dan);
    // print_gugudan_from_to(3,9);
    print_gugudan2(2,5);

    function print_gugudan($n) {
        for($i=1; $i<=9; $i++) {
            $result = $n*$i;
            print "$n x $i = $result<br>";
        }
    }

    function print_gugudan_from_to($n1,$n2) {
        print "<div id=container>";
        for($i = $n1; $i <= $n2; $i++) {
            print "<div>";
            for($j=1; $j<10; $j++) {
                $result = $i*$j;
                print "$i x $j = $result<br>";
            }
            print "</div>";
           
        }
        print "</div>";
    }

    function print_gugudan2($n1,$n2) {
        for($i=$n1; $i<=$n2; $i++) {
            print_gugudan($i);
            print "---<br>";
        }
    }
?>


<style>
    #container {
        display: flex;
        flex-wrap: wrap;
    }
    div {
        padding: 20px;
        height: 200px;
    }
</style>