<?php

/**
 * Função executa e devolve um valor
 * subrotina apenas executa
 */

function exibeMensagem($mensagem){
//    echo $mensagem . PHP_EOL;
    // Exibindo com quebra do html
    echo $mensagem . '<br>';
}

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar >= $conta['saldo']){
        exibeMensagem("Você não pode sacar");
    }else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

/**
 * @param array $conta
 * @param float $valorADepositar
 * @return array devolve um array de conta
 */
function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0 ){
        $conta['saldo'] += $valorADepositar;
    }else{
        exibeMensagem( "Depositos precisam ser positivos");
    }
    return $conta;
}

/**
 * @param array $conta
 * utilizando mb_strtoupper para deixar todas as letras maiusculas
 * ir até o arquivo php.ini e descomentar mbstring e extension_dir no windows
 * sem a extenção podemo utilizar strtoupper
 *
 * Com o &$conta - passa exatamente o a conta, sem ele é passado uma copia
 */
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper(($conta['titular']));
    echo $conta['titular'].PHP_EOL;
}

function exibeConta(array $conta){
//    ['titular' => $titular, ´saldo' => $saldo] = $conta;

    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}