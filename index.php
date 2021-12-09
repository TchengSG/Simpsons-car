<?php

// QUEST 1 : BICYCLE AND CAR

// require the class Bicycle

require_once 'Bicycle.php';
require_once 'voiture.php';
require_once 'Truck.php';

// Display Bicycle

$bike = new Bicycle('blue',1);
echo "<pre>";
var_dump($bike);
echo "</pre>";
$bike->setColor('blue');
$bike->setCurrentSpeed(0);
echo "<pre>";
var_dump($bike); // then, another dump.
echo "</pre>";

// Moving bike
echo $bike->forward();
echo $bike->getCurrentSpeed();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('black',1);
$rockrider->setColor('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('yellow',1);
$tornado->setColor('black');

// tornado forward
echo '<br>';
echo 'Tornado ' .$tornado->forward();
echo '<br>';

echo "<pre>";
var_dump($bike);
echo "</pre>";
echo "<pre>";

// new bicycles

$rockymountain = new Bicycle('red',1);
echo '<br>';
echo "<pre>";
var_dump($rockymountain);
echo "</pre>";
echo '<br>';
$smoothride = new Bicycle('purple',1);
echo '<br>';
echo "<pre>";
var_dump($smoothride);
echo "</pre>";
echo '<br>';

// new cars

$supercharge = new voiture('red', 5,'electric');
echo '<br>';
echo "<pre>";
var_dump($supercharge);
echo "</pre>";
echo '<br>';

$speeder = new voiture('red', 5, 'electric');
echo '<br>';
echo "<pre>";
var_dump($speeder);
echo "</pre>";
echo '<br>';

// QUEST 2 : CLASS VEHICLE - PARENT

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
echo '<br>';
echo "<pre>";
var_dump($bicycle);
echo "</pre>";
echo '<br>';

$car = new voiture('green', 4, 'electric');
echo $car->forward();

echo '<br>';
echo "<pre>";
var_dump($car);
echo "</pre>";
echo '<br>';

var_dump(voiture::ALLOWED_ENERGIES);
echo "</pre>";
echo '<br>';

// Trucks



$Timo = new Truck('green', 4, 'electric', 2000);
echo '<br>';
echo "<pre>";
var_dump($Timo);
echo "</pre>";
echo '<br>';

$Gus = new Truck('black', 6, 'fuel', 2000);
echo '<br>';
echo "<pre>";
var_dump($Gus);
echo "</pre>";
echo '<br>';


// Moving Gus

echo $Gus->forward();
echo '<br> Vitesse de Gus : ' . $Gus->getCurrentSpeed(15) . ' km/h' . '<br>';
echo $Gus->brake();
echo '<br> Vitesse de Gus  : ' . $Gus->getCurrentSpeed(15) . ' km/h' . '<br>';
echo $Gus->brake();
echo '<br>';
