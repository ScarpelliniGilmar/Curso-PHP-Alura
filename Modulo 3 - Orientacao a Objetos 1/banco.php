<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';


$gilmar = new Titular( new CPF('12345678910'),'Gilmar');
$primeiraConta = new conta($gilmar);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);



echo  $primeiraConta->getNomeTitular().PHP_EOL;
echo  $primeiraConta->getCPFTitular().PHP_EOL;
echo  $primeiraConta->getSaldo().PHP_EOL;


$alexandre = new Titular(new CPF('45645645612'), 'Alexandre');
$segundaConta = new conta($alexandre);

var_dump($primeiraConta);

echo Conta::getNumeroDeContas();

//var_dump($primeiraConta);