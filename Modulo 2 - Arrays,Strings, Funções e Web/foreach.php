<?php
/**
 * Array associativo
 */

//$conta1 = [
//    'titular' => 'Gilmar',
//    'saldo' => 1000
//];
//$conta2 = [
//    'titular' => 'Alexandre',
//    'saldo' => 10000
//];
//$conta3 = [
//    'titular' => 'Scarpellini',
//    'saldo' => 300
//];

/**
 * Definindo lista
 */
$contaCorrente = [
    123 =>  [
        'titular' => 'Gilmar',
        'saldo' => 1000
    ],
    456 => [
        'titular' => 'Alexandre',
        'saldo' => 10000
    ],
    789 => [
        'titular' => 'Scarpellini',
        'saldo' => 300
    ]
];


/**
 * Adicionando dados a lista
 */
$contaCorrente[321] = [
    'titular' => 'Vitor',
    'saldo' => 2000
];


/**
 * para cada valor em $contacorrente, no o indice $cpf, passa o valor para $conta
 */
foreach ($contaCorrente as $cpf => $conta){
//    echo $cpf . PHP_EOL;
    echo $conta['titular'] . PHP_EOL;
}