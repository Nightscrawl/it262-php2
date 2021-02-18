<?php
// Items3.php


class Item {

    public $id = 0; // public, accessible to all code that needs it
    public $name = '';
    public $description = '';
    public $price = 0.00;
    public $extras = array();

    public function __construct($id, $name, $description, $price) {

        $this->id = $id; // -> is dot notation
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;

    } // end constructor for Item

    public function addExtra($extra) {

        $this->extras[] = $extra;

    } // end function addExtra

} // end of Item class


$myItem = new Item(1, 'Taco', 'Our tacos are awesome', 4.95);
$myItem->addExtra('sour cream'); // pass in item through addExtra which will throw it into the extras array
$myItem->addExtra('cheese');
$myItem->addExtra('guacamole');
$items[] = $myItem;


$myItem = new Item(2, 'Sundae', 'Our sundaes are awesome', 3.95);
$myItem->addExtra('sprinkles');
$myItem->addExtra('chocolate sauce');
$myItem->addExtra('walnuts');
$items[] = $myItem;


$myItem = new Item(3, 'Salad', 'Our salads are awesome', 5.95);
$myItem->addExtra('croutons');
$myItem->addExtra('bacon');
$myItem->addExtra('lemon wedge');
$myItem->addExtra('avocado');
$items[] = $myItem;

// $items[] = new Item(1, 'Taco', 'Our tacos are awesome', 4.95);

// $items[] = new Item(2, 'Sundae', 'Our sundaes are awesome', 3.95);

// $items[] = new Item(3, 'Salad', 'Our salads are awesome', 5.95);


echo "<pre>";
    var_dump($items);
echo "</pre>";
