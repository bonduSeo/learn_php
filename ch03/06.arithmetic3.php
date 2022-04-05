<?php
    // 논리연산자   //(bit연산자는 웹개발에서 쓰기엔 퍼포먼스가 떨어진다. 수업에선 안다룸)
    //    && : AND 두 오퍼런드의 값이 모두 true 일때만 연산결과가 true
    //    || : OR  두 오퍼런드 값이 모두 false 일때만 연산결과가 false

    // php 논리연산자에서 0은 false, 1외 나머지값들은 true. JS 와 같다고함 -문자열이 빈칸이면('')false
    if(1 && 1 && 1 && 'a')  // tip: &&연산자에서 false 나올 확율이 높은 연산을 앞쪽에 배치 (퍼포먼스를 위해서)
    {
        print "나는 진실이다1";
    }

    if(1 && 1 && 1 && 0)
    {
        print "나는 진실이다2";
    }
    print "<br>";

    if(1 || 0 || 0 || 0)
    {
        print "I'm true1";
    }

    if(0 || 0 || 0 || 0)
    {
        print "I'm true2";
    }


    // xor 하나의 오퍼런드는 true, 나머지 오퍼런드는 false 일때 결과는 true, 나머지는 false
    // ! : not 오런드값이 false 이면 true, true이면 false
?>

