<?php

require 'car.php';
require 'bicycle.php';

$car = new Car('Red', 5, "Diesel");
$bicycle = new Bicycle('white', 1, "Leg");

var_dump($car);
var_dump($bicycle);

echo $car->start();
echo '<br> Alright, Ill drive at ' . $car->getCurrentSpeed(0) . ' km/h' . '<br>';
echo $car->forward();
echo '<br> Car speed : ' . $car->getCurrentSpeed(50) . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Car Speed : ' . $car->getCurrentSpeed(0) . ' km/h' . '<br>';
echo "<br>";
echo $bicycle->start();
echo '<br> Ill bike at' . $bicycle->getCurrentSpeed(0) . ' km/h' . '<br>';
echo $bicycle->forward();
echo '<br> Bicycle speed : ' . $bicycle->getCurrentSpeed(50) . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Bicycle speed : ' . $bicycle->getCurrentSpeed(0) . ' km/h' . '<br>';
