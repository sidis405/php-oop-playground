<?php

abstract class Shape
{
    protected $color;

    public function __construct($color = 'blue')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    abstract protected function getArea();
}

class Square extends Shape
{
    protected $height = 4;
    public function getArea()
    {
        return pow($this->height, 2);
    }
}

class Triangle extends Shape
{
    protected $base = 6;
    protected $height = 9;
    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
}

class Circle extends Shape
{
    protected $radius = 5;
    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

echo (new Circle)->getArea();
