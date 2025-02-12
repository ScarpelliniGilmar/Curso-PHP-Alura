<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());


$crawler = $browser->request('GET', 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');

//pegando nome de um atributo
$codigos = $crawler->filter('article .img-thumbnail')->each(function ($node) {
    return $node->attr('src');
});

print_r($codigos);
