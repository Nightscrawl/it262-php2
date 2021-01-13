<?php
// classes.php


class Car {

    public $color = '';
    public $make = '';
    public $model = '';
    public $mileage = 0;  // bc not a string, starts at 0

}


$myCar = new Car();

echo $myCar->mileage;  // -> like dot syntax
