<?php

class Car
{
    var $wheels = 4;
}

class Supercar extends Car
{
    var $wheels = 20;// over-riding
}

$supra = new Supercar();
echo $supra->wheels;
