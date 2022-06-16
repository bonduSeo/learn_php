<?php
class Computer
{
    // public static $brand;
    public static $brand;
    public $price;

    function __construct()
    {
        self::$brand = '삼성';
    }

    function myPrint()
    {
        print "컴퓨터 브랜드는 " . self::$brand . ", 가격은 {$this->price}입니다\n";
        // print "컴퓨터 브랜드는 " . Computer::$brand . ", 가격은 {$this->price}입니다\n";
    }
    static function myStaticPrint()
    {
        print "컴퓨터 브랜드는 " . self::$brand . ", 가격은 {$this->price}입니다\n";
        //this 는 new 로 만들어진 객체를 지칭함
        //그러므로 static 메소드는 static 프로퍼티만 사용가능
        // 파라미터로 들어온 값만 사용하는 메소드면 static을 쓰는게 낫다고한다
    }
}

Computer::$brand = "LG";
print Computer::$brand . "\n";

$c = new Computer;
$c->price = 10000;


$c2 = new Computer;
$c2->price = 20000;

$c->myPrint();
$c2->myPrint();
// print $c->$brand; 이렇게접근안되네

//자바스크립트의 프로토타입과 비슷