<?php

$idades =  [23, 19, 25, 30, 41, 18, 21];
//$primeiraIdade = $idades[0];

/**
 * Função que recebe recebe valores em variaveis
 * list
 */
list($idadeGilmar, $idadeAlexandre, $idadeScarpellini) = $idades;

/**
 * Removendo item da lista
 */
unset($idades[0]);

echo "Idade de Gilmar é $idadeGilmar anos".PHP_EOL;

/**
 * Adicionando na ultima posição
 */
$idades[]=10;

for ($i = 0; $i < 7; $i++){
    echo $idades[$i] . PHP_EOL;
}

/**
 * Contando itens da lista
 */
echo "Tamanho do Array: ". count($idades) . PHP_EOL;


/**
 * for com count
 */
for ($i = 0; $i < count($idades); $i++){
    echo $idades[$i] . PHP_EOL;
}



