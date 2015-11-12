<?php
trait CarTrait{

    public function getWheels(){
        return $this->wheels;
    }
}

//Privet KESHA!

class Car{
    use CarTrait;

    public $wheels = 4;
}
$car = new Car();
echo $car->getWheels();