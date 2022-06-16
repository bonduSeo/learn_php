<?php

class Computer
{
    private static $cnt = 0;
    private $modelName;
    private $price;
    private $num;

    function __construct($modelName = null, $price = null)
    {
        self::$cnt++;
        $this->modelName = $modelName;
        $this->price = $price;
        $this->num = self::$cnt;
    }

    function printInfo()
    {
        print "모델명 : {$this->modelName}, 가격: {$this->price}, 생산번호 : {$this->num}\n";
    }
    static function totalProductCnt()
    {
        print "총 생산된 컴퓨터 수 : " . self::$cnt . "\n";
    }
}

$c1 = new Computer("abc-123", 40000);
$c2 = new Computer("kkk-123", 50000);
$c3 = new Computer("ddd-aaa", 60000);

$c1->printInfo();
$c2->printInfo();
$c3->printInfo();

Computer::totalProductCnt();
