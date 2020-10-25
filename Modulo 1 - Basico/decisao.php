<?php

$idade = 18;
$nome = "Gilmar";
$numeroDePeddoas = 2;


echo "Vocè só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado". PHP_EOL;

if ($idade >= 18 && $nome == 'Gilmar'){
    echo "Você tem $idade anos. Pode entrar sozinho!";
} elseif($idade >= 16 && $numeroDePeddoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar!";
} else{
    echo "Você só tem $idade anos. Você não pode entrar";
}


echo PHP_EOL;
ECHO "Adeus";



