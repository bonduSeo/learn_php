<?php
    $val = rand(2,10);

    print_table($val);


    function print_table($n) {
        $num=1;
        echo "<table>";
        for($i=0; $i<$n; $i++) {
            echo "<tr>";
                for($j=0; $j<$n; $j++) {
                    echo "<td>";
                    echo $num++;
                    echo "</td>";
                }
            echo "</tr>";
        }

        echo "</table>";
    }
?>

<style>
    td {
        border: 1px solid black;
        padding: 20px;
    }
    
    table {
        border-collapse: collapse;
    }
</style>