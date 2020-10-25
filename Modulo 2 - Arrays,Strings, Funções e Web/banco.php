<?php
/**
 * Nivel de erros: E_WARNING | E_NOTICE | E_ERROR
 *
 * incluindo arquivo externo
 * include 'funcao.php' - DEVOLVE UM AVISO E CONTINUA A EXECUÇÃO
 * require 'funcao.php' - DEVOLVE UM ERRO E PARA A EXECUÇÃO
 * require_once 'funcao.php - VERIFICA SE JÁ FOI IMPORTADO E NÃO IMPORTA DE NOVO
 */
require 'funcoes.php';


$contasCorrente = [
    '123' =>  [
        'titular' => 'Gilmar',
        'saldo' => 1000
    ],
    '456' => [
        'titular' => 'Alexandre',
        'saldo' => 10000
    ],
    '789' => [
        'titular' => 'Scarpellini',
        'saldo' => 300
    ]
];

// sacar
$contasCorrente['456'] = sacar($contasCorrente['456'],500);
$contasCorrente['789'] = sacar($contasCorrente['789'],500);

//depositar
$contasCorrente['123'] = depositar($contasCorrente['123'],500);

//setando titular em letras maiuscula
titularComLetrasMaiusculas($contasCorrente['123']);

//apagando uma variavel da memória ou um item da lista
unset($contasCorrente['123']);


////Iniciando uma lista no html
//echo "<ul>";

/**
 * Para cada valor na $contacorrente, no o indice $cpf, passa o valor para $conta
 * Dentro da String podemos acessar a conta sem aspas $conta[titular] ou adiciona {$conta['titular']} em volta
 */
//foreach ($contasCorrente as $cpf => $conta){
//    exibeConta($conta);

//    list('titular' => $titular, 'saldo' => $saldo) = $conta;
//    exibeMensagem(" $cpf $titular $saldo "
//        "$cpf {$conta['titular']} {$conta['saldo']});
//}

////fechando uma lista no html
//echo "</ul>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Contas Correntes</h1>
<dl>
    <?php foreach ($contasCorrente as $cpf => $conta){?>
    <dt>
        <h3>Titular: <?=$conta['titular'];?> - CPF: <?=$cpf;?></h3>
    </dt>
    <dd>
        Saldo: $conta['saldo'];
    </dd>
   <?php  }?>

</dl>
</body>
</html>
