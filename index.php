<?php

include "livre.php";
include "auteur.php";



$auteur = new Auteur("Stephen", "King");
$livre1 = new Livre("Ca", 1138, 1986, 20, $auteur);
$livre2 = new Livre("Simettiere", 374, 1983, 15, $auteur);
$livre3 = new Livre("Le Fléau", 823, 1978, 14, $auteur);
$livre4 = new Livre("Shining", 447, 1977, 16, $auteur);
var_dump($auteur);
$auteur->afficherBibliogaphie();
?>
