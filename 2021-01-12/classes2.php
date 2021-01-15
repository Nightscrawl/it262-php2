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


// creates array of car objects
$cars[] = new Car("Toyota", "Prius", "blue", 100);
$cars[] = new Car("Hummer", "H3", "yellow", 5);
$cars[] = new Car("Ford", "Mustang", "red", 80);

$total = 0;

// iterates thru array and shows each item
foreach($cars as $myCar) {

    echo "<p>My car is a $myCar->color $myCar->make $myCar->model. It gets $myCar->mileage mpg!</p>";
    $total += $myCar->mileage;

}
// My car is a Blue Toyota Prius. It gets 100 mpg!

$carCount = count($cars);
// $average = $total/count($cars);
$average = $total/$carCount;
$average = number_format($average, 2);

echo "<p>There are $carCount cars, and the average mpg is $average.</p>";
