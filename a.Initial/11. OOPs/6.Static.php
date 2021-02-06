<?php
// static modifiers
// static data only belong to the class
// can't hav instance

class Car
{
    static $wheels = 10;

    function movewheels()
    {
        $this->wheels = 10;
    }
}

$bmw = new Car();

//echo $bmw->wheels; // wrong

Car::$wheels = 9;

echo Car::$wheels;
