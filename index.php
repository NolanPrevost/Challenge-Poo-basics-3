<?php

require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'Motorway.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';


$tandem = new Bicycle('red', 2);
echo $tandem->forward();
var_dump($tandem);

$lamborghiniMurcielago = new Car('yellow', 2, 'SP98');
echo $lamborghiniMurcielago->forward();
$lamborghiniMurcielago->setCurrentSpeed(250);
var_dump($lamborghiniMurcielago);

$monsterTruck = new Truck('green', 5, 'SP98', '200');
$monsterTruck->setCurrentLoad(150);
var_dump($monsterTruck);
echo $monsterTruck->isLoad();
echo $monsterTruck->forward();
echo $monsterTruck->brake();

$a13 = new Motorway;

$a13->addVehicle($lamborghiniMurcielago);
echo $a13->addVehicle($tandem);
$a13->addVehicle($monsterTruck);

$chemin = new PedestrianWay;
echo $chemin->addVehicle($tandem);
echo $chemin->addVehicle($lamborghiniMurcielago);

$route = new ResidentialWay;
echo $route->addVehicle($tandem);
echo $route->addVehicle($lamborghiniMurcielago);

var_dump($a13);
var_dump($route);
var_dump($chemin);

$homerCar = new Car('yellow', 2, 'SP98');
$homerCar->setParkBreak(true);
try {
  echo $homerCar->start();
} catch (Exception $e) {
  $homerCar->setParkBreak(false);
}
finally {
  echo "Ma voiture roule comme un donut";
}


