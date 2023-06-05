<?php

use app\Circle;
use app\gem\Shape;
use app\Square;

include_once "vendor/autoload.php";
class Index
{
    public function __construct()
    {
        $square = new Square(1305, 12345);
        $this->getPrice($square);
        $circle = new Circle(150);
        $this->getPrice($circle);
    }
    public function getPrice(Shape $circle)
    {
        $area = $circle->getArea();
        echo "Your total price is " . ($area * 17) . "$<hr>";
    }
}
new Index();
