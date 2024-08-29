<?php

class Car{

    // properties or fields
    private $brand;
    private $color;
    private $vehicleType = "car";

    //constructor
    public function __construct($brand, $color = "none"){
        $this->brand = $brand;
        $this->color = $color;
    }

    //method
    public function Display()
    {
        //return "Brand: " . $this->brand . "Color: " . $this->color;
        echo "Brand: " . $this->brand . " and Color: " . $this->color;
    }

    //getter and setter methods for brand
    //getter
    public function getBrand()
    {
        return $this->brand;
    }

    //setter
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    //getter and setter mehtods for color
    //getter
    public function getColor()
    {
        return $this->color;
    }

    //setter
    public function setColor($color)
    {
        $this->color = $color;
    }
}

//object of class Car
// $car01 = new Car("FORD", "black");
// $car02 = new Car("Mustang");
// //echo $car02->brand;

// $car02->Display();