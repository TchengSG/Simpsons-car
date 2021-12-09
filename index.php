<?php

// require the class Bicycle

require_once 'Bicycle.php';
require_once 'voiture.php';

// Display Bicycle

$bike = new Bicycle('blue');
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
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed(15) . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed(15) . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('black');
$rockrider->setColor('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('yellow');
$tornado->setColor('black');

// tornado forward
echo 'Tornado ' .$tornado->forward();
echo '<br>';

echo "<pre>";
var_dump($bike);
echo "</pre>";
echo "<pre>";
$bike->dump();
echo "</pre>";

// new bicycles

$rockymountain = new Bicycle('red');
echo '<br>';
echo "<pre>";
var_dump($rockymountain);
echo "</pre>";
echo '<br>';
$smoothride = new Bicycle('purple');
echo '<br>';
echo "<pre>";
var_dump($smoothride);
echo "</pre>";
echo '<br>';

// new cars

$supercharge = new voiture('red', 5, 'electric');
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