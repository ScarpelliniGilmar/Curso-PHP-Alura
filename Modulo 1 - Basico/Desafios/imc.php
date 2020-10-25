<?php

$peso = 70;
$altura = 1.67;

$imc = $peso / $altura ** 2;



if ($imc < 18.5 ) {
    echo "Abaixo";
} elseif($imc < 25) {
    echo "Dentro";
}else{
    echo "Acima";
}
echo " do recomentadado";