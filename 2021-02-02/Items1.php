<?php
// Items1.php


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
