<?php namespace App;

class Car{

    public $wheels = 4;

}

$car = new Car();

namespace App2;

class Car{

    public $helm = 'left';

}

$car = new \App\Car();