<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once  'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());// link de acesso

// Acessa o site
$crawler = $browser->request('GET', 'https://www.google.com.br/');

//preenche formalario
$html =  $browser->submitForm('Pesquisa Google', [
    'q' => 'grafica marracini'
], 'GET');


var_dump($html);
