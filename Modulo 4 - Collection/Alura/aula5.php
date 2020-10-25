<?php

require 'Album.php';
require 'Musica.php';


$albuns = new SplObjectStorage();// guarda objetos

$divide = new Album("Divide");

$albuns->attach($divide);

$scorpion = new Album("Scorpion");

$albuns->attach($scorpion);


//echo "<pre>";
//var_dump($albuns);
//echo "</pre>";

$musicaDivide = new SplFixedArray(2);
$musicaDivide[0] = new Musica("Shape of you");
$musicaDivide[1] = new Musica("Castle on the Hill");

$musicaScorpion = new SplFixedArray(3);
$musicaScorpion[0] = new Musica("Peak");
$musicaScorpion[1] = new Musica("Summer Games");
$musicaScorpion[2] = new Musica("Jaded");

$albuns[$divide] = $musicaDivide;
$albuns[$scorpion] = $musicaScorpion;

foreach ($albuns as $album) {
    echo "Album: " . $album->getNome() . "<br>";


    foreach ($albuns[$album] as $musica) {
        echo "Música: " . $musica->getNome() . "<br>";
    }
    echo "<br>";
}


