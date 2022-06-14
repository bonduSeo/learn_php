<?php
class Fruit
{
    private $name;
    private $color;
    private $price;

    function __construct($name, $color, $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    public function printFruit()
    {
        print "Name : {$this->name}<br>";
        print "Color : {$this->color}<br>";
        print "Price : {$this->price}<br>";
    }
}

$apple = new Fruit("Apple",  "red", 1000);
$banana = new Fruit("Banana", "yellow", 500);
// $test = new Fruit("Banana", "yellow");
//이렇게하면 에러떠서 constructor2.php의 방법이 있음

$apple->printFruit();
$banana->printFruit();


//  private 한 프로퍼티에 값주는방법: 1. 생성자를 통해서 2.메소드를통해서 두가지뿐