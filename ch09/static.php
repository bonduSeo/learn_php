<?php
class Calc
{
    function sum($n1, $n2)
    {
        return $n1 + $n2;
    }
}

$c = new Calc;
print $c->sum(5, 10);


class StaticCalc
{
    static function sum($n1, $n2)
    {
        return $n1 + $n2;
    }
}

$result = staticCalc::sum(10, 11);
print "\n" . $result;
