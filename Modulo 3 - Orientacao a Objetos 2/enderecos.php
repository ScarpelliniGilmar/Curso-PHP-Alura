<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Indaiatuba',
    'Veneza',
    'Rubens',
    296);

$outroEndereco = new Endereco(
    'Campinas',
    'Centro',
    'Duque',
    265);



echo $umEndereco.PHP_EOL;

echo $umEndereco->cidade.PHP_EOL;

// Utilizando __set
$umEndereco->cidade='Capivari';

// Utilizando método set
//$umEndereco->setCidade('Capivari');

echo $umEndereco.PHP_EOL;

echo $umEndereco->cidade.PHP_EOL;


