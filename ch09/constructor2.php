<?php

use Fruit as GlobalFruit;

class Fruit
{
    private $name;
    private $color;
    private $price;



    public function printFruit()
    {
        print "Name : {$this->name}<br>";
        print "Color : {$this->color}<br>";
        print "Price : {$this->price}<br>";
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}

$apple1 = (new Fruit)->setName("사과");
$apple1->printFruit();

$apple2 = (new Fruit)
    ->setColor('파란')
    ->setPrice(1000);
//return this 하기때문에 가능한.
$apple2->printFruit();
print_r($apple2);
