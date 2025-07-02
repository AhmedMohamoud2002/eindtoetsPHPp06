<?php

require_once 'Cat.php';
require_once 'Auto.php';
echo "De Auto opdarcht " . "<br>";

$auto = new Auto("Volkswagen", 12, "red");
echo "Naam: " . $auto->getMerk() . "<br>";
echo "Leeftijd: " . $auto->getModel() . "<br>";
echo "Color: " . $auto->getKleur() . "<br>";
echo " " . "<br>";

echo "De Animal opdarcht " . "<br>";

$cat = new Cat("Lucy", 12, "red");
echo "Naam: " . $cat->getName() . "<br>";
echo "Leeftijd: " . $cat->getAge() . "<br>";
echo "Color: " . $cat->getColor() . "<br>";

?>
