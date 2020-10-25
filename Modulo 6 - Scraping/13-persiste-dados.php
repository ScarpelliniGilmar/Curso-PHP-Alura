<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());

$crawler = $browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

//pegando total de produtos
$totalPaginas = $crawler->filter('header')->text();

// Substituindo com \D tudo que não é numero por nada ''  ou \d
$totalPaginas = preg_replace('/\D/', '', $totalPaginas);

// arredondando pra cima
$totalPaginas = ceil($totalPaginas / 10);

//recebendo itens da pagina 1
$modelos = $crawler->filter('article')->each(function ($node) {
    $return['modelo'] = $node->filter('.title')->text();
    $atributos = $node->filter('th')->each(function ($attr) {
        return $attr->text();
    });

    $valores = $node->filter('td')->each(function ($attr) {
        return $attr->text();
    });
    // juntando arrays com merge, e atribustos com combine
    $return = array_merge($return, array_combine($atributos, $valores));
    return $return;
});

//devolvendo um json
echo json_encode($modelos);
