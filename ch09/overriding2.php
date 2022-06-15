<?php

class Animal
{
    function crying()
    {
        print "동물이 운다. <br>";
    }
}
class Dog extends Animal
{
    function crying()
    {
        print "강아지가 멍멍.<br>";
    }
}

class Chiwawa extends Dog
{
    // function crying()
    // {
    //     print "치와와가 왕왕 <br>";
    // }
}

class Cat extends Animal
{
    function crying()
    {
        print "고양이가 야옹~<br>";
    }
}

//오버라이딩을 대-략 이런식으로 사용한다는
//느낌만 보라는거
//인터페이스-컨버팅 역할의 함수
function doCry($ani)
{
    if (method_exists($ani, "crying")) {
        $ani->crying();
    } else {
        print "crying 메소드없음~!";
    }
}

class Human
{
    function speak()
    {
        print "사람이 말하다!!";
    }
}

doCry(new Animal);
doCry(new Dog);
doCry(new Chiwawa);
doCry(new Cat);
doCry(new Human);
