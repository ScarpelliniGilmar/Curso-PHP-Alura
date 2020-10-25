<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once  'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());// link de acesso

// Acessa o site
$crawler = $browser->request('GET', 'https://www.google.com/search?sxsrf=ALeKk01KWblc8e6tVHHcmE7TsGWAYb8kUg%3A1603651920227&source=hp&ei=UMmVX7iFC-7C5OUP9d6NwA8&q=grafica+marracini&oq=gr&gs_lcp=CgZwc3ktYWIQARgAMgQIIxAnMgQIIxAnMgQIIxAnMgcIABCxAxBDMgcIABCxAxBDMgcILhCxAxBDMgQIABBDMgQIABBDMgQIABBDMgIIADoHCCMQ6gIQJzoFCAAQsQM6CAgAELEDEIMBOggILhCxAxCDAVDHC1iODWDxE2gBcAB4AIABlAGIAZsCkgEDMC4ymAEAoAEBqgEHZ3dzLXdperABCg&sclient=psy-ab');

$lista=[];

// Devolve um array / Seletor css - id # / classe . /
$nomes =  $crawler->filter('div a')->each(function ($node) {
    return $node->text();
});

$lista = $nomes;
print_r($lista);

echo gettype($lista);


