<?php

/**
 * Concatenar String com variaveis
 * \n - Linha
 * \t - Tabe
 *
 * Pesquisar PHP String
 */

$idade = 21;


echo 'Olá mundo! minha idade é '.$idade;

echo "\r\nOlá mundo! \nEu tenho $idade anos";

/**
 * Jeito correto
 *
 * .PHP_EOL
 */

echo PHP_EOL."Olá mundo!".PHP_EOL."Eu tenho $idade anos";