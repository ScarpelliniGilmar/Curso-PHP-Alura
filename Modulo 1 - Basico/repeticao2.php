<?php

//$contador = $contador+1;
//$contador += $contador;
//$contador++;

for ($contador = 1; $contador <=15; $contador ++){
    echo "#$contador" . PHP_EOL;
}

echo PHP_EOL;


/**
 * CONTINUE
 * PULA ITERAÇÃO
 *
 * BREAK
 * PARA EXECUÇÃO
 */
for ($contador = 1; $contador <=15; $contador ++){
    if ($contador == 13){
     continue;
    }

    echo  "#$contador" . PHP_EOL;

}
