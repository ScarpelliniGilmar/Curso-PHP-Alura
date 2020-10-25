<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once  'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());// link de acesso

$browser->setServerParameter('HTTP_USER_AGENT', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36');

// Acessa o site
$crawler = $browser->request('GET', 'https://www.google.com.br/');

print_r($browser->getRequest());

$browser->setServerParameter('HTTP_USER_AGENT', 'Mozilla/5.0 (Linux; Android 7.1.2; AFTMM Build/NS6265; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/70.0.3538.110 Mobile Safari/537.36');

// Acessa o site
$crawler = $browser->request('GET', 'https://www.google.com.br/');


print_r($browser->getRequest());
