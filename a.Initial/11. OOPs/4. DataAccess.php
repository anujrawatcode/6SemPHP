<?php

class Car
{
    public $wheels = 4; // available across program
    protected $hood = 1; // only to the class & sub-class 
    private $engine = 1; // only to class
    var $door;

    function MoveWheels()
    {
        echo "wheels moving";
    }
}

$bmw = new Car();

echo $bmw->wheels;
