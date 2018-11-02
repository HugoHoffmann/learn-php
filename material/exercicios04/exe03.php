<?php
/* 
3. Crie uma funзгo PHP que receba um nъmero e imprima os nъmeros em sequкncia 
 * seguidos por um traзo (o ъltimo nъmero nгo deve conter traзo). 
Exemplo: 1-2-3-4-5-6-7-8-9-10, sendo passado 10 como parвmetro neste caso.
*/
const TRACO = '-';

function seque($iN){
    $sTeste = '';
    for($i = 1; $i < $iN; $i++){
        $sTeste .= $i.TRACO;
    }
    echo $sTeste.$iN;
}


seque(10);
