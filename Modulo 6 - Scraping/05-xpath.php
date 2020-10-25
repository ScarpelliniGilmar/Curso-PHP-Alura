<?php

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once  'vendor/autoload.php';

$browser = new HttpBrowser(HttpClient::create());// link de acesso

// Acessa o site
$crawler = $browser->request('GET', 'https://www.google.com/search?sxsrf=ALeKk03Athum8dJyIhzAdPf9G-JuyO22EA%3A1603647528745&source=hp&ei=KLiVX8XQKvm65OUP97uMwAk&q=grafica+marracini&oq=gr&gs_lcp=CgZwc3ktYWIQARgAMgQIIxAnMgQIIxAnMgQIIxAnMgUILhCxAzICCAAyBQgAELEDMgUIABCxAzIFCC4QsQMyBQgAELEDMgUILhCxAzoHCCMQ6gIQJzoICAAQsQMQgwE6CAguELEDEIMBUILoAVjY6AFgu-4BaAFwAHgAgAFpiAHNAZIBAzAuMpgBAKABAaoBB2d3cy13aXqwAQo&sclient=psy-ab');

// Seletor html
$text =  $crawler->filterXPath('//span')->text();

var_dump($text);

