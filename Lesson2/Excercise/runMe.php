<?php
require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * Exercise 2 - Make the following code work
 */

/**
 * Make a car class that has an argument for construction that sets the brand
 */
$car = new Lesson2\Exercise\Car('Ford');

if ($car->getBrand() !== 'Ford') {
    echo "You haven't got a working brand method";
    die;
}

$fordCar = new Lesson2\Exercise\Ford();

/**
 * Extend the Car class and use the constructor
 * of the Parent class to set the brand automatically
 */
if ($fordCar->getBrand() !== 'Ford') {
    echo "You haven't got a working brand method";
    die;
}
