<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once  'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());// link de acesso
$crawler = $browser->request('GET', 'https://www.grupomarracini.com.br/');

$html = $crawler->html();

// clicar em um local da pagina - Contato
$contato =  $browser->clickLink('Contato');

$html =  $contato->html();// pegando o html da pagina

var_dump($html);