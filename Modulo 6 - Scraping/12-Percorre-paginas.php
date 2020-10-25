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

print_r($totalPaginas);
echo "" . PHP_EOL;

// arredondando pra cima
$totalPaginas = ceil($totalPaginas / 10);

//recebendo itens da pagina 1
$modelos = $modelos[] = $crawler->filter('article .title')->each(function ($node) {
    return $node->text();
});


//iterando nas outra paginas
for ($i = 2; $i <= $totalPaginas; $i++) {
    $crawler = $browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/' . $i);

    // recebendo uma novo array dentro de array com array_merge
    $modelos = array_merge($modelos, $crawler->filter('article .title')->each(function ($node) {
        return $node->text();
    }));
}

print_r($modelos);
