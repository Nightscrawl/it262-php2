<?php


class Pizza { 
    public $name="";
    public $description="";
    public $price=0;
    public $quantity=0; 

    public function __construct($name, $description, $price){ 
        $this->name = $name; 
        $this->description = $description; 
        $this->price = $price;
        $this->quantity = 0; 
    }
}
 // end of Pizza class
$pizzas[] = new Pizza('Cheese', 'Cheese Pizza - $2.22', 2.22);
$pizzas[] = new Pizza('Pepperoni', 'Pepperoni Pizza - $3.33', 3.33);
$pizzas[] = new Pizza('Mushroom', 'Mushroom Pizza - $4.44', 4.44);
