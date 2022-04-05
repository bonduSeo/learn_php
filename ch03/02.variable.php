<?php
// single line comment
/*
    multi line comment
    ｐｈｐ파일의　목적은　ｈｔｍｌ로　변환하는것
*/
    $age = 21; //$로 시작하는건 변수, = '좌우변이 같다' 가 아니고 '대입연산자': 오른쪽의 값을 복사하여 왼쪽에 준다
    print "<div>" . $age . "</div>" ; // . 은 문자열 합치기(두 문자열을 연결할때)

    $name; // 변수선언을 미리 따로 해봄.
    print "<div>" . $name . "</div>" ;
    $name = "홍길동";

    print $name;
    print "<div>" . $name . "</div>" ;

    $name = "장보고";
    print "<div>" . $name . "</div>";

    $name = 10;
    print "<div>" . $name . "</div>";

    $name = "장보고";
    print "<div>" . $name . "</div>";

//  변수명 네이밍의 규칙
//      1. 대소문자 영어, 숫자, 특수기호 _(언더바) 로 이루어져야함.
    //  2. 숫자가 맨 앞에 오면 안됨! (에러터짐) 처음만 아니면 괜춘
    //  3. 문자사이에 빈칸 X (하고싶으면_)
$a1b = 12;
print $a1b;

$_124 = "aaaaaa";
print $_124;

?>

<!-- html 주석 -->

