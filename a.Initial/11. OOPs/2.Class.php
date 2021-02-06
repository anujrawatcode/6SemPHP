<?php
// captial mandatory
class Car
{
    // properties
    var $wheels = 4;


    // methords
    function MoveWheels()
    {
        echo "Wheels moving <br>";
    }
    function setWheels()
    {
        $this->wheels = 10;
    }
}


if (class_exists("Car")) {
    echo "class exists <br>";
} else {
    echo "No class <br>";
}



if (method_exists("Car", "moveWheels")) {
    echo "Methord exists <br>";
} else {
    echo "No exists <br>";
}

$bmw = new Car();
$bmw->MoveWheels();

$bmw->wheels = 8;
echo $bmw->wheels . '<br>';
$bmw->setWheels();
echo $bmw->wheels;

