<?php
class Shape {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        parent::__construct('Circle');
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($w, $h) {
        parent::__construct('Rectangle');
        $this->width = $w;
        $this->height = $h;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle(10);
echo $circle->getName() . ' Area: ' . $circle->calculateArea()."<br>";
$rectangle = new Rectangle(10, 7);
echo $rectangle->getName() . ' Area: ' . $rectangle->calculateArea()."\n";

?>