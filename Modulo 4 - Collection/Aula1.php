<?php
require_once 'TocadorDeMusica.php';

//Biblioteca SPL
// Define um valor fixo do array
$musicas = new SplFixedArray(2);

$musicas[0]= 'Onde Dance';
$musicas[1] = 'Closer';

// alterando o tamanho do array
$musicas->setSize(4);

$musicas[2] = 'Rockstar';
$musicas[3] = 'Love Yourself';

// devolve o tamanho do array
//echo $musicas->getSize();

$tocador = new TocadorDeMusica();

$tocador->adicionarMusicas($musicas);

$tocador->adicionarMusicaNoComeco("Havana");

$tocador->avancarMusica();

$tocador->removerMusicaDoComeco();
$tocador->removerMusicaDoFinal();

$tocador->exibirMusicas();

$tocador->tocarMusica();
$tocador->tocarUltimaMusicaTocada();

//$tocador->exibirQuantidadeDeMusicar();

