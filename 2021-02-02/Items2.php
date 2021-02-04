<?php
// Items2.php


class Item {

    public $id = 0; // public, accessible to all code that needs it
    public $name = '';
    public $description = '';
    public $price = 0.00;

    public function __construct($id, $name, $description, $price) {

        $this->id = $id; // -> is dot notation
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;

    } // end constructor for Item

} // end of Item class


// $myItem = new Item(1, "Taco", "Our tacos are awesome", 4.95);
// $items[] = $myItem;

// $myItem = new Item(2, "Sundae", "Our sundaes are awesome", 3.95);
// $items[] = $myItem;

// $myItem = new Item(3, "Salad", "Our salads are awesome", 5.95);
// $items[] = $myItem;

$items[] = new Item(1, "Taco", "Our tacos are awesome", 4.95);

$items[] = new Item(2, "Sundae", "Our sundaes are awesome", 3.95);

$items[] = new Item(3, "Salad", "Our salads are awesome", 5.95);


echo "<pre>";
    var_dump($items);
echo "</pre>";
