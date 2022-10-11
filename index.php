<?php

require_once 'Van.php';
//require_once 'Vehicle.php';


 $redVan = new Van(400, 100);
var_dump($redVan);

$blueVan = new Van(600, 250);


echo '<br><br>';

var_dump(Van::ALLOWED_STATUS);

echo '<br><br>';

echo $redVan->forward();
echo '<br> Vitesse du van : ' . $redVan->getCurrentSpeed() . ' km/h' . '<br>';
echo $redVan->brake();
echo '<br> Vitesse du van : ' . $redVan->getCurrentSpeed() . ' km/h' . '<br>';
echo $redVan->brake(); 

echo '<br><br>';

echo $blueVan->forward();
echo '<br> Vitesse du van : ' . $blueVan->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueVan->brake();
echo '<br> Vitesse du van : ' . $blueVan->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueVan->brake(); 





/* require_once 'Car.php';

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

echo "<br><br>";

var_dump(Car::ALLOWED_ENERGIES);

echo $car->forward();
echo '<br> Vitesse du van : ' . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du van : ' . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake(); */


/*require_once 'Bicycle.php';
$bike = new Bicycle('blue', 1);

echo $bike->forward();

var_dump($bike);*/



//var_dump($bike);



/* $rockrider = new Bicycle();
$rockrider->color = 'yellow';

$tornado = new Bicycle();
$tornado->color = 'black'; 


echo $rockrider->getColor();
echo $tornado->getColor(); */


/*echo $tornado->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $tornado->brake(); */

/*$homersPinkSedan = new Car('pink', 5, 100);

echo $homersPinkSedan->forward();
echo '<br> Vitesse de la car : ' . $homersPinkSedan->getCurrentSpeed() . ' km/h' . '<br>';
echo $homersPinkSedan->brake();
echo '<br> Vitesse de la car : ' . $homersPinkSedan->getCurrentSpeed() . ' km/h' . '<br>';
echo $homersPinkSedan->brake(); 

echo "<br><br>";
var_dump($homersPinkSedan);

echo "<br><br>";

$lovejoysKarmannGhia = new Car('White', 2, 100);

echo $lovejoysKarmannGhia->forward();
echo '<br> Vitesse de la car : ' . $lovejoysKarmannGhia->getCurrentSpeed() . ' km/h' . '<br>';
echo $lovejoysKarmannGhia->brake();
echo '<br> Vitesse de la car : ' . $lovejoysKarmannGhia->getCurrentSpeed() . ' km/h' . '<br>';
echo $lovejoysKarmannGhia->brake(); 

var_dump($lovejoysKarmannGhia);*/
