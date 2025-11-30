<?php


abstract class Car {
    abstract public function drive();
}

class ElectricCar extends Car {
    public function drive() {
        echo "Driving an electric car.\n";
    }
}