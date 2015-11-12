<?php

class Car{

    private $wheels = 4;

    public function __toString(){
        return 'This is class CAR!';
    }

}

$car = new Car();
echo $car->wheels;