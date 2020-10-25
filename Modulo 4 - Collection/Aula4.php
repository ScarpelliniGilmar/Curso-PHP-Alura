<?php

require 'TocadorDeMusica.php';
require 'Ranking.php';
require 'Musica.php';

$musicas = new SplFixedArray(4);
$musicas[0] = 'Onde Dance';
$musicas[1] = 'Closer';
$musicas[2] = 'Rockstar';
$musicas[3] = 'Love Yourself';

$tocador = new TocadorDeMusica();
$tocador->adicionarMusicas($musicas);

$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->tocarMusica();

$tocador->avancarMusica();

$tocador->tocarMusica();
$tocador->tocarMusica();

$tocador->avancarMusica();

$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->tocarMusica();

$tocador->avancarMusica();

$tocador->tocarMusica();
$tocador->tocarMusica();

$tocador->exibeRanking();



