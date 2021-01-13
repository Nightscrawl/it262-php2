<?php
// classes2.php


class Car {

    public $make = '';
    public $model = '';
    public $color = '';
    public $mileage = 0;  // bc not a string, starts at 0

    public function __construct($make, $model, $color, $mileage) {  // constructor

        // $this->property = object
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
        $this->mileage = $mileage;

    }

}


$myCar = new Car("Toyota", "Prius", "blue", 100);

// echo $myCar->mileage;  // -> like dot syntax

// echo '<pre>';
// var_dump($myCar);
// echo '</pre>';

echo "<p>My car is a $myCar->color $myCar->make $myCar->model. It gets $myCar->mileage mpg!</p>";
// My car is a Blue Toyota Prius. It gets 100 mpg!
