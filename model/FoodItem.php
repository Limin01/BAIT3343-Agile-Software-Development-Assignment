<?php

class FoodItem {
    public $id;
    public $name;
    public $price;
    public $description;
    public $imageUrl;

    public function __construct($id, $name, $price, $description, $imageUrl) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->imageUrl = $imageUrl;
    }

    public function name() {
        
        return $this->name."<br>";
    }
    public function price() {
        return "<br>RM" . number_format($this->price, 2)."<br>";
    }
    public function description() {
        return $this->description ."<br>";
    }
}
