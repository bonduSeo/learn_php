<?php
    //(객체지향언어에서) 객체 안에 함수가 있으면 method(메소드)라고 부른다

    //객체 안이 아니라면 function(함수)라고 부른다.
    //함수 function: 반복된작업을 함수를 호출해서 처리하는. 

    function sum($n1, $n2) // (파라미터1, 파라미터2,,  )
    {
        return $n1 + $n2;
    }
    //함수정의

    $result = sum(10,20); //함수호출
    print "result : $result <br>";
    print "result : ".sum(30,40)."<br>";
    print "<hr>";
    minus(20,5);
    minus(10,9);


    
    // function sum($n1, $n2) // (파라미터1, 파라미터2,,  )
    // {
    //     return $n1 + $n2;
    // } //정의를 밑에 적어도 됨

    function minus($n1,$n2)
    {
        print "minus : ".($n1 - $n2)."<br>";
    }
    //리턴이 없는경우. 사용이 유연하진못함

?>